<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\course;
use App\Models\facility;
use App\Models\kidkinder;
use App\Models\review;
use App\Models\social;
use App\Models\teacher;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function home()
    {
        $blogs = blog::with('user')->get();
        $courses = course::get();
        $facilities = facility::get();
        $kidkinder = kidkinder::first();
        $socials = social::get();
        $teachers = teacher::get();
        $reviews = review::get();


//        dd("");

        return view(
            'user.index',
            compact('blogs', 'courses', 'facilities', 'kidkinder', 'socials', 'teachers', 'reviews')
        );

    }
}
