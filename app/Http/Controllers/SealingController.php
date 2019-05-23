<?php

namespace App\Http\Controllers;

use App\Model\Sealing;
use Illuminate\Http\Request;
use App\Http\Resources\Sealing\SealingResource;
use App\Http\Resources\Sealing\SealingCollection;

class SealingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SealingCollection::collection(Sealing::paginate(10));
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
     * @param  \App\Model\Sealing  $sealing
     * @return \Illuminate\Http\Response
     */
    public function show(Sealing $sealing)
    {
        return new SealingResource($sealing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Sealing  $sealing
     * @return \Illuminate\Http\Response
     */
    public function edit(Sealing $sealing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Sealing  $sealing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sealing $sealing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Sealing  $sealing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sealing $sealing)
    {
        //
    }
}
