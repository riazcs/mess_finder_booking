<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::get();
        return view('booking.bookings', compact('bookings'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function bookingMess(Request $request, $id)
    {
        if (auth()->user()) {
            $newBooking = new Booking();
            $newBooking->mess_id = $id;
            $newBooking->mess_name = Property::findOrFail($id) ? Property::findOrFail($id)->title : '';
            $newBooking->user_id = auth()->user() ? auth()->user()->id : '';
            $newBooking->user_name = auth()->user() ? auth()->user()->name : '';
            $newBooking->transaction_id = $request->transaction;
            $newBooking->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

<<<<<<< HEAD
=======
    public function confirmBooking($id){
        $booking = Booking::findOrFail($id);
        if(!empty($booking)){
            $booking->update(['is_booking = 1']);
        }
    }
>>>>>>> c47edd2 (Update)

    public function confirmAndCancelMess($messId)
    {
        $mess = Booking::findOrFail($messId);
        if ($mess->is_confirm) {
            $mess->is_confirm = 0;
            $mess->update();
        } else {
            $mess->is_confirm = 1;
            $mess->update();
        }
        return \back();
    }
}
