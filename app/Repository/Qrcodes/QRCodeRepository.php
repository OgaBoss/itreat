<?php
/**
 * Created by PhpStorm.
 * User: adebayooluwadamilola
 * Date: 4/21/18
 * Time: 4:48 PM
 */

namespace ITreat\Repository\QRCodes;

use ITreat\Model\QRCode;
use ITreat\Repository\BaseRepository;

class QRCodeRepository extends BaseRepository implements IQRCodes
{
    /**
     * @return string
     */
    public function model()
    {
        return QRCode::class;
    }
}