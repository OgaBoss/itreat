<?php

namespace ITreat\Http\Controllers\Api;

use Illuminate\Http\Request;
use ITreat\Http\Controllers\Controller;
use ITreat\Http\Requests\QRCodesRequest;
use ITreat\Repository\QRCodes\IQRCodes;
use ITreat\Service\QRActivationAuthentication;

class AuthenticateQRCodeController extends Controller
{
    /**
     * @var
     */
    public $service;

    /**
     * AuthenticateQRCodeController constructor.
     * @param $service
     */
    public function __construct(QRActivationAuthentication $service)
    {
        $this->service = $service;
    }

    /**
     * @param $code
     * @return mixed
     */
    public function __invoke($code)
    {
        return $this->service->init($code);
    }
}
