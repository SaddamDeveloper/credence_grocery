<?php

namespace App\Http\Controllers\Web\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('web.user.register');
    }

    public function register(Request $request){
        $this->validate($request, [
            'name'   => 'required|string',
            'email' => 'required|email|unique:users',
            'mobile' =>  ['required','digits:10','numeric', 'unique:users'],
            'password' => 'required|same:confirm_password|min:6'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->password = Hash::make($request->input('password'));

        if($user->save()){
            return redirect()->route('web.user.login')->with('message', 'Successfully Registered! You can Login Now');
        }else {
            return redirect()->back()->with('error', 'Something Went Wrong! Try after sometime');
        }
    }
}
