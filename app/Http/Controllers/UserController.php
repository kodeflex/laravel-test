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

    public function post(User $user) {
      //
      return [];
    }

    public function put(User $user) {
      //
      return [];
    }

    public function delete($id) {
      //
      return [];
    }
}
