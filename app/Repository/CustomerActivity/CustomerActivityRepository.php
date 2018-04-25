<?php
/**
 * Created by PhpStorm.
 * User: adebayooluwadamilola
 * Date: 4/25/18
 * Time: 6:53 AM
 */

namespace ITreat\Repository\CustomerActivity;

use ITreat\Model\CustomerActivity;
use ITreat\Repository\BaseRepository;

/**
 * Class CustomerActivityRepository
 * @package ITreat\Repository\CustomerActivity
 */
class CustomerActivityRepository extends BaseRepository implements ICustomerActivity
{
    /**
     * @return string
     */
    public function model()
    {
        return CustomerActivity::class;
    }
}