<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use App\Models\Deal;
use App\Models\Faq;
use App\Settings\FactorSettings;

class WelcomeController extends Controller
{
    public function home(FactorSettings $settings)
    {
        $deals = Deal::completed()->get();
        $compares = Compare::all();

        return view('welcome', [
            'deals' => $deals,
            'compares' => $compares
        ]);
    }

    public function faqPage()
    {
        $faqs = Faq::orderBy('sort')->get(['title','faqs']);
        return view('Faq',compact('faqs'));
    }

}
