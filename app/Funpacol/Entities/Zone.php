<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/05/17
 * Time: 1:45 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class Zone extends Model {


    protected $fillable = [ 'name', 'slug', 'city_id'];

}