<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\Classes;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

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
    public function profile()
    {

        return view('profile');
    }
    public function profileStore(Request $request)
    {
        // var_dump(time()); exit;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'address' => 'required',
            'user_profile' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);
  
        $fileName = time().'.'.$request->user_profile->extension();
        $request->user_profile->move(public_path('/uploads/profiles'), $fileName);

        $user = User::find(Auth::user()->id);

            if(file_exists(public_path('/uploads/profiles/'.$user->user_profile))){
                unlink(public_path('/uploads/profiles/'.$user->user_profile));
            }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->address = $request->address;
        $user->user_profile = $fileName;
        $user->update();
   
        return back()->with('success','You have successfully update profile.');

    }
    public function changePassword()
    {

        return view('auth.change-password');
    }
    public function changePasswordStore(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        if (Hash::check($request->old_password, $user->password)) {


            $user->password = Hash::make($request->new_password);
            $user->update();
       
            return back()->with('success','You have successfully update profile.');
        }
        else
        {
            return back()->with('error','Old Pasword');
        }

    }
}
