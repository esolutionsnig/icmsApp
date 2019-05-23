<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Bundleconfirmation;
use App\Model\Bundleconfirmationbag;
use App\Http\Resources\BundleconfirmationbagResource;

class BundleconfirmationbagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bundleconfirmation $bundleconfirmation)
    {
        return BundleconfirmationbagResource::collection($bundleconfirmation->bundleconfirmationbags);
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
     * @param  \App\Model\Bundleconfirmationbag  $bundleconfirmationbag
     * @return \Illuminate\Http\Response
     */
    public function show(Bundleconfirmationbag $bundleconfirmationbag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bundleconfirmationbag  $bundleconfirmationbag
     * @return \Illuminate\Http\Response
     */
    public function edit(Bundleconfirmationbag $bundleconfirmationbag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bundleconfirmationbag  $bundleconfirmationbag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bundleconfirmationbag $bundleconfirmationbag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bundleconfirmationbag  $bundleconfirmationbag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bundleconfirmationbag $bundleconfirmationbag)
    {
        //
    }
}
