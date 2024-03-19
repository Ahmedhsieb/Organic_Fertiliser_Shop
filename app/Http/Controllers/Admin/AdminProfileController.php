<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminProfileInterface;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public $AdminProfileInterface;

    public function __construct(AdminProfileInterface $AdminProfileInterface)
    {
        $this->AdminProfileInterface = $AdminProfileInterface;
    }

    public function getProfile()
    {
        return $this->AdminProfileInterface->getProfile();
    }

    public function updateProfile(Request $request)
    {
        return $this->AdminProfileInterface->updateProfile($request);
    }

    public function deleteProfile()
    {
        return $this->AdminProfileInterface->deleteProfile();
    }
}
