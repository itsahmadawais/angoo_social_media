<?php

namespace App\Http\Controllers;

use App\Models\FriendRequest;
use App\Models\Friends;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function send_friend_request(Request $request){
        $friend_request = FriendRequest::where([
            'source_id' => Auth::id(),
            'target_id' => $request->friend,
            'status' => 'pending'
        ])->get();
        if($friend_request==null || count($friend_request)<=0){
            $friend_request = FriendRequest::create([
                'source_id' => Auth::id(),
                'target_id' => $request->friend,
                'status' => 'pending'
            ]);
        }
        return response()->json([
            'success' => 'success',
            'message' => 'Friend Request sent.',
        ],200);
    }
    public function friends_request(){
        $user = Auth::user();
        $friends_request = DB::table('users')
                           ->join('friends_request','friends_request.target_id','users.id')
                           ->where('friends_request.target_id',$user->id)
                           ->where('friends_request.status','pending')
                           ->select('users.*','friends_request.id as friend_request_id')
                           ->get();
        return view('frontend.profile.friends-request')
               ->with('friends_request',$friends_request)
               ->with('user',$user);
    }
    public function accept_friend_request(Request $request){
        $friend_request = FriendRequest::findOrFail($request->id);
        $friend = Friends::create([
            'user_id' => $friend_request->source_id,
            'friend_id' => $friend_request->target_id
        ]);
        $friend = Friends::create([
            'user_id' => $friend_request->target_id,
            'friend_id' => $friend_request->source_id
        ]);
        $friend_request->delete();
        return back();
    }
    public function delete_friend_request(Request $request){
        $friend_request = FriendRequest::findOrFail($request->id);
        $friend_request->delete();
        return back();
    }
    public function unfriend(Request $request){
        $request->validate([
            'friend_id' => 'required'
        ]);
        $friend = Friends::where([
            'user_id' => Auth::id(),
            'friend_id' => $request->friend_id
        ])->first()->delete();
        $friend = Friends::where([
            'user_id' => $request->friend_id,
            'friend_id' => Auth::id()
        ])->first()->delete();
        return back();
    }
}
