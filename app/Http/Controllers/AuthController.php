<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $data =  $request->all();
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $data['email'];
        $password = $data['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password, 'email_verified_at' => NULL])) {
            return redirect('/dashboard');
        }

    }
    public function register()
    {
    	return view('auth.register');
    }
    public function registerPost(Request $request)
    {

    	
        $validated = $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:20',
            'name' => 'required',
        ]);
        $data =  $request->all();
    	$name = $data['name'];
    	$email = $data['email'];
    	$password = Hash::make($data['password']);

    	$user = new User;
    	$user->name =$name;
    	$user->email = $email;
    	$user->password =$password;
    	$user->save();

    	return redirect('/login')->with('warning','Register Successfully. Please confirm your email adress first');
    	

    }
}
