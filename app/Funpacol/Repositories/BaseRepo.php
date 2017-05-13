<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/05/17
 * Time: 11:12 AM
 */



namespace App\Funpacol\Repositories;



use App\Funpacol\Entities\City;

abstract class BaseRepo {


    protected $model ;

    public function __construct()
    {
        $this->model = $this->getModel();
    }


    abstract public function getModel();

    public function cities()
    {

        return City::orderBy('name', 'DESC')->pluck('name','id');

    }


    public function find($id)
    {

        return $this->model->find($id);

    }

    public function create()
    {
        
    }


    public function store($request)
    {


    }

    public function edit($id)
    {

    }


    public function update($request, $id)
    {

    }





}