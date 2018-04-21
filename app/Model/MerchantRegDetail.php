<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantRegDetail
 * @package ITreat\Model
 */
class MerchantRegDetail extends Model
{
    /**
     * @var string
     */
    public $table = 'merchant_reg_details';

    /**
     * @var string
     */
    public $primaryKey = 'merchant_reg_details_id';

    /**
     * @var array
     */
    public $guarded = [];
}
