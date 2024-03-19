<?php

namespace App\Http\Interfaces\Admin;

interface AdminTeachersInterface
{
    public function getTeacher();

    public function addTeacher();

    public function storeTeacher($request);

    public function editTeacher($id);

    public function updateTeacher($request);

    public function deleteTeacher($id);
}
