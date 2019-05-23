<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Consignmentlocation;
use App\Http\Resources\Consignmentlocation\ConsignmentlocationResource;
use App\Http\Resources\Consignmentlocation\ConsignmentlocationCollection;

class ConsignmentlocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ConsignmentlocationCollection::collection(Consignmentlocation::paginate(10));
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
     * @param  \App\Model\Consignmentlocation  $consignmentlocation
     * @return \Illuminate\Http\Response
     */
    public function show(Consignmentlocation $consignmentlocation)
    {
        return new ConsignmentlocationResource($consignmentlocation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Consignmentlocation  $consignmentlocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consignmentlocation $consignmentlocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Consignmentlocation  $consignmentlocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consignmentlocation $consignmentlocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Consignmentlocation  $consignmentlocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consignmentlocation $consignmentlocation)
    {
        //
    }
}
