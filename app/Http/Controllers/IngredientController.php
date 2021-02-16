<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Raw;
use App\Models\RawStock;
use App\Models\Recipe;
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
    public function cook(Request $request)
    {
        $this->validate($request, [
            'recipe ' => "required|string|exists:recipes",
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
            'name' => "required|min:5",
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
