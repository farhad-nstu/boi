<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function userRegister() {
        return view('front.user.register');
    }

    public function manageUser() {
        return view('admin.user.manage-user', [
            'users' => User::where('role_id', 2)->get()
        ]);
    }


}
