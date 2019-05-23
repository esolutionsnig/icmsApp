<?php

namespace App\Http\Controllers;

use App\Model\Cit;
use App\Model\Evacuation;
use Illuminate\Http\Request;
use App\Http\Resources\CitResource;

class CitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Evacuation $evacuation)
    {
        return CitResource::collection($evacuation->cits);
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
     * @param  \App\Model\Cit  $cit
     * @return \Illuminate\Http\Response
     */
    public function show(Cit $cit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cit  $cit
     * @return \Illuminate\Http\Response
     */
    public function edit(Cit $cit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cit  $cit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cit $cit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cit  $cit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cit $cit)
    {
        //
    }
}
