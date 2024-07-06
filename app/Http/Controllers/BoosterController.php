<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
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

    public function booster()
    {
        return view('booster.chat');
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('booster.broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request)
    {
        return view('booster.receive', ['message' => $request->get('message')]);
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

    public function EditBooster($id){
        $booster = Booster::find($id);
        return view('booster.edit', compact('booster'));
    }
    public function UpdateBooster (Request $request, $id){
        $booster = Booster::find($id);
        $booster->name = $request->input('name');
        $booster->email = $request->input('email');
        $booster->update();
        return redirect(route('admin.booster'))->with('status', 'booster Updated Successfully');
    }
    public function DeleteBooster(Request $request, $id)
    {
        $booster = Booster::find($id);
        $booster->delete();

        return redirect(route('admin.booster'))->with('status', 'booster deleted successfully');
    }

    public function confirmDelete($id)
    {
        $booster = Booster::find($id);
        return view('booster.confirm-delete', compact('booster'));
    }

    public function listBooster()
    {
        $booster = Booster::all();
        return view('user.booster', compact('booster'));
    }

}
