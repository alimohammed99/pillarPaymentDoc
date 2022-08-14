<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //REDIRECT FUNCTION DID NOT WORK. SO I USED INDEX FUNCTION.
    public function index()
    {
          $usertype = Auth::user()->usertype;

        if($usertype == '0'){
            return view('user.home');
        }else{
            return view('admin.home');
        }
    }


    public function indexx()
    {
        
            return view('user.home');
        
    }
}
