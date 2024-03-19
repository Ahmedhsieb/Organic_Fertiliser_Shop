<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminContactsInterface;
use Illuminate\Http\Request;

class AdminContactsController extends Controller
{
    public $AdminContactsInterface;

    public function __construct(AdminContactsInterface $AdminContactsInterface)
    {
        $this->AdminContactsInterface = $AdminContactsInterface;
    }

    public function getContact()
    {
        return $this->AdminContactsInterface->getContact();
    }

    public function deleteContact($id)
    {
        return $this->AdminContactsInterface->deleteContact($id);
    }
}
