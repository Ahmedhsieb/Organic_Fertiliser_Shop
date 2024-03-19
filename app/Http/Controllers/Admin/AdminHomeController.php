<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminHomeInterface;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public $AdminHomeInterface;

    public function __construct(AdminHomeInterface $AdminHomeInterface)
    {
        $this->AdminHomeInterface = $AdminHomeInterface ;
    }

    public function home()
    {
       return $this->AdminHomeInterface->home();
    }
}
