<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function edit(){
        return view('panel.user.edit');
    }

    public function index(){

        $users = User::paginate(10);

        return view('panel.user.index')->with('users',$users);
    }
}
