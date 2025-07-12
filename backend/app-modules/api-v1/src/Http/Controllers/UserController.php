<?php

namespace Estivenm0\ApiV1\Http\Controllers;

use Estivenm0\ApiV1\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;

class UserController 
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {}

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
    public function show(Request $request)
    {
        return $request->user();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request)
    {
        $request->user()->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
