<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Depositcategory;
use App\Http\Resources\Depositcategory\DepositcategoryResource;
use App\Http\Resources\Depositcategory\DepositcategoryCollection;

class DepositcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DepositcategoryCollection::collection(Depositcategory::paginate(10));
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
     * @param  \App\Model\Depositcategory  $depositcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Depositcategory $depositcategory)
    {
        return new DepositcategoryResource($depositcategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Depositcategory  $depositcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Depositcategory $depositcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Depositcategory  $depositcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Depositcategory $depositcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Depositcategory  $depositcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Depositcategory $depositcategory)
    {
        //
    }
}
