<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('season.index', [
            'seasons' => Season::orderBy('title')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('season.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Season::create([
            'title' => $request->title,
        ]);
        return redirect()->route('s_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show(Season $season)
    {
        return view('season.show', [
            'season' => $season
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function edit(Season $season)
    {
        return view('season.edit', [
            'season' => $season
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Season $season)
    {
        $season->update(
            ['title' => $request->title],
        );
        return redirect()->route('s_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy(Season $season)
    {
        if ($season->hasCountries()->count()) {
            return 'NoNoNo';
        }
        $season->delete();
        return redirect()->route('s_index');
    }
    public function destroyAll(Season $season)
    {
        $ids = $season->hasCountries()->pluck('id')->all();
        Country::destroy($ids);
        return redirect()->route('s_index');
    }
}
