<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $payments = Payment::latest()->paginate(10);
        return view('admin.payment.index', compact('payments'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Response
     */
    public function show($id)
    {
        $payment = Payment::findOrFail($id);
        return view('admin.payment.view',compact('payment'));
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
