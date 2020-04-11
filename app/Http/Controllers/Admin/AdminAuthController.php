<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin()
    {
        $rememberMe = request('rememberMe') == 1 ? true : false;
        if (auth()->guard('admin')->
        attempt(['email' => request('email'), 'password' => request('password')], $rememberMe)){
            return redirect('admin');
        }else{
            session()->flash('error', trans('admin.incorrect_information_login'));
        }
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('admin/logout');
    }
}
