<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminReviewsInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\review;
use Illuminate\Support\Facades\Validator;

class AdminReviewsRepository implements AdminReviewsInterface
{

    public function getReview()
    {
        $reviews = review::get();
        return view('admin.dashboard.review.review', compact('reviews'));
    }

    public function deleteReview($id)
    {
        $review =review::find($id);
        $review->delete();
        session()->flash('done', 'Review deleted Successfully!');
        return redirect()->back();
    }
}
