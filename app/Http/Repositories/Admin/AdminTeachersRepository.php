<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminTeachersInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\course;
use App\Models\teacher;
use Illuminate\Support\Facades\Validator;

class AdminTeachersRepository implements AdminTeachersInterface
{

    use ImagesTrait;

    public function getTeacher()
    {
        $teachers = teacher::with('courses')->get();
        return view('admin.dashboard.teacher.teacher', compact('teachers'));
    }

    public function addTeacher()
    {
        $courses = course::get();

        return view('admin.dashboard.teacher.add', compact('courses'));
    }

    public function storeTeacher($request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'specialist' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'facebook' => 'required',
            'course' => 'required|exists:courses,id',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
          return redirect()->back();
        }


        $fileName =  time() . '_teacher.'.$request->img->extension();
        $this->uploadImage($request->img, $fileName, 'teachers');


        teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'specialist' => $request->specialist,
            'course_id' => $request->course,
            'twitter' => addslashes($request->twitter),
            'linkedin' => addslashes($request->linkedin),
            'facebook' => addslashes($request->facebook),
            'img' => $fileName,
        ]);

        session()->flash('done', 'Teacher Created Successfully!');

        return redirect(route('admin.teacher.teacher'));
    }

    public function editTeacher($id)
    {
        $courses = course::get();
        $teacher = teacher::find($id);
//        dd('..');
        return view('admin.dashboard.teacher.edit', compact('teacher', 'courses'));
    }

    public function updateTeacher($request)
    {

        $validation = Validator::make($request->all(), [
            'id' => 'exists:teachers,id',
            'name' => 'required',
            'email' => 'required',
            'specialist' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'facebook' => 'required',
            'course' => 'required|exists:courses,id',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $teacher = teacher::find($request->id);

        if (!is_null($request->img)){
            $fileName =  time() . '_teacher.'.$request->img->extension();
            $this->uploadImage($request->img, $fileName, 'teachers', $teacher->img);
        }

        //$teacher->img  ==>  Images/admin/teachers/1696201379_teacher.png we need to explode it
        $oldFileName = explode('/', $teacher->img);
        $oldFileName = $oldFileName[3];

        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'specialist' => $request->specialist,
            'course_id' => $request->course,
            'twitter' => addslashes($request->twitter),
            'linkedin' => addslashes($request->linkedin),
            'facebook' => addslashes($request->facebook),
            'img' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        session()->flash('done', 'Teacher Updated Successfully!');

        return redirect(route('admin.teacher.teacher'));
    }

    public function deleteTeacher($id)
    {
        $teacher =teacher::find($id);
        unlink(public_path($teacher->img));
        $teacher->delete();
        session()->flash('done', 'Teacher deleted Successfully!');
        return redirect()->back();
    }
}
