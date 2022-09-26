<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;
use App\Http\Requests\StoreUserAccountRequest;
use App\Http\Requests\UpdateUserAccountRequest;

class UserAccountController extends Controller
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
     * @param  \App\Http\Requests\StoreUserAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAccountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAccount  $userAccount
     * @return \Illuminate\Http\Response
     */
    public function show(UserAccount $userAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAccount  $userAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAccount $userAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAccountRequest  $request
     * @param  \App\Models\UserAccount  $userAccount
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAccountRequest $request, UserAccount $userAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAccount  $userAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAccount $userAccount)
    {
        //
    }
}
