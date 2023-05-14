<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    
    public function index()
   {
       // mengambil data dari table pegawai
       $user = Auth::user();

       // mengirim data pegawai ke view index
       return view('profile',['user' => $user]);

   }
    
    public function del()
   {
        $user = Auth::user();

       // mengirim data pegawai ke view index
       return view('profile-delete', ['user' => $user]);

   }

    public function edit(Request $request) 
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->hp = $request->hp;
        $user->address = $request->address;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('images', $filename);
            $user->image =  '/images/' .$filename;
        }

        $user->save();

        return redirect()->route('profile');
    }

    public function delete() 
    {
        $user = User::find(Auth::user()->id);

        $user->delete();

        return redirect()->route('login');
    }  
    
}
