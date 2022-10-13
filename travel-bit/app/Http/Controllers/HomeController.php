<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeList(Request $request)
    {
        //filter
        if ($request->cat) {
            $hotels = Hotel::where('country_id', $request->cat);
        } else if ($request->s) {
            $search = explode(' ', $request->s);
            if (count($search) == 1) {
                $hotels = Hotel::where('title', 'like', '%' . $request->s . '%');
            } else {
                $hotels = Hotel::where('title', 'like', '%' . $search[0] . '%' . $search[1] . '%')
                    ->orWhere('title', 'like', '%' . $search[1] . '%' . $search[0] . '%')
                    ->orWhere('title', 'like', '%' . $search[0] . '%')
                    ->orWhere('title', 'like', '%' . $search[1] . '%');
            }
        } else {
            $hotels = Hotel::where('id', '>', 0);
        }
        //sort
        if  ($request->sort == 'title_asc') {
            $hotels = $hotels->orderBy('title');
        } elseif ($request->sort == 'title_desc') {
            $hotels = $hotels->orderBy('rating', 'desc');
        } elseif ($request->sort == 'price_asc') {
            $hotels = $hotels->orderBy('price');
        } elseif ($request->sort == 'price_desc') {
            $hotels = $hotels->orderBy('price', 'desc');
        }
        return view('home.index', [
            'hotels' => $hotels->get(),
            'countries' => Country::orderBy('title', 'asc')->get(),
            'cat' => $request->cat ?? 0,
            'sort' => $request->sort ?? 0,
            'sortSelect' => Hotel::SORT_SELECT,
            's' => $request->s ?? ''
        ]);
    }

}
