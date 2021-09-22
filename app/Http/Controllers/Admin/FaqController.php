<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $result = Faq::latest()->paginate();
        return view('admin.faq.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $this->edit(new faq());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->faq_id == 0)
            return $this->update($request, new Faq());
        else
            return $this->update($request, Faq::findOrFail($request->faq_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faq
     * @return Response
     */
    public function update(Request $request, Faq $faq)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200'
        ]);

        if ($validator->fails())
            return response()->json(['data' => 'error', 'message' => 'title is required']);


        $faq->title        = $request->title;
        $faq->faqs        = $request->faqs;
        $faq->sort        = $request->sort ?? 0;
        $faq->save();

        return response()->json(['data' => 'success', 'message' => 'successfully saved']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faqs.index');
    }
}
