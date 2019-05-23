<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Bundleconfirmation;
use App\Http\Resources\Bundleconfirmation\BundleconfirmationResource;
use App\Http\Resources\Bundleconfirmation\BundleconfirmationCollection;

class BundleconfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Bundleconfirmation::all();
        return BundleconfirmationCollection::collection(Bundleconfirmation::paginate(10));
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
     * @param  \App\Model\Bundleconfirmation  $bundleconfirmation
     * @return \Illuminate\Http\Response
     */
    public function show(Bundleconfirmation $bundleconfirmation)
    {
        // return $bundleconfirmation;
        return new BundleconfirmationResource($bundleconfirmation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bundleconfirmation  $bundleconfirmation
     * @return \Illuminate\Http\Response
     */
    public function edit(Bundleconfirmation $bundleconfirmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bundleconfirmation  $bundleconfirmation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bundleconfirmation $bundleconfirmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bundleconfirmation  $bundleconfirmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bundleconfirmation $bundleconfirmation)
    {
        //
    }
}
