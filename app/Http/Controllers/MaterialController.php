<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Stock;
use App\Models\TransactionMaterial;
use Illuminate\Http\Request;

class MaterialController extends Controller
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
            'name' => 'required|min:1',
            'unit' => 'required|min:1',
        ]);

        $material = new Material();
        $material->name = $request->name;
        $material->unit = $request->unit;
        $material->save();

        $this->validate($request, [
            'id_purcasing' => 'required|min:1',
            'id_material' => 'required|min:1',
            'expired_date' => 'required',
        ]);

        $stock = new Stock();
        $stock->id_purcasing = $request->id_purcasing;
        $stock->id_material = $request->id_material;
        $stock->expired_date = $request->expired_date;
        $stock->save();

        $this->validate($request, [
            'itemin' => 'required',
        ]);

        $item = new TransactionMaterial();
        $item->id_stock = $stock->id;
        $item->itemin = $request->itemin;
        $item->save();

        return redirect()->back()->with('message', "Data telah berhasil di tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:1',
            'unit' => 'required|min:1',
        ]);

        $material = Material::find($id);
        $material->name = $request->name;
        $material->unit = $request->unit;
        $material->save();

        return redirect()->back()->with('message', "Data telah berhasil ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material, $id)
    {
        $material = Material::find($id);
        Material::destroy($id);

        return redirect()->back()->with('message', "$material->name has been delete");
    }
}
