<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function signup()
    {
      return view('users/signup');
    }

    public function create()
    {
      return view('users.create');
    }

    public function show($id)
    {
      $user = User::findOrFail($id);
      return view('users.show', compact('user'));
    }
}
