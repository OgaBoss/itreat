<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var string
     */
    public $primaryKey = 'customer_id';

    /**
     * @var string
     */
    public $table = 'customer';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qrCode()
    {
        return $this->belongsTo(QRCode::class, 'qr_codes_id');
    }

}
