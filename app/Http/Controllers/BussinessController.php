<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bussiness;
use App\Models\Location;

class BussinessController extends Controller
{
    //
    public function index(){
        $bussinesses = Bussiness::paginate(4);
        // dd($bussinesses);

        return view('index',compact('bussinesses'));

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $logo = $request->logo;

        $name = $logo->getClientOriginalName();

        $logo->storeAs('public/images',$name);

        $bussiness = Bussiness::create([
            'name' => $request->name,
            'logo' => $name,
            'email' => $request->email,
            'address' => $request->address,
            'created_user' => $request->created_user,
        ]);

        return redirect()->route('bussinesses.index');
    }

    public function destroy(Bussiness $bussiness){

        $bussiness->delete();

        return redirect()->route('bussinesses.index');

    }

    public function edit(Bussiness $bussiness){

        // dd($bussinesses);
        return view('edit',compact('bussiness'));
    }

    public function update(Request $request, Bussiness $bussiness){

        $logo = $request->logo;

        if(is_null($logo)){
            return redirect()->route('bussinesses.create');
        }else{
            $name = $logo->getClientOriginalName();

            $logo->storeAs('public/images',$name);

            $bussiness->update([
                'name' => $request->name,
                'logo' => $name,
                'email' => $request->email,
                'address' => $request->address,
            ]);
        }

        return redirect()->route('bussinesses.index');
    }

    public function show(Bussiness $bussiness){

        $bussinesse = Bussiness::with('locations')->get();

        // dd($bussiness->locations);

        return view('show',compact('bussiness'));
    }


}
