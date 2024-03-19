<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminTeachersInterface;
use Illuminate\Http\Request;

class AdminTeachersController extends Controller
{
    public $AdminTeachersInterface;

    public function __construct(AdminTeachersInterface $AdminTeachersInterface)
    {
        $this->AdminTeachersInterface = $AdminTeachersInterface;
    }

    public function getTeacher()
    {
        return $this->AdminTeachersInterface->getTeacher();
    }

    public function addTeacher()
    {
        return $this->AdminTeachersInterface->addTeacher();
    }

    public function storeTeacher(Request $request)
    {
        return $this->AdminTeachersInterface->storeTeacher($request);
    }

    public function editTeacher($id)
    {
        return $this->AdminTeachersInterface->editTeacher($id);
    }

    public function updateTeacher(Request $request)
    {
        return $this->AdminTeachersInterface->updateTeacher($request);
    }

    public function deleteTeacher($id)
    {
        return $this->AdminTeachersInterface->deleteTeacher($id);
    }
}
