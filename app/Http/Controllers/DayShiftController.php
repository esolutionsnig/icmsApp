<?php

namespace App\Http\Controllers;

use App\Model\Dayshift;
use Illuminate\Http\Request;
use App\Http\Resources\Dayshift\DayshiftResource;
use App\Http\Resources\Dayshift\DayshiftCollection;

class DayshiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DayshiftCollection::collection(Dayshift::paginate(10));
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
     * @param  \App\Model\Dayshift  $dayshift
     * @return \Illuminate\Http\Response
     */
    public function show(Dayshift $dayshift)
    {
        return new DayshiftResource($dayshift);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Dayshift  $dayshift
     * @return \Illuminate\Http\Response
     */
    public function edit(Dayshift $dayshift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Dayshift  $dayshift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dayshift $dayshift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Dayshift  $dayshift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dayshift $dayshift)
    {
        //
    }
}
