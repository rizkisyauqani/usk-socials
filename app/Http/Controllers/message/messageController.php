<?php

namespace App\Http\Controllers\message;

use App\Events\SendMessage;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
    public function index()
    {
        $friends = User::where('id','!=', Auth::user()->id)->get();
        return view('message.main', [
            'friends' => $friends
        ]);
    }

    public function saveChat(Request $request){
        $roomId = $request->roomId;
        $message = $request->message;
        $userId = Auth::user()->id;
        SendMessage::dispatch($roomId, $userId, $message);
        $data = Message::create([
            "room_id" => $roomId,
            "user_id" => $userId,
            "message" => $message
        ]);

        return response()->json([
            "success" => true,
            "message" =>  $data
        ]);
    }


    public function loadChat($roomId){
        $message = Message::where('room_id', $roomId)->orderBy('updated_at', "asc")->get();

        return response()->json([
            "success" => true,
            "data" => $message
        ]);
    }
}
