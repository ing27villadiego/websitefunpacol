<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/05/17
 * Time: 3:39 PM
 */

namespace App\Funpacol\Repositories;
use App\Funpacol\Entities\User;

use Sentinel;

class UserRepo extends BaseRepo {


    public function getModel()
    {
        return new User;
    }


    public function storeLogin($request)
    {
        return Sentinel::registerAndActivate($request->all());
    }

    public function login($request)
    {
        return Sentinel::authenticate($request->all());
    }



}