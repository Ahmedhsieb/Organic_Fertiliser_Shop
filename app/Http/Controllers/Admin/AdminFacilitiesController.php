<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminFacilitiesInterface;
use Illuminate\Http\Request;

class AdminFacilitiesController extends Controller
{
    public $AdminFacilitiesInterface;

    public function __construct(AdminFacilitiesInterface $AdminFacilitiesInterface)
    {
        $this->AdminFacilitiesInterface = $AdminFacilitiesInterface;
    }

    public function getFacilities()
    {
        return $this->AdminFacilitiesInterface->getFacilities();
    }

    public function addFacilities()
    {
        return $this->AdminFacilitiesInterface->addFacilities();
    }

    public function storeFacilities(Request $request)
    {
        return $this->AdminFacilitiesInterface->storeFacilities($request);
    }

    public function editFacilities($id)
    {
        return $this->AdminFacilitiesInterface->editFacilities($id);
    }

    public function updateFacilities(Request $request)
    {
        return $this->AdminFacilitiesInterface->updateFacilities($request);
    }

    public function deleteFacilities($id)
    {
        return $this->AdminFacilitiesInterface->deleteFacilities($id);
    }
}
