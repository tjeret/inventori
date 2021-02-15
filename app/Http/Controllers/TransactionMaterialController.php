<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Raw;
use App\Models\RawStock;
use App\Models\Recipe;
use App\Models\TransactionMaterial;
use Illuminate\Http\Request;

class TransactionMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request, [
            'recipe_id ' => "required|string|exists:recipes",
            'value' => "required|numeric|min:1",
        ]);

        $recipe = Recipe::find($request->input('recipe'));
        $ingredient = Ingredient::where('recipe_id', $recipe->id)->get();

        foreach ($ingredient as $index => $item) {
            $raw = Raw::find($item->raw_id);
            $rawStock = RawStock::where('raw_id', $raw->id)->sum('debit') - RawStock::where('raw_id', $raw->id)->sum('credit');
            if ($rawStock < $item->value) {
                return redirect()->back()->with(['message' => "$raw->name lack of stock"]);
            }
        }
        for ($i = 0; $i < $request->input('value'); $i++) {
            foreach ($ingredient as $index => $item) {
                $rawStock = new RawStock();
                $rawStock->raw_id = $item->raw_id;
                $rawStock->credit = $item->value;
                $rawStock->save();
            }
        }
        return redirect()->back();
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
    public function stores(Request $request)
    {
        $this->validate($request, [
            'name' => "required|string|min:10",
            'ingredient.*.raw' => 'required|numeric|exists:raws',
            'ingredient.*.value' => 'required|numeric',
        ]);

        if (Recipe::where('name', $request->input("name"))->count()) {
            $recipe = Recipe::where('name', $request->input("name"))->first();
        } else {
            $recipe = new Recipe();
        }
        $recipe->name = $request->input("name");
        $recipe->save();

        foreach ($request->input("ingredient") as $index => $item) {
            if (Ingredient::where('raw_id', $item[$index]["raw"])->where('recipe_id', $recipe->id)->count()) {
                $ingredient = Ingredient::where('raw_id', $item[$index]["raw"])->where('recipe_id', $recipe->id)->first();
            } else {
                $ingredient = new Ingredient();
            }
            $ingredient->value = $item[$index]["value"];
            $ingredient->save();
        }

        return redirect()->back()->with('message', "Data telah berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransactionMaterial  $transactionMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionMaterial $transactionMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionMaterial  $transactionMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionMaterial $transactionMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransactionMaterial  $transactionMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionMaterial $transactionMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionMaterial  $transactionMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransactionMaterial $transactionMaterial)
    {
        //
    }
}
