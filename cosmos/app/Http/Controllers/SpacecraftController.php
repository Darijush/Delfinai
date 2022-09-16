<?php

namespace App\Http\Controllers;

use App\Models\Spacecraft;
use App\Http\Requests\StoreSpacecraftRequest;
use App\Http\Requests\UpdateSpacecraftRequest;

class SpacecraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSpacecraftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpacecraftRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spacecraft  $spacecraft
     * @return \Illuminate\Http\Response
     */
    public function show(Spacecraft $spacecraft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spacecraft  $spacecraft
     * @return \Illuminate\Http\Response
     */
    public function edit(Spacecraft $spacecraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpacecraftRequest  $request
     * @param  \App\Models\Spacecraft  $spacecraft
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpacecraftRequest $request, Spacecraft $spacecraft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spacecraft  $spacecraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spacecraft $spacecraft)
    {
        //
    }
}
