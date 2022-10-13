<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role < 10) {
            return view('booking.index', [
                'bookings' => Booking::where('user_id', '=', Auth::user()->id)->get(),
            ]);
        } else {
            return view('booking.index', [
                'bookings' => Booking::all(),
            ]);
        };
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update(
            [

                'confirmation' => $request->confirmation,
            ]
        );
        return redirect()->back()->with('ok', 'All good!');
    }
}
