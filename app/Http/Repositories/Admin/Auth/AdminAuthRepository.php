<?php

namespace App\Http\Repositories\Admin\Auth;

use App\Http\Interfaces\Admin\Auth\AdminAuthInterface;
use Illuminate\Support\Facades\Auth;

class AdminAuthRepository implements AdminAuthInterface
{

    public function login()
    {
        return view('admin.dashboard.auth.login');
    }

    public function postLogin($request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){
            return redirect(route('admin.home'));
        }
        session()->flash('error', 'User Not Found');
        return redirect()->back();
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();

        return redirect(route('admin.login'));
    }
}
