<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show Admin Dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.dashboard');
    }

    public function coaches()
    {
        return view('admin.coaches');
    }
    public function Basicadd()
    {
        return view('admin.basics');
    }
    public function messagechat()
    {
        return view('admin.message');
    }
    public function Subjectadd()
    {
        return view('admin.subject');
    }
    public function varificationadd()
    {
        return view('admin.varification');
    }
    public function  myclass()
    {
        return view('admin.Myclassroom');
    }
    public function studentDetails()
    {
        return view('admin.student-details');
    }
    public function categories()
    {
        return view('admin.categories');
    }
    public function bookings()
    {
        return view('admin.bookings');
    }
    public function access()
    {
        return view('admin.access');
    }
    public function roleDetail()
    {
        return view('admin.role-detail');
    }
    public function ledgerDetails()
    {
        return view('admin.ledger-details');
    }
    public function detailadd()
    {
        return view('Detailadd');
    }
    public function profilecheck()
    {
        return view('admin.Profile');
    }
    public function studenthome()
    {
        return view('student\Detailadd');
    }
    public function studentmessage()
    {
        return view('student\message');
    }
    public function studentuser()
    {
        return view('student\Profile');
    }
    public function studentmess()
    {
        return view('student\message');
    }
    public function studentsubj()
    {
        return view('student\Subject');
    }
    public function studentvarr()
    {
        return view('student\Varification');
    }
}
