<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/05/17
 * Time: 11:12 AM
 */



namespace App\Funpacol\Repositories;



abstract class CrudRepo {


    protected $model ;

    public function __construct()
    {
        $this->model = $this->getModel();
    }


    abstract public function getModel();


    public function find($id)
    {
        return $this->model->find($id);
    }

}