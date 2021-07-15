<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return redirect('/dashboard');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function dashboard2()
    {
        return view('aliraza.test.test.dashboard2');
    }
}
