<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreAddressRequest $request)
    {
        try {
            $address = Address::create($request->all());
            return response()->json($address, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failure to create address'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAddressRequest $request, Address $id)
    {
        try {
            $address = Address::where('id', request('id'))->first();

            if ($address !== null) {
                $address->update(['adderss' => request('adderss')]);
                $address->update(['city' => request('city')]);
                $address->update(['uf' => request('uf')]);
                $address->update(['country' => request('country')]);
            } else {
                $address = Address::create([
                    'address' => request('address'),
                    'city' => request('city'),
                    'uf' => request('uf'),
                    'country' => request('country'),
                ]);
            }
            return response()->json(['message' => 'Address updated!!!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to updated address!'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
