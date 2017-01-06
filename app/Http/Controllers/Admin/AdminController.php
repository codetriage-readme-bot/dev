<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getIndex()
    {
        return redirect('/admin');
    }
//Auth
    public function login(Request $request)
    {
        if (Auth::check() || Auth::viaRemember()) {
            return redirect('/admin');
        } else {
            if ($request->isMethod('post')) {
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password], 1)) {
                    return response('success');
                } else {
                    return response('error', 400);
                }
            }
        }

        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
