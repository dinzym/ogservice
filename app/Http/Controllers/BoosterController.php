<?php

namespace App\Http\Controllers;

use App\Models\Booster;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class BoosterController extends Controller
{
    public function Index(){
        return view('booster.booster_login');
    }// Method En

    public function BoosterDashboard(){
        return view('booster.index');
    }

    public function BoosterLogin (Request $request)
    {
        //dd($request->all());

        $check = $request->all();
        if (Auth::guard('booster')->attempt(['email' => $check['email'], 'password'
        => $check['password']])) {
            return redirect()->route('booster.dashboard')->with('error', 'Booster
            Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }// Method End

    public function BoosterLogout(){
        Auth::guard('booster')->logout();
        return redirect()->route('booster_login_form')->with('error', 'Booster
            Logout Successfully');
    }

    public function BoosterRegister(){
        return view('booster.booster_register');
    }

    public function BoosterRegisterCreate(Request $request){
        //dd($request->all());

        Booster::Insert([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => hash::make ($request ->password),
            'created_at' => Carbon::now(),
        ]);


        return redirect()->route('booster_login_form')->with('error', 'Booster
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

}
