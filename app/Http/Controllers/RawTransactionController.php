<?php

namespace App\Http\Controllers;

use App\Models\Raw;
use App\Models\RawStock;
use App\Models\RawTransaction;
use App\Models\RawType;
use Illuminate\Http\Request;

class RawTransactionController extends Controller
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
            'supplier_id' => 'required',
            'price' => 'required',
            'invoice' => 'required',
        ]);
        $transaction = new RawTransaction();
        $transaction->supplier_id = $request->supplier_id;
        $transaction->price = $request->price;
        $transaction->invoice = $request->invoice;
        $transaction->save();

        $this->validate($request, [
            'raw_type_id' => 'required',
            'name' => 'required',
        ]);
        $raw = new Raw();
        $raw->raw_type_id = $request->raw_type_id;
        $raw->name = $request->name;
        $raw->save();

        $this->validate($request, [
            'debit' => 'required',
            'expired_at' => 'required',
        ]);

        $rawstock = new RawStock();
        $rawstock->raw_id = $raw->id;
        $rawstock->raw_transaction_id = $transaction->id;
        $rawstock->debit = $request->debit;
        $rawstock->expired_at = $request->expired_at;
        $rawstock->save();

        return redirect()->back()->with('message', "data telah berhasil di simpan");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
