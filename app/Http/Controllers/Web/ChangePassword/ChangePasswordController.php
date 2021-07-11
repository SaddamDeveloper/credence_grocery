<?php

namespace App\Http\Controllers\Web\ChangePassword;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('web.profile.change-password');
    }
    public function changePassword(Request $request){
        $this->validate($request, [
            'old_password'   => 'required',
            'new_password'   => 'required|min:6|same:confirm_password'
        ]);
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $user = User::find(Auth::guard('web')->user()->id);
        if(!Hash::check($old_password, $user->password)){
            return redirect()->back()->with('error', 'Current password doesn\'t match');
        }
        $user->password = Hash::make($new_password);
        if($user->save()){
            return redirect()->back()->with('message', 'Password Successfully Changed!');
        }else {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
