<?php

namespace App\Http\Controllers;

use App\SavedCars;
use Illuminate\Http\Request;

class SavedCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $SavedCar = new SavedCars();
        $SavedCar->name = $request->input('name');
        $SavedCar->type = $request->input('car_type');
        $SavedCar->interior_color = $request->input('interior');
        $SavedCar->exterior_color = $request->input('exterior');
        $SavedCar->user_id = \Auth::user()->id;

        $SavedCar->save();

        // $interior = '#000000';
        // $exterior = '#ff0000';
        // $type = 'CAR';
        return redirect()->back()->with('message', 'Car Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SavedCars  $savedCars
     * @return \Illuminate\Http\Response
     */
    public function show(SavedCars $savedCars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SavedCars  $savedCars
     * @return \Illuminate\Http\Response
     */
    public function edit(SavedCars $savedCars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SavedCars  $savedCars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SavedCars $savedCars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SavedCars  $savedCars
     * @return \Illuminate\Http\Response
     */
    public function destroy(SavedCars $savedCars)
    {
        //
    }
}
