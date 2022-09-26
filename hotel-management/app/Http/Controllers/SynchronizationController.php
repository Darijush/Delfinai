<?php

namespace App\Http\Controllers;

use App\Models\Synchronization;
use App\Http\Requests\StoreSynchronizationRequest;
use App\Http\Requests\UpdateSynchronizationRequest;

class SynchronizationController extends Controller
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
     * @param  \App\Http\Requests\StoreSynchronizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSynchronizationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Synchronization  $synchronization
     * @return \Illuminate\Http\Response
     */
    public function show(Synchronization $synchronization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Synchronization  $synchronization
     * @return \Illuminate\Http\Response
     */
    public function edit(Synchronization $synchronization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSynchronizationRequest  $request
     * @param  \App\Models\Synchronization  $synchronization
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSynchronizationRequest $request, Synchronization $synchronization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Synchronization  $synchronization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Synchronization $synchronization)
    {
        //
    }
}
