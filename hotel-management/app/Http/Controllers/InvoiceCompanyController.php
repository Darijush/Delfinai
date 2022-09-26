<?php

namespace App\Http\Controllers;

use App\Models\InvoiceCompany;
use App\Http\Requests\StoreInvoiceCompanyRequest;
use App\Http\Requests\UpdateInvoiceCompanyRequest;

class InvoiceCompanyController extends Controller
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
     * @param  \App\Http\Requests\StoreInvoiceCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceCompany  $invoiceCompany
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceCompany $invoiceCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceCompany  $invoiceCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceCompany $invoiceCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceCompanyRequest  $request
     * @param  \App\Models\InvoiceCompany  $invoiceCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceCompanyRequest $request, InvoiceCompany $invoiceCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceCompany  $invoiceCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceCompany $invoiceCompany)
    {
        //
    }
}
