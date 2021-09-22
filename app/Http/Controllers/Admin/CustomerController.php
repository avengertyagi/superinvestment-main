<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.customer.index', compact('users'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.customer.view',compact('user'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }



}
