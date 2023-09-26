<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $properties = Property::get();
        return view('home', compact(['properties']));
    }

    public function messSearch(Request $request)
    {
        $messes = Property::all();
        if ($request->keyword != '') {
            $messes = Property::where('location', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        // return response()->json([
        //     'messes' => $messes
        // ]);

        return view('location.search', compact(['messes']));
    }


    public function messDetails($id)
    {
        $mess = Property::findOrFail($id);
        $booking = null;
        if (\auth()->user()) {
            $booking = Booking::where('mess_id', $mess->id)->where('user_id', \auth()->user()->id)->first();
        }
        return view('mess.mess_details', compact(['mess', 'booking']));
    }

    public function bookingMess(Request $request, $id)
    {
        $newBooking = new Booking();
        $newBooking->mess_id = $id;
        $newBooking->user_id = auth()->user() ? auth()->user()->id : '';
        $newBooking->transaction_id = $request->transaction;
        $newBooking->save();
        return redirect('/');
    }

    public function profile()
    {
        return view('profile.profile');
    }

    public function profileUpdate(Request $request)
    {
        $nidFront = null;
        $nidBack = null;
        if ($request->file('nidFront') && $request->file('nidBack')) {
            $fileFront = $request->file('nidFront');
            $nidFront = date('YmdHi') . $fileFront->getClientOriginalName();
            $fileFront->move(public_path('storage'), $nidFront);
            $fileBack = $request->file('nidBack');
            $nidBack = date('YmdHi') . $fileBack->getClientOriginalName();
            $fileBack->move(public_path('storage'), $nidBack);
        }
        $user = User::findOrFail($request->userid);
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->nid_front = $nidFront;
        $user->nid_back = $nidBack;
        $user->save();
        return  redirect('/');
    }

    public function profileDetails($id){
        $profile = User::findOrFail($id);
        return view('profile.profile_details', \compact('profile'));
    }
}
