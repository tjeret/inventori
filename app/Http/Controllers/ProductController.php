<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.production.product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'id_price' => 'required|min:1',
            'id_variant' => 'required|min:1',
            'name' => 'required',
            'label' => 'required'
        ]);

        $product = new Product();
        $product->id_price = $request->id_price;
        $product->id_variant = $request->id_variant;
        $product->name = $request->name;
        $product->label = $request->label;
        $product->save();

        return redirect()->back()->with('message', "product $request->name tela berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $this->validate($request, [
            'id_price' => 'required|min:1',
            'id_variant' => 'required|min:1',
            'name' => 'required',
            'label' => 'required'
        ]);

        $product = Product::find($id);
        $product->id_price = $request->id_price;
        $product->id_variant = $request->id_variant;
        $product->name = $request->name;
        $product->label = $request->label;
        $product->save();

        return redirect()->back()->with('message', "Product $request->name telah berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
