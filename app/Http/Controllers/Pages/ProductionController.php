<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\Raw;
use App\Models\RawType;
use App\Models\Recipe;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Ingredient::with(['material', 'recipt'])->get();
        $data = [];
        //dd($data);
        return view('admin.pages.production.product')->with([
            'data' => $data
        ]);
    }

    public function bahan()
    {
        $recipe = Recipe::all();
        $bahan = Raw::all();
        $suplier = Supplier::all();
        $type = RawType::all();
        $ingr = Ingredient::all();
        // dd($ingr);
        return view('admin.pages.production.bahan')->with([
            'recipe' => $recipe,
            'supplier' => $suplier,
            'type' => $type,
            'ingr' => $ingr,
            'bahan' => $bahan
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
        //
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
