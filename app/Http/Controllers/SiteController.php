<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'h3sl4b') {
            session(['is_admin_logged_in' => true]);
            return redirect('/admin/members')->with('success', 'Welcome, Admin!');
        }

        return back()->with('error', 'Invalid username or password.');
    }


    public function logout(Request $request)
    {
        $request->session()->forget('is_admin_logged_in');
        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}
