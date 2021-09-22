<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings\FactorSettings;
use Illuminate\Http\Request;

class FactorSettingsController extends Controller
{
    public function showSettings(FactorSettings $settings){
        return view('admin.settings', [
            'superinvest' => $settings->superinvest,
            'cbonds' => $settings->cbonds,
            'ppfs' => $settings->ppfs,
            'fds' => $settings->fds
        ]);
    }
    public function updateSettings(FactorSettings $settings, Request $request){
        foreach ($request->except('_token') as $key => $part) {
            $settings->{$key} = $request->input($key);
        }


        $settings->save();

        return response()->json(['data' => 'success']);
    }
}
