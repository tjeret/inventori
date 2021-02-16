<?php

namespace App\Http\Controllers;

use App\Models\ProductTrx;
use Illuminate\Http\Request;

class ProductTrxController extends Controller
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
            'credit' => 'required|min:1',
            'debit' => 'required',
        ]);

        $productTrx = new ProductTrx();
        $productTrx->id_product = $request->id_product;
        $productTrx->credit = $request->credit;
        $productTrx->debit = $request->debit;
        $productTrx->save();

        return redirect()->back()->with('message', "Data telah berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductTrx  $productTrx
     * @return \Illuminate\Http\Response
     */
    public function show(ProductTrx $productTrx)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductTrx  $productTrx
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductTrx $productTrx)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductTrx  $productTrx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductTrx $productTrx, $id)
    {
        $this->validate($request, [
            'id_product' => 'required|min:1',
            'credit' => 'required|min:1',
            'debit' => 'required',
        ]);

        $productTrx = ProductTrx::find($id);
        $productTrx->id_product = $request->id_product;
        $productTrx->credit = $request->credit;
        $productTrx->debit = $request->debit;
        $productTrx->save();

        return redirect()->back()->with('message', "Data telah berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductTrx  $productTrx
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductTrx $productTrx)
    {
        //
    }
}
