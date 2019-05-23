<?php

namespace App\Http\Controllers;

use App\Model\Supply;
use App\Model\Supplybranch;
use Illuminate\Http\Request;
use App\Http\Resources\SupplybranchResource;

class SupplybranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Supply $supply)
    {
        return SupplybranchResource::collection($supply->supplybranches);
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
     * @param  \App\Model\Supplybranch  $supplybranch
     * @return \Illuminate\Http\Response
     */
    public function show(Supplybranch $supplybranch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Supplybranch  $supplybranch
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplybranch $supplybranch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Supplybranch  $supplybranch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplybranch $supplybranch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Supplybranch  $supplybranch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplybranch $supplybranch)
    {
        //
    }
}
