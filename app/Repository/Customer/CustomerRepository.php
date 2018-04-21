<?php
namespace ITreat\Repository\Customer;

use ITreat\Model\Customer;
use ITreat\Repository\BaseRepository;

class CustomerRepository extends BaseRepository implements ICustomer
{
    /**
     * @return string
     */
    public function model()
    {
        return Customer::class;
    }

}