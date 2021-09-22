<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComparePostRequest;
use App\Models\Compare;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $result = Compare::latest()->paginate();
        return view('admin.compare.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $this->edit(new Compare());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ComparePostRequest $request
     * @return Response
     */
    public function store(ComparePostRequest $request)
    {
        return $this->update($request, new Compare());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compare  $compare
     * @return Response
     */
    public function show(Compare $compare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compare  $compare
     * @return Response
     */
    public function edit(Compare $compare)
    {
        return view('admin.compare.edit',compact('compare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compare  $compare
     * @return Response
     */
    public function update(ComparePostRequest $request, Compare $compare)
    {
        $request->persist($compare);

        return redirect()->route('admin.compares.edit',$compare)->with('status','Compare Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compare  $compare
     * @return Response
     */
    public function destroy(Compare $compare)
    {
        //
    }

    public function updateLogo(Request $request)
    {

        if ($request->has('compare_id') && $request->has('type')  && $request->hasFile('file') && ($compare = Compare::findOrFail($request->get('compare_id')))) {

            $path = $request->file('file')->store('/compares/' . $compare->id .'/'. $request->get('type'), 'public');
            return response()->json(['data' => 'success', 'path' => $path ,'type'=> $request->get('type')]);
        }
        return response()->json(['error' => 'failed'  ]);

    }


}
