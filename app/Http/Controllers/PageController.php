<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Auth;

class PageController extends Controller
{
    public function userprofile($username, $id){
        $user = User::findOrFail($id);
        return view('user/profile',[
            'user'=>$user
        ]);
    }

    public function profileupdate(){
        $user = User::where('id',Auth::user()->id)->first();
        return view('user/profileupdate',[
            'user'=>$user
        ]);
    }

    public function postachievement(){
        $user = User::where('id',Auth::user()->id)->first();
        return view('user/postachievement',[
            'user'=>$user
        ]);
    }

    public function myfeed(){
        return view('user/myfeed');
    }

    public function userfeed($id){
        $id = Crypt::decryptString($id);
        return view('user/userfeed',[
            'id'=>$id
        ]);
    }
}
