<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\KycData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KycController  extends Controller
{
    public function startKyc()
    {
        $user = User::with('kycData')->findOrFail(auth()->user()->id);

        return view('customer.kyc1', compact('user'));
    }

    public function confirmESign(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if ($user && $request->isMethod('post') ) {
            $validator = Validator::make($request->all(),[
                'digio_doc_id'=>'required',
                'txn_id'=>'required',
            ]);

            if($validator->fails() )
            return response()->json(['data' => 'failed']);

            $kyc_data = $user->kycData()->firstOrNew();
            $kyc_data->digio_doc_id =  $request->digio_doc_id;
            $kyc_data->txn_id =  $request->txn_id;
            $kyc_data->kyc_at = now();
            $kyc_data->save();
            return response()->json(['data' => 'success']);
        }
        else{
            $id = $user->doKycFirstStep();
            return view('customer.kyc-e-signin', compact('user','id'));
        }



    }

    public function bankInfo(Request $request)
    {
        $user = User::with('kycData')->findOrFail(auth()->user()->id);
        if ($user && $request->isMethod('post')) {
            $kyc_data = $user->kycData()->firstOrNew();
            $kyc_data->bank_account_number =  $request->bank_account_number;
            $kyc_data->bank_ifsc_code =  $request->bank_ifsc_code;
            $kyc_data->save();
            $user->refresh();
            return redirect()->route('profile');
        }
        return view('customer.kyc-bank-info', compact('user'));
    }
    public function bankDocs(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('customer.kyc-bank-docs', compact('user'));
    }

    public function uploadFile(Request $request)
    {
        if ($request->has('user_id') && ($type = $request->get('type'))  && $request->hasFile('file') && ($user = User::findOrFail(auth()->user()->id))) {
            ${$type . '_path'} = $request->file('file')->storeAs('public', 'users/' . $user->id . '/kyc/' . $type . '.' . $request->file('file')->extension());
            $kyc_data = $user->kycData()->firstOrNew();
            $kyc_data->{$type . '_path'} =   ${$type . '_path'};
            $kyc_data->save();
            if ($kyc_data)
                return response()->json(['data' => 'success', 'path' =>  $user->image_path, 'type' => $type]);
        }
        return response()->json(['data' => 'error','message' => 'failed']);
    }
}
