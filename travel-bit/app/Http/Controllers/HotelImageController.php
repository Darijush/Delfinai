<?php

namespace App\Http\Controllers;

use App\Models\HotelImage;
use App\Http\Requests\StoreHotelImageRequest;
use App\Http\Requests\UpdateHotelImageRequest;

class HotelImageController extends Controller
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
     * @param  \App\Http\Requests\StoreHotelImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function show(HotelImage $hotelImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelImage $hotelImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelImageRequest  $request
     * @param  \App\Models\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelImageRequest $request, HotelImage $hotelImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelImage  $hotelImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelImage $hotelImage)
    {
        //
    }
}
