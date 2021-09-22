<?php

namespace App\Http\Controllers\Assets;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Deal;
use App\Models\Payment;
use Razorpay\Api\Api;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssetController extends Controller
{
    public function store(Request  $request)
    {
        $validator = Validator::make($request->all(), [
            'invest_amount' => 'required|min:0'
        ]);

        if ($validator->fails()) {
            return response()->json(['data' => 'failed', 'message' => 'Investment amount is required']);
        }

        $user = User::find(auth()->user()->id);
        $deal = Deal::find($request->deal_id);
        if ($user && $deal) {
            $asset = Asset::where(['user_id' => $user->id, 'deal_id' => $deal->id])->first();
            if ($asset)
                $asset->update([
                    'investment' => $request->invest_amount,
                ]);
            else
                $asset = Asset::create([
                    'asset_id' => uniqid(),
                    'user_id' => $user->id,
                    'deal_id' => $deal->id,
                    'investment' => $request->invest_amount,
                ]);
        }
        if ($asset && $asset->id)
            return response()->json(['data' => 'success', 'message' => 'Investment Added ! please prceed to pay', 'asset_id' => $asset->asset_id]);
        else
            return response()->json(['data' => 'failed', 'message' => 'Please ! Try Again']);
    }

    public function dealSummary($id)
    {
        $asset = Asset::where(['user_id' => auth()->user()->id, 'asset_id' => $id])->first();
        return view('deals.dealsummary', compact('asset'));
    }


    public function paymentSuccess(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if ($request->asset_id) {
            $asset = Asset::where(['asset_id' => $request->asset_id, 'user_id' => $user->id])->first();
            $asset->status = 1;
            $asset->save();

            $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
            $payment_data = $api->payment->fetch($request->razorpay_payment_id);
            try {
                $response = $api->payment->fetch($request->razorpay_payment_id)->capture(array('amount' => $payment_data['amount']));
                $payment = new Payment();
                $payment->asset_id = $request->asset_id;
                $payment->currency = $response->currency;
                $payment->status = $response->status;
                $payment->method = $response->method;
                $payment->description = $response->description;
                $payment->is_captured = $response->captured;
                $payment->amount = $response->amount;
                $payment->razor_fee = $response->fee;
                $payment->tax = $response->tax;
                $payment->email = $response->email;
                $payment->contact = $response->contact;
                $payment->paid_at = $response->created_at;
                $payment->payment_id = $response->id;
                $payment->save();
            } catch (\Exception $e) {

                return  $e->getMessage();

                $request->session()->flash('error', $e->getMessage());
                return redirect()->back();
            }
        }
        return redirect()->route('portfolio');
    }
}
