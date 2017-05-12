<?php

namespace App\Http\Controllers\Process;


use App\Funpacol\Repositories\CityRepo;
use App\Http\Controllers\Controller;

class CityController extends Controller {


    protected $cityRepo;

    public function __construct(CityRepo $cityRepo)
    {

        $this->cityRepo = $cityRepo;

    }


    public function city($slug, $id)
    {

        $prueba = $this->cityRepo->find($id);

        dd($prueba);

    }


}
