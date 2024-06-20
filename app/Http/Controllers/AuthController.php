<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function actionLogin(Request $req)
    {
        // dd($req);
        $dataLogin =[
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];

        if (Auth::attempt($dataLogin)) {
            return redirect('/');
        }
        
        else{
            return back();
        }
    }

    function actionLogout()
    {
        Auth::logout();

        return Redirect('login');
    }

    function generateData()
    {
        User::create([
            'name' => 'Pororo',
            'email' => 'Pororo@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'remember_token' => Str::random(10),
        ]);
    }
}
