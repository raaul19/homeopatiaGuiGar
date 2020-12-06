<?php

namespace App\Http\Controllers;

use App\Models\ProductTypes;
use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_types = ProductTypes::all();

        return view('product-types.indexProductTypes', compact('product_types'));
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
     * @param  \App\Models\ProductTypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function show(ProductTypes $productTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductTypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductTypes $productTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductTypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductTypes $productTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductTypes  $productTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductTypes $productTypes)
    {
        //
    }
}
