<?php

namespace App\Http\Controllers;

use App\Models\Purcasing;
use Illuminate\Http\Request;

class PurcasingController extends Controller
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
            'id_supplier' => 'required|min:1',
            'price' => 'required|min:1',
            'purcase_invoice' => 'required|min:1',
            'purcase_date' => 'required|min:1',
        ]);

        $purcasing = new Purcasing();
        $purcasing->id_supplier = $request->id_supplier;
        $purcasing->price = $request->price;
        $purcasing->purcase_invoice = $request->purcase_invoice;
        $purcasing->purcase_date = $request->purcase_date;
        $purcasing->save();

        return redirect()->back()->with('message', "Data telah berhasil di ubah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purcasing  $purcasing
     * @return \Illuminate\Http\Response
     */
    public function show(Purcasing $purcasing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purcasing  $purcasing
     * @return \Illuminate\Http\Response
     */
    public function edit(Purcasing $purcasing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purcasing  $purcasing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purcasing $purcasing, $id)
    {
        $this->validate($request, [
            'id_supplier' => 'required|min:1',
            'price' => 'required|min:1',
            'purcase_invoice' => 'required|min:1',
            'purcase_date' => 'required|min:1',
        ]);

        $purcasing = Purcasing::find($id);
        $purcasing->id_supplier = $request->id_supplier;
        $purcasing->price = $request->price;
        $purcasing->purcase_invoice = $request->purcase_invoice;
        $purcasing->purcase_date = $request->purcase_date;
        $purcasing->save();

        return redirect()->back()->with('message', "Data telah berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purcasing  $purcasing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purcasing $purcasing)
    {
        //
    }
}
