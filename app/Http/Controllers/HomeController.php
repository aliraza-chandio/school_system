<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\Classes;
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

        $teachers = Teacher::All();
        $classes = Classes::All();

        $teachersCount = $teachers->count();
        $classesCount = $classes->count();
        $classesActive = Classes::where('status','Active')->count();
        $classesDeactive = Classes::where('status','Deactive')->count();

        return view('dashboard', compact('teachersCount', 'classesCount', 'classesActive', 'classesDeactive'));
    }
    public function dashboard2()
    {
        return view('aliraza.test.test.dashboard2');
    }
}
