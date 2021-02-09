<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->contact = $request->contact;
        $supplier->save();

        return redirect()->back()->with('message', "Supplier $request->name telah berhasil di simpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string|unique:contact',
        ]);

        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->contact = $request->contact;
        $supplier->save();

        return redirect()->back()->with('message', "Supplier $request->name telah berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier, $id)
    {
        $supplier = Supplier::find($id);
        Supplier::destroy($id);

        return redirect()->back()->with('message', "Supplier $supplier->name telah berhasil di hapus");
    }
}
