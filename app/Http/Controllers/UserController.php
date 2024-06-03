<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['userData' => $user]);
            return redirect()->route('dashboard');
            // return response()->json([
            //     'message'=>'Login Successfully'
            // ]);
        } else {
            return redirect()->route('login')->with('error', 'Invalid username/password!!');
        }
    }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function getCompanyInfo()
    {
        return view('setting_comp_info.blade');
    }
}
