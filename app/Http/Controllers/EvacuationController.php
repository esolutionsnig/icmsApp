<?php

namespace App\Http\Controllers;

use App\Model\Evacuation;
use Illuminate\Http\Request;
use App\Http\Resources\Evacuation\EvacuationResource;
use App\Http\Resources\Evacuation\EvacuationCollection;

class EvacuationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Evacuation::all();
        return EvacuationCollection::collection(Evacuation::paginate(10));
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
     * @param  \App\Model\Evacuation  $evacuation
     * @return \Illuminate\Http\Response
     */
    public function show(Evacuation $evacuation)
    {
        // Return Single Evacuation request
        // return $evacuation;
        return new EvacuationResource($evacuation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Evacuation  $evacuation
     * @return \Illuminate\Http\Response
     */
    public function edit(Evacuation $evacuation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Evacuation  $evacuation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evacuation $evacuation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Evacuation  $evacuation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evacuation $evacuation)
    {
        //
    }
}
