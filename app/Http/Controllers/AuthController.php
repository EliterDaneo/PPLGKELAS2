<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    if ($user = Auth::user()) {
      if ($user->level == 'admin') {
        return redirect()->intended('admin');
      } elseif ($user->level == 'siswa') {
        return redirect()->intended('siswa');
      }
    }
    return view('login');
  }
}
