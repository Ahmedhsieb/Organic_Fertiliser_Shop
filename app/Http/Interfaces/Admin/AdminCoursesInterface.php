<?php

namespace App\Http\Interfaces\Admin;

interface AdminCoursesInterface
{
    public function getCourse();

    public function addCourse();

    public function storeCourse($request);

    public function editCourse($id);

    public function updateCourse($request);

    public function deleteCourse($id);
}
