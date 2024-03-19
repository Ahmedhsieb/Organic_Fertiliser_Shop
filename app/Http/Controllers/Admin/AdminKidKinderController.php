<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminKidKinderInterface;
use Illuminate\Http\Request;

class AdminKidKinderController extends Controller
{
    public $AdminKidKinderInterface;

    public function __construct(AdminKidKinderInterface $AdminKidKinderInterface)
    {
        $this->AdminKidKinderInterface = $AdminKidKinderInterface;
    }

    public function getData()
    {
        return $this->AdminKidKinderInterface->getData();
    }

    public function addData()
    {
        return $this->AdminKidKinderInterface->addData();
    }

    public function storeData(Request $request)
    {
        return $this->AdminKidKinderInterface->storeData($request);
    }

    public function editData()
    {
        return $this->AdminKidKinderInterface->editData();
    }

    public function editSocial()
    {
        return $this->AdminKidKinderInterface->editSocial();
    }

    public function editSocialData($id)
    {
        return $this->AdminKidKinderInterface->editSocialData($id);
    }

    public function editSingleData($data)
    {
        return $this->AdminKidKinderInterface->editSingleData($data);
    }

    public function updateData(Request $request)
    {
        return $this->AdminKidKinderInterface->updateData($request);
    }

    public function updateSocialData(Request $request)
    {
        return $this->AdminKidKinderInterface->updateSocialData($request);
    }

    public function updateSingleData(Request $request)
    {
        return $this->AdminKidKinderInterface->updateSingleData($request);
    }

    public function deleteData($id)
    {
        return $this->AdminKidKinderInterface->deleteData($id);
    }
}
