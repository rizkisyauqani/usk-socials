<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            "content" => "required"
        ]);
        $tweet = new Tweet();
        $tweet->user_id = Auth::user()->id;
        $tweet->content = $request->content;

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('assets/upload/tweet/', $filename);
            $tweet->image =  '/assets/upload/tweet/' .$filename;
        }
        $tweet->save();

        return redirect()->route('homepage');
    }

    public function like(Request $request)
    {
        $checklike = Like::where('user_id', $request->userId)->where('tweet_id', $request->tweetId)->first();
        if ($checklike) {
            return response()->json([
                'status' => false,
                'message' => $checklike
            ]);
        }
        $like = new Like();
        $like->user_id = $request->userId;
        $like->tweet_id = $request->tweetId;
        $like->save();

        return response()->json([
            'status' => true,
            'message' => "Like Success"
        ]);
    }

    public function dislike(Request $request)
    {
        $like = Like::where('user_id', $request->userId)->where('tweet_id', $request->tweetId)->first();
        $like->delete();

        return response()->json([
            'message' => "Dislike Success"
        ]);
    }

    public function countLike($tweetId)
    {
        $like = Like::where('tweet_id', $tweetId)->count();
        return response()->json([
            'message' => "success get count like",
            'data' => $like
        ]);
    }

    public function checkAkunLike($tweetId, $userId)
    {
        $like = Like::where('user_id', $userId)->where('tweet_id', $tweetId)->first();
        $status = false;

        if ($like) {
            $status = true;
        }
        return response()->json([
            'message' => "success get count like",
            'data' => $status
        ]);
    }
}
