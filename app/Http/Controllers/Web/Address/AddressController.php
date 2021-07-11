<?php

namespace App\Http\Controllers\Web\Address;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function index() {
        $addresses = Address::where('user_id', Auth::guard('web')->user()->id)->get();
        return view('web.address.address', compact('addresses'));
    }

    public function edit($id) {
        try {
            $id = decrypt($id);
        } catch (\Exception $e) {
            abort(404);
        }
        $address = Address::find($id);
        return view('web.address.edit-address', compact('address'));
    }
    public function addAddress(){
        return view('web.address.add-address');
    }
    public function add(Request $request){
        $this->validate($request, [
            'name'   => 'required|string',
            'email' => 'required|email',
            'mobile'   =>  ['required','digits:10','numeric'],
        ]);
        $id = Auth::guard('web')->user()->id;
        $address = new Address();
        $address->name = $request->input('name');
        $address->user_id = $id;
        $address->email = $request->input('email');
        $address->mobile = $request->input('mobile');
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->pin = $request->input('pin');
        if($address->save()){
            return redirect()->back()->with('message', 'Address Successfully Added!');
        }else {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }

    public function update(Request $request){
        $this->validate($request, [
            'name'   => 'required|string',
            'email' => 'required|email',
            'mobile'   =>  ['required','digits:10','numeric'],
        ]);

        $id = $request->input('id');
        $address = Address::find($id);
        $address->name = $request->input('name');
        $address->email = $request->input('email');
        $address->mobile = $request->input('mobile');
        $address->address = $request->input('address');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->pin = $request->input('pin');
        if($address->save()){
            return redirect()->back()->with('message', 'Address Successfully Updated');
        }else {
            return redirect()->back()->with('error', 'Something Went Wrong!');
        }
    }
}
