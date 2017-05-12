<?php

/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/05/17
 * Time: 11:50 AM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\City;

class CityRepo extends CrudRepo {


    public function getModel()
    {
        return new City;
    }

}