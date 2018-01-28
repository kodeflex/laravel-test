<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getAll() {
      return User::all();
    }

    public function getOne($id) {
      return User::find($id);
    }

    public function post(Request $request) {
      $user = new User;
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = $request->input('password');
      
      return $user->save();
    }

    public function put(User $user) {
      $user = new User;
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = $request->input('password');
      
      return $user->save();
    }

    public function delete($id) {
      $user = User::find($id);
      return $user->delete();
    }
}
