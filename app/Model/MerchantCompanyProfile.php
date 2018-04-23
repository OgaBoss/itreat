<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantCompanyProfile
 * @package ITreat\Model
 */
class MerchantCompanyProfile extends Model
{
    /**
     * @var string
     */
    public $table = 'merchant_company_profile';

    /**
     * @var string
     */
    public $primaryKey = 'merchant_company_profile_id';

    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var bool
     */
    public $timestamps = false;
}
