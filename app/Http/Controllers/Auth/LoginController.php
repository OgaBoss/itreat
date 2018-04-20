<?php

namespace ITreat\Http\Controllers\Auth;

use Illuminate\Http\Request;
use ITreat\Http\Controllers\Controller;
use ITreat\Http\Requests\LoginRequest;
use ITreat\Service\JWTLoginService;

/**
 * Class LoginController
 * @package ITreat\Http\Controllers\Auth
 */
class LoginController extends Controller
{
    /**
     * @var JWTLoginService
     */
    protected $service;

    /**
     * LoginController constructor.
     * @param $service
     */
    public function __construct(JWTLoginService $service)
    {
        $this->service = $service;
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(LoginRequest $request)
    {
        return $this->service->jwtLogin($request->all());
    }
}
