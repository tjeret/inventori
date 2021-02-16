<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
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
            'id_purcasing' => 'required|min:1',
            'id_material' => 'required|min:1',
            'expired_date' => 'required'
        ]);

        $stock = new Stock();
        $stock->id_purcasing = $request->id_purcasing;
        $stock->id_material = $request->id_material;
        $stock->expired_date = $request->expired_date;
        $stock->save();

        return redirect()->back()->with('message', "Stock $request->name tela berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_purcasing' => 'required|min:1',
            'id_material' => 'required|min:1',
            'expired_date' => 'required'
        ]);

        $stock = Stock::find($id);
        $stock->id_purcasing = $request->id_purcasing;
        $stock->id_material = $request->id_material;
        $stock->expired_date = $request->expired_date;
        $stock->save();

        return redirect()->back()->with('message', "Stock $request->name telah berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        Stock::destroy($id);

        return redirect()->back()->with('message', "Stock $stock->name telah berhasil di hapus");
    }
}
