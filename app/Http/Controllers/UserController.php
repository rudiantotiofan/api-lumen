<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function info()
  {
    return response()->json(['user' => Auth::user()], 200);
  }
}
