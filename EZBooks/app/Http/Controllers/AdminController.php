<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function onLogin() {
        return view('admin.login');
    }
    public function checkExistence(Request $request) {
        $user = User::where('username', $request->input('username'))
            ->where('password', $request->input('password'))
            ->first();
        if($user) {
            session()->put('admin', $user);
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login');
    }
}
