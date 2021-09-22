<?php

namespace App\Http\Controllers\Deals;

use App\Http\Controllers\Controller;
use App\Models\Deal;

class DealController extends Controller
{
    public function showActiveDeals()
    {
        $deals = Deal::active()->get();
        return view('deals.deals', ['deals' => $deals]);
    }

    public function showCompletedDeals()
    {
        $deals = Deal::completed()->get();
        return view('deals.deal_completed', ['deals' => $deals]);
    }

    public function showDeal($slug)
    {
        $deal = Deal::where('slug', $slug)->first();

        return view('deals.dealdetail', ['deal' =>$deal]);
    }
}
