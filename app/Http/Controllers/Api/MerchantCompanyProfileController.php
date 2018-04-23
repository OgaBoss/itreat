<?php

namespace ITreat\Http\Controllers\Api;

use Illuminate\Http\Request;
use ITreat\Http\Controllers\Controller;
use ITreat\Http\Requests\MerchantCompanyProfileRequest;
use ITreat\Repository\MerchantProfile\IMerchantProfile;

/**
 * Class MerchantCompanyProfileController
 * @package ITreat\Http\Controllers\Api
 */
class MerchantCompanyProfileController extends Controller
{
    /**
     * @var
     */
    protected $repository;

    /**
     * MerchantCompanyProfileController constructor.
     * @param $repository
     */
    public function __construct(IMerchantProfile $repository)
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
     * @param  MerchantCompanyProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchantCompanyProfileRequest $request)
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
