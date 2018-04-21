<?php
/**
 * Created by PhpStorm.
 * User: adebayooluwadamilola
 * Date: 4/21/18
 * Time: 6:25 PM
 */

namespace ITreat\Service;

use ITreat\Http\Resources\QRCodesResource;
use ITreat\Repository\Customer\ICustomer;
use ITreat\Repository\QRCodes\IQRCodes;

class QRActivationAuthentication
{
    /**
     * @var IQRCodes
     */
    protected $codeRepository;

    /**
     * @var ICustomer
     */
    protected $customerRepository;

    /**
     * QRActivationAuthentication constructor.
     * @param $codeRepository
     * @param $customerRepository
     */
    public function __construct(IQRCodes $codeRepository, ICustomer $customerRepository)
    {
        $this->codeRepository = $codeRepository;
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function init($code)
    {
        $authenticatedCodeResponse = $this->getQRCode($code);

        if (!is_null($authenticatedCodeResponse)) {
            return response()->json(['status' => 'success', 'data' => new QRCodesResource($authenticatedCodeResponse->customer)], 200);
        }

        return response()->json(['status' => 'error', 'data' => 'This QR Code does not exist.']);
    }


    /**
     * @param $code
     * @return mixed
     */
    public function getQRCode($code)
    {
        return $this->codeRepository->findBy('qr_codes_number', $code);
    }
}