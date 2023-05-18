<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homePageController extends Controller
{
    public function index()
    {
        $tweets = Tweet::latest()->with('user', 'likes')->get();
        $users = User::where('id', "!=", Auth::user()->id)->get();
        return view('homepage', [
            "users" => $users,
            "tweets" => $tweets,
            "auth" => Auth::user()
        ]);
    }
}
