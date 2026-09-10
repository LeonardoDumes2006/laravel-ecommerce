<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        // dd([
        //     'email' => $request->input('email'),
        //     'password_received' => $request->filled('password'),
        //     'all_fields' => array_keys($request->all()),
        // ]);

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else 
        {
            return back()->withErrors([
                'email' => 'Credenciais Inválidas'
            ]);
        }
    }
}
