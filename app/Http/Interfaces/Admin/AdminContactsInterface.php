<?php

namespace App\Http\Interfaces\Admin;

interface AdminContactsInterface
{
    public function getContact();

    public function deleteContact($id);
}
