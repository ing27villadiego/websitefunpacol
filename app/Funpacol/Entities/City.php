<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/05/17
 * Time: 1:47 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class City extends Model {


    protected $fillable = ['name', 'slug', 'letter'];

}