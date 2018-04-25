<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerActivity extends Model
{
    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var string
     */
    public $primaryKey = 'customer_activities_id';

    /**
     * @var string
     */
    public $table = 'customer_activities';

    /**
     * @var bool
     */
    public $timestamps = false;
}
