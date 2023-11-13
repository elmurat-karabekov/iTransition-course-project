<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomAttributeRequest;
use App\Http\Requests\UpdateCustomAttributeRequest;
use App\Models\CustomAttribute;

class CustomAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomAttributeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomAttribute $customAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomAttributeRequest $request, CustomAttribute $customAttribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomAttribute $customAttribute)
    {
        //
    }
}
