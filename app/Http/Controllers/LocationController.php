<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bussiness;
use App\Models\Location;

class LocationController extends Controller
{

    public function index(){
        $locations = Location::with('Bussiness')->get();
        
        // dd($locations[0]->bussiness->name);

        return view('locations',compact('locations'));
    }
    //
    public function create(){
        $bussinesses = Bussiness::all();

        return view('createLocation',compact('bussinesses'));
    }

    public function store(Request $request){
        // dd($request->all());

        Location::create([
            'bussiness_id' => $request->bussiness_id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'created_user' => $request->created_user,
        ]);

        return redirect()->route('locations.index');
    }

    // public function show(Location $locations){

    //     dd($locations);

    //     // return view('locations',compact('location'));
    // }

    public function destroy(location $location){
        $location->delete();

        return redirect()->route('locations.index');
    }

    public function edit(Location $location){

        return view('editLocation',compact('location'));
    }

    public function update(Location $location, Request $request){

        $location->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->route('locations.create');

    }
}
