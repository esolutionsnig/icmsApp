<?php

namespace App\Http\Controllers;

use App\Model\Banks;
use App\Model\Bookballance;
use Illuminate\Http\Request;
use App\Http\Resources\BookballanceResource;

class BookballanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Banks $bank)
    {
        return BookballanceResource::collection($bank->bookballances);
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
     * @param  \App\Model\Bookballance  $bookballance
     * @return \Illuminate\Http\Response
     */
    public function show(Bookballance $bookballance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bookballance  $bookballance
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookballance $bookballance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bookballance  $bookballance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookballance $bookballance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bookballance  $bookballance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookballance $bookballance)
    {
        //
    }
}
