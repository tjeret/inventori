<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string|unique:contact',
        ]);

        $variant = new Variant();
        $variant->type = $request->type;
        $variant->name = $request->name;
        $variant->description = $request->description;
        $variant->save();

        return redirect()->back()->with('message', "variant $request->name telah berhasil di ubah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function show(Variant $variant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function edit(Variant $variant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variant $variant, $id)
    {
        $this->validate($request, [
            'type' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string|unique:contact',
        ]);

        $variant = Variant::find($id);
        $variant->type = $request->type;
        $variant->name = $request->name;
        $variant->description = $request->description;
        $variant->save();

        return redirect()->back()->with('message', "Variant $request->name telah berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variant $variant)
    {
        //
    }
}
