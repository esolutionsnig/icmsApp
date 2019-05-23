<?php

namespace App\Http\Controllers;

use App\Model\Banks;
use App\Model\Bankrep;
use Illuminate\Http\Request;
use App\Http\Resources\BankrepResource;

class BankrepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Banks $bank)
    {
        return BankrepResource::collection($bank->bankreps);
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
     * @param  \App\Model\Bankrep  $bankrep
     * @return \Illuminate\Http\Response
     */
    public function show(Bankrep $bankrep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bankrep  $bankrep
     * @return \Illuminate\Http\Response
     */
    public function edit(Bankrep $bankrep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bankrep  $bankrep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bankrep $bankrep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bankrep  $bankrep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bankrep $bankrep)
    {
        //
    }
}
