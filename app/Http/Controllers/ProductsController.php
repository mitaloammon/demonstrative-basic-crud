<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Models\Products;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $product = Products::with('intention')->get();
            return response()->json($product);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failure to retrieve product'], 500);
        }
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
    public function store(StoreProductsRequest $request)
    {
        return response(Products::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductsRequest $request, Products $products)
    {
        try {
            $products = Products::where('id', request('id'))->first();

            if ($products !== null) {
                $products->update(['title' => request('title')]);
                $products->update(['price' => request('price')]);
                $products->update(['category' => request('category')]);
                $products->update(['description' => request('description')]);
                $products->update(['image' => request('image')]);
            } else {
                $products = Products::create([
                    'title' => request('title'),
                    'price' => request('price'),
                    'category' => request('category'),
                    'description' => request('description'),
                    'image' => request('image'),
                ]);
            }
            return response()->json(['message' => 'Product updated!!!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update product!'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $id)
    {
        $products = Products::where('id', $id);

        if (!$products) {
            return response()->json(['message' => 'Product not found!!!'], 404);
        }

        $products->delete();

        return response()->json(['message' => 'Product removed!']);
    }
}
