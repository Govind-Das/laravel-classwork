<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cake;

class cakeworking extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cakes = cake::all();
        return view('cakes.index', compact('cakes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cakes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
