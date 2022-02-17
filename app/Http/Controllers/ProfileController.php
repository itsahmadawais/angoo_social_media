<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function view($username){
        $user = User::where('username',$username)->first();
        if($user==null){
            abort(404);
        }
        return view('frontend.profile.profile')->with('user',$user);
    }
    public function about($username){
        $user = User::where('username',$username)->first();
        $privacy = Privacy::all();
        if($user==null){
            abort(404);
        }
        return view('frontend.profile.about')
               ->with('user',$user)
               ->with('privacy',$privacy);
    }
    public function friends($username){
        $user = User::where('username',$username)->first();
        $possibleFriends = DB::table("users")
                           //->where('users.id',Auth::id())
                           ->get();
        if($user==null){
            abort(404);
        } 
        return view('frontend.profile.friends')
               ->with('user',$user)
               ->with('possibleFriends',$possibleFriends);
    }
    public function update_cover_photo(Request $request){
        $user = Auth::user();
    	 $request->validate([
            'cover_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imageName = time().'.'.$request->cover_photo->extension();  
     
        $request->cover_photo->move(public_path('storage/cover_photos'), $imageName);
        $user->cover_photo = $imageName;
        $user->save();
        return back();
    }
    public function update_avatar_photo(Request $request){
        $user = Auth::user();
    	 $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imageName = time().'.'.$request->avatar->extension();  
     
        $request->avatar->move(public_path('storage/users-avatar'), $imageName);
        $user->avatar = $imageName;
        $user->save();
        return back();
    }
}
