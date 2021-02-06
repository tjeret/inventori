<?php

namespace App\Http\Controllers;

use App\Models\PriceList;
use App\Models\Product;
use App\Models\ProductStock;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::where('id', 2)->get();
        $type = ProductType::all();

        // dd($data);
        return view('admin.pages.production.index')->with([
            'product' => $data,
            'type' => $type
        ]);
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

        $product = new Product();
        $product->id_user = Auth::user()->id;
        $product->id_type = $request->id_type;
        $product->name = $request->name;
        $product->save();
        // dd($data);

        $pricelist = new PriceList();
        $pricelist->id_product = $product->id;
        $pricelist->price_buy = $request->price_buy;
        $pricelist->price_sell = $request->price_sell;
        $pricelist->save();

        $productstock = new ProductStock();
        $productstock->id_product = $product->id;
        $productstock->id_price_list = $pricelist->id;
        $productstock->debit = $request->debit;
        $productstock->credit = $request->credit;
        $productstock->save();

        return redirect()->back()->with('message', "$request->name Berhasil di tambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product = Product::where('id', $id)->first();
        $product->name = $request->input('name');
        $product->unit = $request->input('unit');
        if ($product->save()) {
            $pricelist = PriceList::find($id);
            $pricelist = PriceList::where('id', $id)->first();
            $pricelist->id_product = $product->id;
            $pricelist->price_buy = $request->input('price_buy');
            $pricelist->price_sell = $request->input('price_sell');
        }
        if ($pricelist->save()) {
            $productstock = ProductStock::find($id);
            $productstock = ProductStock::where('id', $id)->first();
            $productstock->id_product = $product->id;
            $productstock->id_price_list = $pricelist->id;
            $productstock->debit = $request->input('debit');
            $productstock->credit = $request->input('credit');
        }
        $productstock->save();
        return redirect()->route('production.index')->with('success', 'data telah berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Product::destroy($id);

        return redirect()->back()->with('message', "$product->name data berhasil dihapus");
    }

    public function addproducttype(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:users',
        ]);

        $type = new ProductType();
        $type->name = $request->name;
        $type->save();

        return redirect()->back()->with('message', "$type->name berhasil ditambahkan");
    }
}
