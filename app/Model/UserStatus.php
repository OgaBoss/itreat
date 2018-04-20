<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserStatus
 * @package ITreat\Model
 */
class UserStatus extends Model
{
    /**
     * @var string
     */
    public $table = 'user_active';

    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var string
     */
    public $primaryKey = 'user_active_id';
}
