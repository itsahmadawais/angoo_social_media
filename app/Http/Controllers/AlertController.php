<?php

namespace App\Http\Controllers;

use App\Models\ChMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlertController extends Controller
{
    public function index(){
        $user = Auth::user();
        $message = ChMessage::where([
            'to_id'=>$user->id,
            'seen'=>0
        ])->groupBy('from_id')->count();
        $data=[];
        $data['messages']= $message;
        return response()->json($data,200);
    }
}
