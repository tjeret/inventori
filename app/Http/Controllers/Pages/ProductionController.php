<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Ingredient;
use App\Models\Material;
use App\Models\Recipt;
=======
>>>>>>> Backend
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
<<<<<<< HEAD
        $data = Ingredient::with(['material', 'recipt'])->get();

        // dd($data);
        return view('admin.pages.production.index')->with([
            'data' => $data
        ]);
    }

    public function bahan()
    {
        $data = Recipt::all();
        $bahan = Material::all();
        // dd($data);
        return view('admin.pages.production.bahan')->with([
            'data' => $data,
            'bahan' => $bahan
        ]);
=======
        //
>>>>>>> Backend
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
