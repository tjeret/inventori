<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
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
        ]);

        $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->save();

        return redirect()->back()->with('message', "Resep telah berhasil disimpan");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $Recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $Recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $Recipe = Recipe::find($id);
        $Recipe->name = $request->name;
        $Recipe->save();

        return redirect()->back()->with('message', "Resep $request->name tela berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $Recipe)
    {
        //
    }
}
