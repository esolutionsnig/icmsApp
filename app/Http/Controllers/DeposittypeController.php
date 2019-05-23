<?php

namespace App\Http\Controllers;

use App\Model\Deposittype;
use Illuminate\Http\Request;
use App\Http\Resources\Deposittype\DeposittypeResource;
use App\Http\Resources\Deposittype\DeposittypeCollection;

class DeposittypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeposittypeCollection::collection(Deposittype::paginate(10));
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
     * @param  \App\Model\Deposittype  $deposittype
     * @return \Illuminate\Http\Response
     */
    public function show(Deposittype $deposittype)
    {
        return new DeposittypeResource($deposittype);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Deposittype  $deposittype
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposittype $deposittype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Deposittype  $deposittype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposittype $deposittype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Deposittype  $deposittype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposittype $deposittype)
    {
        //
    }
}
