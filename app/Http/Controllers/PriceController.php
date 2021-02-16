<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
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
            'id_role' => 'required|min:1',
            'price' => 'required|min:1',
            'dicsount' => 'required|min:1',
            'tax' => 'required|min:1',
        ]);

        $price = new Price();
        $price->id_role = $request->id_role;
        $price->price = $request->price;
        $price->dicsount = $request->dicsount;
        $price->tax = $request->tax;
        $price->save();

        return redirect()->back()->with('message', "Data telah berhasil di tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price, $id)
    {
        $this->validate($request, [
            'id_role' => 'required|min:1',
            'price' => 'required|min:1',
            'dicsount' => 'required|min:1',
            'tax' => 'required|min:1',
        ]);

        $price = Price::find($id);
        $price->id_role = $request->id_role;
        $price->price = $request->price;
        $price->dicsount = $request->dicsount;
        $price->tax = $request->tax;
        $price->save();

        return redirect()->back()->with('message', "Data telah berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price, $id)
    {
        $price = Price::find($id);
        Price::destroy($id);

        return redirect()->back()->with('message', "data berhasil di hapus");
    }
}
