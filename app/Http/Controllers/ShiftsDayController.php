<?php

namespace App\Http\Controllers;

use App\Model\Shiftsday;
use Illuminate\Http\Request;
use App\Http\Resources\Shiftsday\ShiftsdayResource;
use App\Http\Resources\Shiftsday\ShiftsdayCollection;

class ShiftsdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ShiftsdayCollection::collection(Shiftsday::paginate(10));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Shiftsday  $shiftsday
     * @return \Illuminate\Http\Response
     */
    public function show(Shiftsday $shiftsday)
    {
        return new ShiftsdayResource($shiftsday);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Shiftsday  $shiftsday
     * @return \Illuminate\Http\Response
     */
    public function edit(Shiftsday $shiftsday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Shiftsday  $shiftsday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shiftsday $shiftsday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Shiftsday  $shiftsday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shiftsday $shiftsday)
    {
        //
    }
}
