<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    function index(Request $request) {
        $date1 = $request->date1;
        $date2 = $request->date2;
        $ganbajeba = $request->ganbajeba;

        if(isset($date1) && isset($date2) && isset($ganbajeba)) {
            $cars = Car::where([
                ['release_date', '>', $date1],
                ['release_date', '<', $date2],
                ['ganbajeba', '=', $ganbajeba],
            ])->get();
        } else {
            $cars = Car::all();
        }

        return view("read", ["cars" => $cars]);
    }

    function edit_delete_view() {
        $cars = Car::all();
        return view("edit_delete_view", ["cars" => $cars]);
    }

    function add(Request $request) {
        if($request->isMethod('post')) {
            $name = $request->input("name");
            $model = $request->input("model");
            $release_date = $request->input("release_date");
            $engine = $request->input("engine");
            $ganbajeba = $request->input("ganbajeba");
            $price = $request->input("price");

            Car::create([
                "name" => $name,
                "model" => $model,
                "release_date" => $release_date,
                "engine" => $engine,
                "ganbajeba" => $ganbajeba,
                "price" => $price
            ]);
            return redirect()->route("index");
        }

        return view("add");
    }

    function edit(Request $request) {
        if($request->isMethod('post')) {
            $id = $request->input("id");
            $name = $request->input("name");
            $model = $request->input("model");
            $release_date = $request->input("release_date");
            $engine = $request->input("engine");
            $ganbajeba = $request->input("ganbajeba");
            $price = $request->input("price");

            $car= Car::find($id);
            $car->name = $name;
            $car->model = $model;
            $car->release_date= $release_date;
            $car->engine = $engine;
            $car->ganbajeba = $ganbajeba;
            $car->price = $price;

            $car->save();

            return redirect()->route('index');
        }

        $id = $request->input("id");
        $car = Car::find($id);
        return view("edit_form", ["car" => $car]);
    }

    function delete(Request $request) {
        $id = $request->input("id");

        $car = Car::find($id);
        $car->delete();
        return redirect()->route("index");
    }
}
