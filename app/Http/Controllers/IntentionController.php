<?php

namespace App\Http\Controllers;

use App\Models\Intention;
use Illuminate\Http\Request;

class IntentionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $intentions = Intention::with('product', 'address')->get();
            return response()->json($intentions);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failure to retrieve intentions'], 500);
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
    public function store(Request $request)
    {
        try {
            $intentions = Intention::create($request->all());
            return response()->json($intentions, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failure to create intention'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Intention $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intention $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intention $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $intentions = Intention::where('id', $id);

        if (!$intentions) {
            return response()->json(['message' => 'Intention not found!'], 404);
        }

        $intentions->delete();

        return response()->json(['message' => 'Intention removed!!!']);
    }
}
