<?php

namespace App\Http\Controllers;

use App\Model\Containertype;
use Illuminate\Http\Request;
use App\Http\Resources\Containertype\ContainertypeResource;
use App\Http\Resources\Containertype\ContainertypeCollection;

class ContainertypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContainertypeCollection::collection(Containertype::paginate(10));
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
     * @param  \App\Model\Containertype  $containertype
     * @return \Illuminate\Http\Response
     */
    public function show(Containertype $containertype)
    {
        return new ContainertypeResource($containertype);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Containertype  $containertype
     * @return \Illuminate\Http\Response
     */
    public function edit(Containertype $containertype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Containertype  $containertype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Containertype $containertype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Containertype  $containertype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Containertype $containertype)
    {
        //
    }
}
