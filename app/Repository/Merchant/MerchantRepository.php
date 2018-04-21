<?php
/**
 * Created by PhpStorm.
 * User: adebayooluwadamilola
 * Date: 4/20/18
 * Time: 9:42 PM
 */

namespace ITreat\Repository\Merchant;

use ITreat\Model\Merchant;
use ITreat\Repository\BaseRepository;

class MerchantRepository extends BaseRepository implements IMerchant
{
    public function model()
    {
        return Merchant::class;
    }
}