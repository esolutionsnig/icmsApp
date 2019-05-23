<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Thrownexception;
use App\Model\Bundleconfirmation;
use App\Http\Resources\ThrownexceptionResource;

class ThrownexceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bundleconfirmation $bundleconfirmation)
    {
        return ThrownexceptionResource::collection($bundleconfirmation->thrownexceptions);
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
     * @param  \App\Model\Thrownexception  $thrownexception
     * @return \Illuminate\Http\Response
     */
    public function show(Thrownexception $thrownexception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Thrownexception  $thrownexception
     * @return \Illuminate\Http\Response
     */
    public function edit(Thrownexception $thrownexception)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Thrownexception  $thrownexception
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thrownexception $thrownexception)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Thrownexception  $thrownexception
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thrownexception $thrownexception)
    {
        //
    }
}
