<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Internalmovement;
use App\Http\Resources\Internalmovement\InternalmovementResource;
use App\Http\Resources\Internalmovement\InternalmovementCollection;

class InternalmovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return InternalmovementCollection::collection(Internalmovement::paginate(10));
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
     * @param  \App\Model\Internalmovement  $internalmovement
     * @return \Illuminate\Http\Response
     */
    public function show(Internalmovement $internalmovement)
    {
        return new InternalmovementResource($internalmovement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Internalmovement  $internalmovement
     * @return \Illuminate\Http\Response
     */
    public function edit(Internalmovement $internalmovement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Internalmovement  $internalmovement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Internalmovement $internalmovement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Internalmovement  $internalmovement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Internalmovement $internalmovement)
    {
        //
    }
}
