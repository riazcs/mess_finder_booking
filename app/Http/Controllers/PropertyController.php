<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::get();
        return view('mess.admin_mess', compact('properties'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
       $property =  Property::find($id);
        $filename = null;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('storage'), $filename);
        
        }

        $property->update([
            'details' => $request->details,
            'user_id' => $request->userid,
            'room' => $request->room,
            'seat' => $request->seat,
            'floar' => $request->floar,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $filename,
            'location' => $request->location,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return  back();
    }


    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return back();
    }
}
