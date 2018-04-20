<?php
/**
 * Created by PhpStorm.
 * User: adebayooluwadamilola
 * Date: 4/20/18
 * Time: 1:12 PM
 */

namespace ITreat\Service;

use ITreat\Model\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

/**
 * Class JWTLoginService
 * @package ITreat\Service
 */
class JWTLoginService
{
    /**
     * @var JWTAuth
     */
    public $jwt;
    /**
     * @var User
     */
    public $user;

    /**
     * JWTLoginService constructor.
     * @param $jwt
     * @param $user
     */
    public function __construct(JWTAuth $jwt, User $user)
    {
        $this->jwt  = $jwt;
        $this->user = $user;
    }

    /**
     * @param $credentials
     * @return \Illuminate\Http\JsonResponse
     */
    public function  jwtLogin(array $credentials)
    {
        $token = null;
        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                if (!intval($this->getUserWithUsername($credentials['email'])->user_type_id) === 3) {
                    return response()->json([
                        'status'    => 'error',
                        'message'   => 'Wrong user type id found',
                    ], 404);
                }

                return response()->json([
                    'status'    => 'error',
                    'message'   => 'invalid_credentials',
                ], 404);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json([
                'status'    => 'error',
                'message'   => 'could_not_create_token',
            ], 500);
        }

        return response()->json([
            'status'    => 'success',
            'token'     => $token,
            'user'      => $this->getUserWithUsername($credentials['email'])
        ], 200);
    }

    /**
     * @param $email
     * @return mixed
     */
    protected function getUserWithUsername($email)
    {
       return $this->user->where('email', $email)->first();
    }
}