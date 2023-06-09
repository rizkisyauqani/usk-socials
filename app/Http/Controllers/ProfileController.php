<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profilePage($email)
    {
        $user = User::where('email', $email)->first();
        $tweets = Tweet::where('user_id', $user->id)->with('user')->get();
        return view('profile.detail', [
            "user" => $user,
            "tweets" => $tweets,
            "auth" => Auth::user()
        ]);
    }
}
