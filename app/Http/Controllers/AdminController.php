<?php

namespace App\Http\Controllers;

use App\Models\Booster;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.admin_login');
    }// Method End

    public function Dashboard(){
        return view('admin.index');
    }// Method End

    public function AdminCustomer(){
        $users = User::all();
        return view('admin.admin_user', compact('users'));
    }// Method End

    public function AdminBooster(){
        $booster = Booster::all();
        return view('admin.admin_booster', compact('booster'));
    }// Method End

    public function Login(Request $request)
    {
        //dd($request->all());

        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password'
        => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('error', 'Admin
            Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }// Method End

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error', 'Admin
            Logout Successfully');
    }

    public function AdminRegister(){
        return view('admin.admin_register');
    }

    public function AdminRegisterCreate(Request $request){
        //dd($request->all());

        Admin::insert([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => hash::make ($request ->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login_form')->with('error', 'Admin
           Sign Up Successfully');
    }
    public function Validation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Validation passed, create user and proceed with registration logic
        // ...
    }

    private function emailExists($email)
    {
        return Admin::where('email', $email)->exists();
    }



}
