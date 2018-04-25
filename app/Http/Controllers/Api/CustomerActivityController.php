<?php

namespace ITreat\Http\Controllers\Api;

use Illuminate\Http\Request;
use ITreat\Http\Controllers\Controller;
use ITreat\Http\Requests\CustomerActivityRequest;
use ITreat\Repository\CustomerActivity\ICustomerActivity;

class CustomerActivityController extends Controller
{
    protected $repository;

    /**
     * CustomerActivityController constructor.
     * @param $repository
     */
    public function __construct(ICustomerActivity $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CustomerActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerActivityRequest $request)
    {
        return response()->json(['status' => 'success', 'data' => $this->repository->create($request->all())]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
