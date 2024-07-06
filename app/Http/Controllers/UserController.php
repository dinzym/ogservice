<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

    

class UserController extends Controller
{
    public function EditUser($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    public function UpdateUser (Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->update();
        return redirect(route('admin.customer'))->with('status', 'User Updated Successfully');
    }
    public function DeleteUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.customer'))->with('status', 'User deleted successfully');
    }

    public function confirmDelete($id)
    {
        $user = User::find($id);
        return view('user.confirm-delete', compact('user'));
    }
     public function profileedit($id){
         $user = User::find($id);
         $user->name =  $request->input('name');
         $user->email = $request->input('email');
         $user->update();
         return redirect(route('gamer.dashboard'))->with('status', 'User Updated Successfully');
     }
}
