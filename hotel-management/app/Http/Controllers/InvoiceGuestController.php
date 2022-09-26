<?php

namespace App\Http\Controllers;

use App\Models\InvoiceGuest;
use App\Http\Requests\StoreInvoiceGuestRequest;
use App\Http\Requests\UpdateInvoiceGuestRequest;

class InvoiceGuestController extends Controller
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
     * @param  \App\Http\Requests\StoreInvoiceGuestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceGuestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceGuest  $invoiceGuest
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceGuest $invoiceGuest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceGuest  $invoiceGuest
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceGuest $invoiceGuest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceGuestRequest  $request
     * @param  \App\Models\InvoiceGuest  $invoiceGuest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceGuestRequest $request, InvoiceGuest $invoiceGuest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceGuest  $invoiceGuest
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceGuest $invoiceGuest)
    {
        //
    }
}
