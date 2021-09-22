<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use App\Notifications\LoginOtp;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    /**
     * send Otp to login
     */
    public function sendOtpToEmail()
    {
        $email = request()->get('email');
        $otp = mt_rand(1000, 9999);

        $data = [];
        if (is_numeric($email)) {
            $data['phone'] = $email;
        } else {
            $this->validate(request(), [
                'email' => 'required|email'
            ], [
                'email' => 'please input valid email address or phone number'
            ]);
            $data['email'] = $email;
        }
        $user = User::firstOrcreate($data);
        $user->otp = $otp;
        $user->save();

        if ($user->email)
            Mail::to($user->email)->send(new OtpMail($otp));


        //$this->showOtpForm($user);


        return redirect(route('otp.screen', [Crypt::encryptString($user->id)]));
    }

    public function showOtpForm($token)
    {
        return view('verify', ['token' => $token]);
    }

    public function otpVerify()
    {
        try {
            $user_id = Crypt::decryptString(request()->get('user'));
        } catch (DecryptException $e) {
            //
        }

        $user = User::findOrFail($user_id);
        $otp_received = request()->get('code');

        $validator = Validator::make(
            ['otp' => $user->otp, 'otp_received' => $otp_received],
            [
                'otp' => 'same:otp_received'
            ],
            ['same' => 'verification failed']
        );

        $validator->validate();

        //TODO :- email and mobile verified at data update
        if( $user){
            Auth::login($user, true);

        }

        return redirect(route('profile'));

    }

    // email check or create new user
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
