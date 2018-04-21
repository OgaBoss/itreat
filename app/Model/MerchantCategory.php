<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantCategory
 * @package ITreat\Model
 */
class MerchantCategory extends Model
{
    /**
     * @var string
     */
    public $table = 'merchant_category';

    /**
     * @var string
     */
    public $primaryKey = 'merchant_category_id';

    /**
     * @var array
     */
    public $guarded = [];
}
