<?php

namespace App\Http\Controllers;

use App\Models\Recipt;
use Illuminate\Http\Request;

class ReciptController extends Controller
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
            'id_product' => 'required|min:1',
            'name' => 'required|min:1',
        ]);

        $stock = new Recipt();
        $stock->id_product = $request->id_product;
        $stock->name = $request->name;
        $stock->save();

        return redirect()->back()->with('message', "Resep $request->name tela berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipt  $recipt
     * @return \Illuminate\Http\Response
     */
    public function show(Recipt $recipt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipt  $recipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipt $recipt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipt  $recipt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_product' => 'required|min:1',
            'name' => 'required|min:1',
        ]);

        $recipt = Recipt::find($id);
        $recipt->id_product = $request->id_product;
        $recipt->name = $request->name;
        $recipt->save();

        return redirect()->back()->with('message', "Resep $request->name tela berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipt  $recipt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipt $recipt)
    {
        //
    }
}
