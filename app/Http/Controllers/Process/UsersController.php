<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/05/17
 * Time: 3:05 PM
 */

namespace App\Http\Controllers\Process;


use App\Funpacol\Repositories\UserRepo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;


class UsersController extends Controller {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {

        $this->userRepo = $userRepo;

    }


    public function signUp()
    {
        $cities = $this->userRepo->cities();

        return view('Authentication/sign-up', compact('cities'));

    }

    public function register(Request $request)
    {
        dd($request->all());

        $user = $this->userRepo->storeLogin($request);

        dd($user);
    }

    public function login(Request $request)
    {

        $user = $this->userRepo->login($request);
        dd($user);

    }


}