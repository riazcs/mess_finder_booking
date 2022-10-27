<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use App\Models\Property;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function feed()
    {
        $feeds = Feed::get();
        return view('post', compact(['feeds']));
    }
    public function add()
    {
        return view('website.add');
    }
    public function create()
    {
        return view('website.create');
    }
    public function createFeed()
    {
        return view('website.create');
    }
    public function createF(Request $request)
    {
        $filename = null;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage'), $filename);
        
        }

        Feed::create([
            'details' => $request->details,
            'user_id' => $request->userid,
            'image' => $filename
        ]);
        return  redirect(route('feed'));

    }
    public function store(Request $request)
    {
        
        $filename = null;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage'), $filename);
        
        }

        Property::create([
            'details' => $request->details,
            'user_id' => $request->userid,
            'room' => $request->room,
            'seat' => $request->seat,
            'floar' => $request->floar,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename,
            'location' => $request->Location
        ]);
        return  redirect(route('home'));

    }

}
