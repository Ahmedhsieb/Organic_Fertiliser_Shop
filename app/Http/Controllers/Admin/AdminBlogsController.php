<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminBlogsInterface;
use Illuminate\Http\Request;

class AdminBlogsController extends Controller
{
    public $AdminBlogsInterface;

    public function __construct(AdminBlogsInterface $AdminBlogsInterface)
    {
        $this->AdminBlogsInterface = $AdminBlogsInterface;
    }

    public function getBlog()
    {
        return $this->AdminBlogsInterface->getBlog();
    }

    public function viewBlog($id)
    {
        return $this->AdminBlogsInterface->viewBlog($id);
    }

    public function addBlog()
    {
        return $this->AdminBlogsInterface->addBlog();
    }

    public function storeBlog(Request $request)
    {
        return $this->AdminBlogsInterface->storeBlog($request);
    }

    public function editBlog($id)
    {
        return $this->AdminBlogsInterface->editBlog($id);
    }

    public function updateBlog(Request $request)
    {
        return $this->AdminBlogsInterface->updateBlog($request);
    }

    public function deleteBlog($id)
    {
        return $this->AdminBlogsInterface->deleteBlog($id);
    }
}
