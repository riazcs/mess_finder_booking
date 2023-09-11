<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Meal;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class MealController extends Controller
{

    public function index()
    {
        $meals = Meal::where('user_id', \auth()->user()->id)->get();
        return view('meal', \compact('meals'));
    }


    public function create()
    {
        return view('meal');
    }


    public function store(Request $request)
    {
        $bookingMess = Booking::where('user_id',  \auth()->user()->id)->first();
        $meal = new Meal();
        $meal->morning = $request->morning;
        $meal->noon = $request->noon;
        $meal->night = $request->night;
        $meal->meal_date = $request->meal_date;
        $meal->user_id = \auth()->user()->id;
        $meal->mess_id = empty($request->mess_id) ? $bookingMess->mess_id : $request->mess_id;
        $meal->save();
        return \back()->with('success', 'Add success');
    }



    public function show(Meal $meal)
    {
    }


    public function edit(Meal $meal)
    {
    }


    public function update(Request $request, Meal $meal)
    {
        $bookingMess = Booking::where('user_id',  \auth()->user()->id)->first();
        if ($meal) {
            $meal->morning = $request->morning;
            $meal->noon = $request->noon;
            $meal->night = $request->night;
            $meal->meal_date = $request->start;
            $meal->user_id = \auth()->user()->id;
            $meal->mess_id = empty($request->mess_id) ? $bookingMess->mess_id : $request->mess_id;
            $meal->save();
            return response()->json($meal);
        }
    }


    public function destroy(Meal $meal)
    {
        if ($meal) {
            $meal->delete();
            return response()->json(['message' => 'Meal deleted successfully']);
        }
    }
}
