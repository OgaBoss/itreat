<?php

namespace ITreat\Model;

use Illuminate\Database\Eloquent\Model;

class PasswordChanged extends Model
{
    /**
     * @var string
     */
    public $primaryKey = 'user_changed_password_id';

    /**
     * @var string
     */
    public $table = 'user_changed_password';

    /**
     * @var array
     */
    public $guarded = [];
}
