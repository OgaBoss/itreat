<?php
namespace ITreat\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package ITreat\Model
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * @var array
     */
    public $guarded = [];

    /**
     * @var string
     */
    public $primaryKey = 'user_id';

    /**
     * @var string
     */
    public $table = 'user';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     *
     */
    const MERCHANT_TYPE_ID = 3;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userType()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userStatus()
    {
        return $this->belongsTo(UserStatus::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userChangedPassword()
    {
        return $this->belongsTo(PasswordChanged::class);
    }

    /**
     * @return bool
     */
    public function isMerchant()
    {
        return intval($this->user_type_id) === self::MERCHANT_TYPE_ID;
    }
}