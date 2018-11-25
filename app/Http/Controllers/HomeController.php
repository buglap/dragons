<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }
    public function contact()
    {
        $user = Auth::user();
        return view('contact', compact('user'));
    }
    public function about()
    {
        $user = Auth::user();
        return view('about', compact('user'));
    }
}
