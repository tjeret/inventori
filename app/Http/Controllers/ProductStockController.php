<?php

namespace App\Http\Controllers;

use App\Models\ProductStock;
use Illuminate\Http\Request;

class ProductStockController extends Controller
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
            'value' => 'required|min:1',
            'product_date' => 'required',
        ]);

        $stock = new ProductStock();
        $stock->id_product = $request->id_product;
        $stock->value = $request->value;
        $stock->product_date = $request->product_date;
        $stock->save();

        return redirect()->back()->with('message', "Data telah berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function show(ProductStock $productStock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductStock $productStock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductStock $productStock, $id)
    {
        $this->validate($request, [
            'id_product' => 'required|min:1',
            'value' => 'required|min:1',
            'product_date' => 'required',
        ]);

        $stock = ProductStock::find($id);
        $stock->id_product = $request->id_product;
        $stock->value = $request->value;
        $stock->product_date = $request->product_date;
        $stock->save();

        return redirect()->back()->with('message', "Data telah berhasil ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductStock  $productStock
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductStock $productStock)
    {
        //
    }
}
