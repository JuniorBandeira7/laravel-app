<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::paginate(20);

        return view('users', compact('users'));
    }
}
