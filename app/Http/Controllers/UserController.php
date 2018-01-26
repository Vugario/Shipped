<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Show the user's dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('user.dashboard');
    }
}
