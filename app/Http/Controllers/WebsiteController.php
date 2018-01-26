<?php

namespace App\Http\Controllers;

class WebsiteController extends Controller
{
    /**
     * Show the website's homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
    }
}
