<?php

namespace App\Http\Controllers;

use App\Model\Banks;
use Illuminate\Http\Request;
use App\Http\Requests\BanksRequest;
use App\Http\Resources\Bank\BankResource;
use App\Http\Resources\Bank\BankCollection;
use Symfony\Component\HttpFoundation\Response;

class BanksController extends Controller
{
    /**
     * Add middleware to prevent unauthorzed user from make changes to db record
     * This middleware will be excluded for get requests i.e index and show URI
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BankCollection::collection(Banks::paginate(5));
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
    public function store(BanksRequest $request)
    {
        $bank = new Banks;
        $bank->bank_name = $request->bank_name;
        $bank->bank_code = $request->code;
        $bank->added_by = $request->addedBy;
        $bank->save();
        return response([
            'data' => new BankResource($bank)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function show(Banks $bank)
    {
        return new BankResource($bank);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function edit(Banks $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banks $bank)
    {
        $bank->update($request->all());
        return response([
            'data' => new BankResource($bank)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Banks  $banks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banks $bank)
    {
        $bank->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
