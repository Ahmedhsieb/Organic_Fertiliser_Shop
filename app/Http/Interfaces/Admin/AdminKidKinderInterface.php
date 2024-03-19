<?php

namespace App\Http\Interfaces\Admin;

interface AdminKidKinderInterface
{
    public function getData();

    public function addData();

    public function storeData($request);

    public function editData();
    public function editSingleData($data);

    public function updateData($request);
    public function updateSingleData($request);

    public function deleteData($id);

    public function editSocial();
    public function editSocialData($id);

    public function updateSocialData($request);
}
