<?php


namespace App\Http\Controllers\Admin;




use App\Models\Deal;
use App\Models\Deal_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DealDetailsController
{

    public function updateDeals(Request $request)
    {
        if ($request->get('deal_id')) {
            $deal = Deal::find($request->get('deal_id'));

            $deal->dealDetail()->updateOrCreate(
                ['deal_id' => $deal->id],
                $request->only('profile', 'about', 'financial','faq', 'documents')
            );

            return response()->json(['data' => 'success']);
        }
        return;
    }

    public function uploadFile(Request $request)
    {
        if ($request->has('deal_id') && $request->has('index') && $request->hasFile('file') && ($deal = Deal::findOrFail($request->get('deal_id')))) {
            $path = $request->file('file')->store('/deals/' . $deal->id . '/documents', 'public');

            return response()->json(['data' => 'success', 'path' => $path, 'index' => $request->get('index')]);
        }
        if ($request->has('deal_id') && $request->has('type') && $request->hasFile('file') && ($deal = Deal::findOrFail($request->get('deal_id')))) {

            $path = $request->file('file')->store('/deals/' . $deal->id .'/'. $request->get('type'), 'public');
            return response()->json(['data' => 'success', 'path' => $path ,'type'=> $request->get('type')]);
        }
        return response()->json(['error' => 'failed'  ]);

    }
}
