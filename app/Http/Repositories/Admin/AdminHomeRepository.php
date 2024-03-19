<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminHomeInterface;

class AdminHomeRepository implements AdminHomeInterface
{

    public function home()
    {
        return view('admin.index');
    }
}
