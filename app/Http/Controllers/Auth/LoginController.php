<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $attr = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);



        $user = User::whereEmail(request('email'))->first();
        if ($user){
            Auth::login($user);
            return redirect()->intended('/');

        } else {
            return back()->with('error', 'Kami tidak dapat menemukan kredensial yang anda masukkan');
        }

        
    }
}
