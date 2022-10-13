<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotel.index', [
            'hotels' => Hotel::orderBy('updated_at', 'desc')->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create', [
            'countries' => Country::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:100',
            'price' => 'required|numeric|min:1',
            'term' => 'required|numeric|min:1|max:360',
            'photo.*' => 'sometimes|required|mimes:jpg,png|max:2000'
        ]);
        Hotel::create([
            'title' => $request->title,
            'price' => $request->price,
            'term' => $request->term,
            'country_id' => $request->country_id,
        ])->addImages($request->file('photo'));

        return redirect()->route('h_index')->with('ok', 'All good!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotel.show', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('hotel.edit', [
            'hotel' => $hotel,
            'countries' => Country::orderBy('updated_at', 'asc')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'title' => 'required|min:3|max:100',
            'price' => 'required|numeric|min:1',
            'term' => 'required|numeric|min:1|max:360',
            'photo.*' => 'sometimes|required|mimes:jpg,png|max:2000'
        ]);
        $hotel->update(
            [
                'title' => $request->title,
                'price' => $request->price,
                'term' => $request->term,
                'country_id' => $request->country_id
            ]
        );
        $hotel
            ->removeImages($request->delete_photo)
            ->addImages($request->file('photo'));

        return redirect()->route('h_index')->with('ok', 'All good!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        if ($hotel->getPhotos()->count()) {
            $delIds = $hotel->getPhotos()->pluck('id')->all();
            $hotel->removeImages($delIds);
        }
        $hotel->delete();
        return redirect()->route('h_index')->with('ok', 'All good!');
    }
}
