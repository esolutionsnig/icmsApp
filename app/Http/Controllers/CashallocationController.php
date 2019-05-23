<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cashallocation;
use App\Http\Resources\Cashallocation\CashallocationResource;
use App\Http\Resources\Cashallocation\CashallocationCollection;

class CashallocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CashallocationCollection::collection(Cashallocation::paginate(10));
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
     * @param  \App\Model\Cashallocation  $cashallocation
     * @return \Illuminate\Http\Response
     */
    public function show(Cashallocation $cashallocation)
    {
        return new CashallocationResource($cashallocation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cashallocation  $cashallocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashallocation $cashallocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cashallocation  $cashallocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashallocation $cashallocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cashallocation  $cashallocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cashallocation $cashallocation)
    {
        //
    }
}
