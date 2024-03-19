<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\Auth\AdminAuthInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\Translation\t;

class AdminAuthController extends Controller
{
   public $AdminAuthInterface;

   public function __construct(AdminAuthInterface $AdminAuthInterface)
   {
       $this->AdminAuthInterface = $AdminAuthInterface;
   }


    public function login()
    {
        return $this->AdminAuthInterface->login();
   }

    public function postLogin(Request $request)
    {
        return $this->AdminAuthInterface->postLogin($request);
   }

    public function logout()
    {
        return $this->AdminAuthInterface->logout();
   }

}
