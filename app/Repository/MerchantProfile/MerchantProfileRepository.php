<?php
/**
 * Created by PhpStorm.
 * User: adebayooluwadamilola
 * Date: 4/23/18
 * Time: 6:38 AM
 */

namespace ITreat\Repository\MerchantProfile;


use ITreat\Model\MerchantCompanyProfile;
use ITreat\Repository\BaseRepository;

class MerchantProfileRepository extends BaseRepository implements IMerchantProfile
{
    public function model()
    {
        return MerchantCompanyProfile::class;
    }
}