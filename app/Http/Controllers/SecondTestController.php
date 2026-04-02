<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'This is a second test controller index method';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'This is a second test controller create method';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'This is a second test controller store method';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'This is a second test controller show method';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'This is a second test controller edit method';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'This is a second test controller update method';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'This is a second test controller destroy method';
    }
}
