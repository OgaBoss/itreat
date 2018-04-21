<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QRCode
 * @package ITreat\Model
 */
class QRCode extends Model
{
    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var string
     */
    public $primaryKey = 'qr_codes_id';

    /**
     * @var string
     */
    public $table = 'qr_codes';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activation()
    {
        return $this->belongsTo(QRCodeActivation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne(Customer::class, 'qr_codes_id');
    }
}
