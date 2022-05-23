<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/customer');
        }
        return redirect('/login');
    }
    public function logout()
    {
        return redirect('/login');
    }

    public function postregister(Request $request)
    {
        $user = new \App\User;
        $user->role = 'customer';
        $user->name = $request->nama_cust;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $customer = \App\Customer::create($request->all());

        return redirect('/login')->with('sukses', 'data pendaftaran berhasil');
    }
}
