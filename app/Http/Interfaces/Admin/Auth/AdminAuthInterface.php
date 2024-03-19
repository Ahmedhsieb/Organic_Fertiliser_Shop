<?php

namespace App\Http\Interfaces\Admin\Auth;

interface AdminAuthInterface
{

    public function login();
    public function postLogin($request);

    public function logout();

}
