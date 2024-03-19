<?php

namespace App\Http\Interfaces\Admin;

interface AdminReviewsInterface
{
    public function getReview();

    public function deleteReview($id);
}
