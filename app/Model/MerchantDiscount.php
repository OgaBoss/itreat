<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantDiscount
 * @package ITreat\Model
 */
class MerchantDiscount extends Model
{
    /**
     * @var string
     */
    public $table = 'merchant_discount_offer';

    /**
     * @var string
     */
    public $primaryKey = 'merchant_discount_offer_id';

    /**
     * @var array
     */
    public $guarded = [];
}
