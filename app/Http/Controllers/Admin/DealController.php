<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DealPostRequest;
use App\Models\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $result = Deal::latest()->paginate();
        return view('admin.deal.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $this->edit(new Deal());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DealPostRequest $request
     * @return Response
     */
    public function store(DealPostRequest $request)
    {
        return $this->update($request, new Deal());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return Response
     */
    public function show(Deal $deal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return Response
     */
    public function edit(Deal $deal)
    {
        return view('admin.deal.edit')->withDeal($deal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deal  $deal
     * @return Response
     */
    public function update(DealPostRequest $request, Deal $deal)
    {
        $request->persist($deal);

        return redirect(route('admin.deals.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal  $deal
     * @return Response
     */
    public function destroy(Deal $deal)
    {
        //
    }

    public function updateStatus(Request $request)
    {
        if(($deal = Deal::findOrFail($request->get('deal_id'))) && ($request->get('action') == 'completed'))
        {
            $deal->completed_at = now();
            $deal->save();
            $request->session()->flash('status','Marked as Completed');
        }
        return ;
    }
}
