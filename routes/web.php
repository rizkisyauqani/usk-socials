<?php

use App\Http\Controllers\homePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::get('/register', function () {
    return view('register')->name('register');
});

Route::middleware('auth')->group(function(){
    Route::get('/', [homePageController::class, 'index'])->name('homepage');

    Route::get('/@{email}', [ProfileController::class, 'profilePage'])->name('profilePage');

    Route::prefix('tweet')->name('tweet.')->group(function(){
        Route::post('/', [TweetController::class, 'create'])->name('create');
    });

    Route::post('/like', [TweetController::class, 'like'])->name('like-tweet');
    Route::post('/dislike', [TweetController::class, 'dislike'])->name('dislike-tweet');
    Route::get('/countlike/{tweetId}', [TweetController::class, 'countLike'])->name('countLike-tweet');
    Route::get('/checkAkunLike/{tweetId}/{userId}', [TweetController::class, 'checkAkunLike'])->name('checkAkunLike-tweet');
});


Route::get('/change-password', function () {
    return view('account.change-password', ['title' => 'change password', 'user' => Auth::user()]);
});

Route::get('/messages', function () {
    return view();
});

Route::get('/preferences', function () {
    return view('account.preferences', ['user' => Auth::user(), 'title' => 'preferences']);
});


Route::get('/detail', function () {
    return view('detail-profile');
});

Route::get('/dashboard-profile', function () {
    return view('account.dashboard-profile', ['user' => Auth::user(), 'title' => 'dashboard profile']);
});

Route::get('/profile', [UserController::class, 'index'])->name('profile');

Route::patch('/profile', [UserController::class, 'edit'])->name('profile-edit');

Route::patch('/change-password', [UserController::class, 'changePassword'])->name('password-change');

Route::get('/profile-delete', [UserController::class, 'del'])->name('profile-page-delete');

Route::delete('/profile-delete-account', [UserController::class, 'delete'])->name('profile-delete');





require __DIR__.'/auth.php';
