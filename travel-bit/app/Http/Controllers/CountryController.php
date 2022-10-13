<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use App\Models\Season;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('country.index', [
            'countries' => Country::orderBy('title')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.create', [
            'seasons' => Season::orderBy('title')->get(),
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
        Country::create([
            'title' => $request->title,
            'season_id' => $request->season_id
        ]);
        return redirect()->route('s_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('country.show', [
            'country' => $country
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('country.edit', [
            'country' => $country,
            'seasons' => Season::orderBy('title')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $country->update(
            [
                'title' => $request->title,
                'season_id' => $request->season_id
            ],
        );
        return redirect()->route('s_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if ($country->hasHotels()->count()) {
            return 'NoNoNo';
        }
        $country->delete();
        return redirect()->route('s_index');
    }
    public function destroyAll(Country $country)
    {
        $ids = $country->hasHotels()->pluck('id')->all();
        Hotel::destroy($ids);
        return redirect()->route('s_index');
    }
}
