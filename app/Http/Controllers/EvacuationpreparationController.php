<?php

namespace App\Http\Controllers;

use App\Model\Evacuation;
use Illuminate\Http\Request;
use App\Model\Evacuationpreparation;
use App\Http\Resources\EvacuationpreparationResource;

class EvacuationpreparationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Evacuation $evacuation)
    {
        return EvacuationpreparationResource::collection($evacuation->evacuationpreparations);
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
     * @param  \App\Model\Evacuationpreparation  $evacuationpreparation
     * @return \Illuminate\Http\Response
     */
    public function show(Evacuationpreparation $evacuationpreparation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Evacuationpreparation  $evacuationpreparation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evacuationpreparation $evacuationpreparation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Evacuationpreparation  $evacuationpreparation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evacuationpreparation $evacuationpreparation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Evacuationpreparation  $evacuationpreparation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evacuationpreparation $evacuationpreparation)
    {
        //
    }
}
