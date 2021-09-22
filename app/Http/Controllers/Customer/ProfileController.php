<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('customer.profile', ['user' => Auth()->user()]);
    }

    public function updateProfile(Request $request)
    {
        // dd($request);
        $request->validate([
            'first_name' => 'required',
            'email' => 'required|unique:users,email,' . auth()->user()->id,
            'phone' => 'required|digits:10|unique:users,phone,' . auth()->user()->id,
            'occupation' => 'required',
        ]);
        $user = User::find(auth()->user()->id);
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->occupation = $request->occupation;
        $user->din_no = $request->din_no;
        $user->save();
        $request->session()->flash('success','Profile Updated Successfully');
        return redirect()->route('profile');
    }

    public function uploadImage(Request $request)
    {
        if ($request->has('user_id') && $request->has('type')  && $request->hasFile('file') && ($user = User::findOrFail($request->get('user_id')))) {
            $user->image_path = $request->file('file')->store('/users/' . $user->id .'/'. $request->get('type'), 'public');
            $user->save();
            return response()->json(['data' => 'success', 'path' =>  $user->image_path ,'type'=> $request->get('type')]);
        }
        return response()->json(['error' => 'failed'  ]);
    }

    public function myPortfolio()
    {
        $user = User::find(auth()->user()->id);
        return view('portfolio', compact('user'));
    }
}
