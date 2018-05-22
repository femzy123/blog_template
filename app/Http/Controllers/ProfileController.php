<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($name) {
        $user = User::whereName($name)->first();

        return view('user.profile', compact('user'));
    }
}
