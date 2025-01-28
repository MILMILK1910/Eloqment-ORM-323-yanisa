<?php

namespace App\Http\Controllers;

use App\Models\ProductStore;
use Illuminate\Http\Request;

class ProductStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json([
            'status' => 'success',
            'productstores' => $productStores = ProductStore::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductStore $productStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductStore $productStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductStore $productStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductStore $productStore)
    {
        //
    }
}
