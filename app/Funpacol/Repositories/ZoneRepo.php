<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/05/17
 * Time: 1:44 PM
 */

namespace App\Funpacol\Repositories;


class ZoneRepo extends BaseRepo {


    public function getModel()
    {
        return new Zone;
    }

}