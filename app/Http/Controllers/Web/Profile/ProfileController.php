<?php

namespace App\Http\Controllers\Web\Profile;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $addresses = Address::where('user_id', Auth::guard('web')->user()->id)->get();
        return view('web.profile.profile', compact('addresses'));
    }

    public function edit() {
        $user = User::find(Auth::guard('web')->user()->id);
        return view('web.profile.edit-profile', compact('user'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'   => 'required|string',
            'email' => 'required|email',
            'mobile' =>  ['required','digits:10','numeric']
        ]);
        $user_id = Auth::guard('web')->user()->id;
        $user = User::find($user_id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        if($user->save()){
            return redirect()->route('web.profile.index')->with('message', 'Profile Updated Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
