<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminBlogsInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\blog;
use Illuminate\Support\Facades\Validator;

class AdminBlogsRepository implements AdminBlogsInterface
{

    use ImagesTrait;

    public function getBlog()
    {
        $blogs = blog::with('user')->get();
        return view('admin.dashboard.blog.blog', compact('blogs'));
    }

    public function viewBlog($id)
    {
        $blog = blog::find($id);
        return view('admin.dashboard.blog.view', compact('blog'));
    }

    public function addBlog()
    {
        return view('admin.dashboard.blog.add');
    }

    public function storeBlog($request)
    {
//        dd($request->title);
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'short_desc' => 'required',
            'img' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
          return redirect()->back();
        }


        $fileName =  time() . '_blog.'.$request->img->extension();
        $this->uploadImage($request->img, $fileName, 'blogs');


        blog::create([
            'user_id' => $request->user_id,
            'title' => ucfirst($request->title),
            'short_desc' => ucfirst(addslashes($request->short_desc)),
            'desc' => ucfirst(addslashes($request->desc)),
            'img' => $fileName,
        ]);

        session()->flash('done', 'Blog Created Successfully!');

        return redirect(route('admin.blog.blog'));
    }

    public function editBlog($id)
    {
        $blog = blog::find($id);
//        dd('..');
        return view('admin.dashboard.blog.edit', compact('blog'));
    }

    public function updateBlog($request)
    {

        $validation = Validator::make($request->all(), [
            'id' => 'exists:users,id',
            'title' => 'required',
            'short_desc' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }

        $blog = blog::find($request->id);

        if (!is_null($request->img)){
            $fileName =  time() . '_blog.'.$request->img->extension();
            $this->uploadImage($request->img, $fileName, 'blogs', $blog->img);
        }

        //$blog->img  ==>  Images/admin/blogs/1696201379_blog.png we need to explode it
        $oldFileName = explode('/', $blog->img);
        $oldFileName = $oldFileName[3];

        $blog->update([
            'user_id' => $request->user_id,
            'title' => ucfirst($request->title),
            'short_desc' => ucfirst(addslashes($request->short_desc)),
            'desc' => ucfirst(addslashes($request->desc)),
            'img' => (isset($fileName)) ? $fileName : $oldFileName
        ]);

        session()->flash('done', 'Blog Updated Successfully!');

        return redirect(route('admin.blog.blog'));
    }

    public function deleteBlog($id)
    {
        $blog =blog::find($id);
        unlink(public_path($blog->img));
        $blog->delete();
        session()->flash('done', 'Blog deleted Successfully!');
        return redirect()->back();
    }
}
