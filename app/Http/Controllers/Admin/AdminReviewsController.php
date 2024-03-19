<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminReviewsInterface;
use Illuminate\Http\Request;

class AdminReviewsController extends Controller
{
    public $AdminReviewsInterface;

    public function __construct(AdminReviewsInterface $AdminReviewsInterface)
    {
        $this->AdminReviewsInterface = $AdminReviewsInterface;
    }

    public function getReview()
    {
        return $this->AdminReviewsInterface->getReview();
    }

    public function deleteReview($id)
    {
        return $this->AdminReviewsInterface->deleteReview($id);
    }
}
