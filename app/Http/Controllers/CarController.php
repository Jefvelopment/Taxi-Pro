<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view('car.index');
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
        ]);

        $car = new Car();
        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->save();

        return redirect()->route('car.index');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
        ]);

        $car = Car::find($id);
        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->save();

        return redirect()->route('car.index');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('car.index');
    }

    
}
