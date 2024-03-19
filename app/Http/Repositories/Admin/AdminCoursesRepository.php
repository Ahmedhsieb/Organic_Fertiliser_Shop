<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminCoursesInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\course;
use Illuminate\Support\Facades\Validator;

class AdminCoursesRepository implements AdminCoursesInterface
{

    use ImagesTrait;

    public function getCourse()
    {
        $courses = course::get();
        return view('admin.dashboard.course.course', compact('courses'));
    }

    public function addCourse()
    {
        return view('admin.dashboard.course.add');
    }

    public function storeCourse($request)
    {
//        dd($request->title);
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'seats_num' => 'required',
            'time' => 'required',
            'price' => 'required',
            'kids_age' => 'required',
            'img' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
          return redirect()->back();
        }


        $fileName =  time() . '_course.'.$request->img->extension();
        $this->uploadImage($request->img, $fileName, 'courses');


        course::create([
            'title' => $request->title,
            'desc' => addslashes($request->desc),
            'seats_num' => $request->seats_num . " Seats",
            'time' => $request->time,
            'price' =>  $request->price,
            'kids_age' => $request->kids_age . " Years",
            'img' => $fileName,
        ]);

        session()->flash('done', 'Course Created Successfully!');

        return redirect(route('admin.course.course'));
    }

    public function editCourse($id)
    {
        $course = course::find($id);
//        dd('..');
        return view('admin.dashboard.course.edit', compact('course'));
    }

    public function updateCourse($request)
    {

        $validation = Validator::make($request->all(), [
            'id' => 'exists:courses,id',
            'title' => 'required',
            'desc' => 'required',
            'seats_num' => 'required',
            'time' => 'required',
            'price' => 'required',
            'kids_age' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $course = course::find($request->id);

        if (!is_null($request->img)){
            $fileName =  time() . '_course.'.$request->img->extension();
            $this->uploadImage($request->img, $fileName, 'courses', $course->img);
        }

        //$course->img  ==>  Images/admin/courses/1696201379_course.png we need to explode it
        $oldFileName = explode('/', $course->img);
        $oldFileName = $oldFileName[3];

        $course->update([
            'title' => $request->title,
            'desc' => addslashes($request->desc),
            'seats_num' => $request->seats_num . " Seats",
            'time' => $request->time,
            'price' =>  $request->price,
            'kids_age' => $request->kids_age . " Years",
            'img' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        session()->flash('done', 'Course Updated Successfully!');

        return redirect(route('admin.course.course'));
    }

    public function deleteCourse($id)
    {
        $course =course::find($id);
        unlink(public_path($course->img));
        $course->delete();
        session()->flash('done', 'Course deleted Successfully!');
        return redirect()->back();
    }
}
