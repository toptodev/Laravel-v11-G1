<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthController extends Controller
{
  // use AuthenticatesUsers;

  public function __construct() {}

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // Validate the form data
    $validated = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    return $validated;

    // Attempt to log the user in
    if (Auth::attempt($request->except(['_token']))) {
      // dd(Auth::user());

      // if successful, then redirect to their intended location
      return redirect()->intended(route('admin.dashboard.index'));
    }

    // if unsuccessful, then redirect back to the login with the form data

    return redirect()->back()->withInput($request->only('username'));
  }

  public function logout(Request $request)
  {
    Auth::logout();

    return redirect()->route('admin.index');
  }
}
