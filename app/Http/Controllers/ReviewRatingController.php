<?php

namespace App\Http\Controllers;

use App\Models\ReviewRating;
use Illuminate\Http\Request;

class ReviewRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = ReviewRating::get();
        return view('review.reviews', compact('reviews'));
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
        if (auth()->user()) {
            $review = new ReviewRating();
            $review->mess_id = $request->mess_id;
            $review->comments = $request->comment;
            $review->star_rating = $request->rating;
            $review->user_id = auth()->user()->id;
            $review->service_id = $request->mess_id;
            $review->save();
            return redirect()->back()->with('flash_msg_success', 'Your review has been submitted Successfully,');
        } else {
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReviewRating  $reviewRating
     * @return \Illuminate\Http\Response
     */
    public function show(ReviewRating $reviewRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReviewRating  $reviewRating
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewRating $reviewRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReviewRating  $reviewRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewRating $reviewRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReviewRating  $reviewRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReviewRating $reviewRating)
    {
        //
    }
}
