<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $assets = Asset::latest()->paginate(10);
        return view('admin.asset.index', compact('assets'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Response
     */
    public function show($id)
    {
        $asset = Asset::findOrFail($id);
        return view('admin.asset.view',compact('asset'));
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
