<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Merchant
 * @package ITreat\Model
 */
class Merchant extends Model
{
    /**
     * @var string
     */
    public $table = 'merchant';

    /**
     * @var string
     */
    public $primaryKey = 'merchant_id';

    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(MerchantCategory::class, 'merchant_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function discount()
    {
        return $this->belongsTo(MerchantDiscount::class, 'merchant_discount_offer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function regDetail()
    {
        return $this->belongsTo(MerchantRegDetail::class, 'merchant_reg_details_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
