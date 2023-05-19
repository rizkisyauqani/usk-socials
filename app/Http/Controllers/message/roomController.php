<?php

namespace App\Http\Controllers\message;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;


class roomController extends Controller
{
    public function create(Request $request){
        $me =  $request->me;
        $friend = $request->friend_id;

        $room = Room::where("users", $me.":".$friend)->orWhere("users", $friend.":".$me)->first();

        if ($room){
            $dataRoom = $room;
        } else {
            $dataRoom = Room::create([
                "users" => $me.":".$friend
            ]);
        }

        return response()->json([
            "success" => true,
            "data" => $dataRoom
        ]);
    }
}
