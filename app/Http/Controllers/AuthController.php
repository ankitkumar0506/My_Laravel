<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index1()
    {
        return view('register');
    }
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)

    {
        $user = new User;
        // $user = new user;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = $request->password;
        $user->save();
        return redirect ('/register');


    }

    public function validate_login(request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);
        $credential = $request->only('email','password');
        if(Auth::attempt($credential))
        {
            if(Auth::user()->role_as == 1)
            {
                return redirect('/admin/dasbord');

            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home');

            }

            else
            {
                return redirect('/home');
            }

        }
    }

}


