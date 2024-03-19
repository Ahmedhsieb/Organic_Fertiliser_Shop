<?php

namespace App\Http\Interfaces\Admin;

interface AdminBlogsInterface
{
    public function getBlog();

    public function viewBlog($id);

    public function addBlog();

    public function storeBlog($request);

    public function editBlog($id);

    public function updateBlog($request);

    public function deleteBlog($id);
}
