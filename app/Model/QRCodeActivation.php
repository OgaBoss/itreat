<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

class QRCodeActivation extends Model
{
    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var string
     */
    public $primaryKey = 'qr_codes_activation_id';

    /**
     * @var string
     */
    public $table = 'qr_codes_activation';

    /**
     * @var bool
     */
    public $timestamps = false;
}
