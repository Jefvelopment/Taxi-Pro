<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
        ]);

        $car = new Car();
        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->license_plate = $request->license_plate;
        $car->save();

        return redirect()->route('cars.index');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'license_plate' => 'required',

        ]);

        $car = Car::find($id);
        $car->make = $request->make;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->license_plate = $request->license_plate;
        $car->color = $request->color;
        $car->save();

        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}
