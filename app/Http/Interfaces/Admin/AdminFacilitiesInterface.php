<?php

namespace App\Http\Interfaces\Admin;

use Illuminate\Support\Facades\Request;

interface AdminFacilitiesInterface
{
    public function getFacilities();

    public function addFacilities();

    public function storeFacilities($request);

    public function editFacilities($id);

    public function updateFacilities($request);

    public function deleteFacilities($id);
}
