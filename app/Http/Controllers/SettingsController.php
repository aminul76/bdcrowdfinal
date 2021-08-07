<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
use App\User;


class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function changepassword()
    {
        return view('admin.passwordchange');
    }

    public function updatePassword(Request $request)
    {
            

        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('success','Change Password Successfuly');
                
                Auth::logout();
                return redirect()->back();
            } else {
                return redirect()->back()->with('error','New password cannot be the same as old password');
            }
        } else {
            return redirect()->back()->with('error','Current password not match');
        }

    }
}
