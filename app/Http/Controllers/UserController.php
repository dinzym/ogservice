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
    public function UpdateUser(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->update();
        return redirect(route('admin.customer'))->back()->with('status', 'User Updated Successfully');
    }

}
