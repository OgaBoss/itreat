<?php

namespace ITreat\Http\Controllers\Api;

use Illuminate\Http\Request;
use ITreat\Http\Controllers\Controller;
use ITreat\Http\Requests\MerchantRequest;
use ITreat\Http\Resources\MerchantResource;
use ITreat\Repository\Merchant\IMerchant;

/**
 * Class MerchantController
 * @package ITreat\Http\Controllers\Api
 */
class MerchantController extends Controller
{
    /**
     * @var
     */
    public $repository;

    /**
     * MerchantController constructor.
     * @param $repository
     */
    public function __construct(IMerchant $repository)
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
        return response()->json(['status' => 'success', 'data' => MerchantResource::collection($this->repository->all())], 20);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MerchantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchantRequest $request)
    {
        return response()->json(['status' => 'success', 'data' => $this->repository->create($request->all())], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['status' => 'success', 'data' => new MerchantResource($this->repository->find($id))], 200);

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
