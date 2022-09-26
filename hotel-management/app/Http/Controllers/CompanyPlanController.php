<?php

namespace App\Http\Controllers;

use App\Models\CompanyPlan;
use App\Http\Requests\StoreCompanyPlanRequest;
use App\Http\Requests\UpdateCompanyPlanRequest;

class CompanyPlanController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanyPlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyPlanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyPlan  $companyPlan
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyPlan $companyPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyPlan  $companyPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyPlan $companyPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyPlanRequest  $request
     * @param  \App\Models\CompanyPlan  $companyPlan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyPlanRequest $request, CompanyPlan $companyPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyPlan  $companyPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyPlan $companyPlan)
    {
        //
    }
}
