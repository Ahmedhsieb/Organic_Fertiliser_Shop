<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminCoursesInterface;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    public $AdminCoursesInterface;

    public function __construct(AdminCoursesInterface $AdminCoursesInterface)
    {
        $this->AdminCoursesInterface = $AdminCoursesInterface;
    }

    public function getCourse()
    {
        return $this->AdminCoursesInterface->getCourse();
    }

    public function addCourse()
    {
        return $this->AdminCoursesInterface->addCourse();
    }

    public function storeCourse(Request $request)
    {
        return $this->AdminCoursesInterface->storeCourse($request);
    }

    public function editCourse($id)
    {
        return $this->AdminCoursesInterface->editCourse($id);
    }

    public function updateCourse(Request $request)
    {
        return $this->AdminCoursesInterface->updateCourse($request);
    }

    public function deleteCourse($id)
    {
        return $this->AdminCoursesInterface->deleteCourse($id);
    }
}
