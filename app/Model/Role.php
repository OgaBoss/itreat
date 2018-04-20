<?php
namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package ITreat\Model
 */
class Role extends Model
{
    /**
     * @var string
     */
    public $primaryKey = 'user_type_id';

    /**
     * @var string
     */
    public $table = 'user_type';

    /**
     * @var array
     */
    public $guarded = [];
}
