<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Material;
use App\Models\Recipt;
use App\Models\Stock;
use App\Models\TransactionMaterial;
use Illuminate\Http\Request;

class IngredientController extends Controller
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
            'id_recipt' => 'required|min:1',
            'id_material' => 'required|min:1',
            'value' => 'required|min:1',
        ]);

        //tambah bahan
        $ingredient = new ingredient();
        $ingredient->id_recipt = $request->id_recipt;
        $ingredient->id_material = $request->id_material;
        $ingredient->value = $request->value;
        $ingredient->save();

        //mengambil stok

        $transaction = new TransactionMaterial();
        $transaction->id_recipt = $request->id_recipt;
        $transaction->id_material = $request->id_material;
        $transaction->value = $request->value;
        $transaction->save();


        //mengurangi stock

        return redirect()->back()->with('message', "Data telah berhasil di tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_recipt' => 'required|min:1',
            'id_material' => 'required|min:1',
            'value' => 'required|min:1',
        ]);

        $ingredient = Ingredient::find($id);
        $ingredient->id_recipt = $request->id_recipt;
        $ingredient->id_material = $request->id_material;
        $ingredient->value = $request->value;
        $ingredient->save();

        return redirect()->back()->with('message', "Data telah berhasil di tambah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient, $id)
    {
        $ingredient = Ingredient::find($id);
        Ingredient::destroy($id);

        return redirect()->back()->with('message', "data berhasil di hapus");
    }
}
