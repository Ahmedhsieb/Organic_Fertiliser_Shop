<?php

namespace App\Http\Interfaces\Admin;

interface AdminProfileInterface
{
    public function getProfile();

    public function updateProfile($request);

    public function deleteProfile();

}
