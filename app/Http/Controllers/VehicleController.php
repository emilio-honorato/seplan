<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::paginate(13);
        //dd($vehicles);
        return view('vehicle.index', compact('vehicles'));
    }
    public function veiculos()
    {
       // $vehicles = Vehicle::paginate(10);
        //$vehicles;
        //return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->validated());

        return redirect()->route('vehicles.index');
    }

    public function edit($vehicle)
    {
        //dd($vehicle);
        $veiculo = Vehicle::findOrFail($vehicle);
        return view('vehicle.edit', compact('veiculo'));
    }

    public function update(VehicleRequest $request, $vehicle)
    {

        $vehicle = Vehicle::findOrFail($vehicle);


        $validation = $request->validated();

        //dd($validation);

        $vehicle -> update($request->validated());
        $vehicle -> save();


        return redirect()->route('vehicles.index');
    }

    public function destroy($vehicle)
    {
        //dd($vehicle);

        $vehicle = Vehicle::findOrFail($vehicle);

        $vehicle->delete();


        return redirect()->route('vehicles.index');
    }
}

