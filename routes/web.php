<?php

use App\Http\Controllers\Admin\AdminBlogsController;
use App\Http\Controllers\Admin\AdminContactsController;
use App\Http\Controllers\Admin\AdminCoursesController;
use App\Http\Controllers\Admin\AdminFacilitiesController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminKidKinderController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminReviewsController;
use App\Http\Controllers\Admin\AdminTeachersController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\User\UserHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserHomeController::class, 'home'])->name('home');

Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/postLogin', [AdminAuthController::class, 'postLogin'])->name('admin.post.login');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function (){
    Route::get('/', [AdminHomeController::class , 'home'])->name('home');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'facility', 'as' => 'facility.'], function (){
        Route::get('/', [AdminFacilitiesController::class, 'getFacilities'])->name('facility');
        Route::get('/add', [AdminFacilitiesController::class, 'addFacilities'])->name('add');
        Route::post('/store', [AdminFacilitiesController::class, 'storeFacilities'])->name('store');
        Route::get('/edit/{id}', [AdminFacilitiesController::class, 'editFacilities'])->name('edit');
        Route::post('/update', [AdminFacilitiesController::class, 'updateFacilities'])->name('update');
        Route::get('/delete/{id}', [AdminFacilitiesController::class, 'deleteFacilities'])->name('delete');
    });

    Route::group(['prefix' => 'course', 'as' => 'course.'], function (){
        Route::get('/', [AdminCoursesController::class, 'getCourse'])->name('course');
        Route::get('/add', [AdminCoursesController::class, 'addCourse'])->name('add');
        Route::post('/store', [AdminCoursesController::class, 'storeCourse'])->name('store');
        Route::get('/edit/{id}', [AdminCoursesController::class, 'editCourse'])->name('edit');
        Route::post('/update', [AdminCoursesController::class, 'updateCourse'])->name('update');
        Route::get('/delete/{id}', [AdminCoursesController::class, 'deleteCourse'])->name('delete');
    });

    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function (){
        Route::get('/', [AdminBlogsController::class, 'getBlog'])->name('blog');
        Route::get('/view/{id}', [AdminBlogsController::class, 'viewBlog'])->name('view.blog');
        Route::get('/add', [AdminBlogsController::class, 'addBlog'])->name('add');
        Route::post('/store', [AdminBlogsController::class, 'storeBlog'])->name('store');
        Route::get('/edit/{id}', [AdminBlogsController::class, 'editBlog'])->name('edit');
        Route::post('/update', [AdminBlogsController::class, 'updateBlog'])->name('update');
        Route::get('/delete/{id}', [AdminBlogsController::class, 'deleteBlog'])->name('delete');
    });

    Route::group(['prefix' => 'teacher', 'as' => 'teacher.'], function (){
        Route::get('/', [AdminTeachersController::class, 'getTeacher'])->name('teacher');
        Route::get('/add', [AdminTeachersController::class, 'addTeacher'])->name('add');
        Route::post('/store', [AdminTeachersController::class, 'storeTeacher'])->name('store');
        Route::get('/edit/{id}', [AdminTeachersController::class, 'editTeacher'])->name('edit');
        Route::post('/update', [AdminTeachersController::class, 'updateTeacher'])->name('update');
        Route::get('/delete/{id}', [AdminTeachersController::class, 'deleteTeacher'])->name('delete');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function (){
        Route::get('/', [AdminProfileController::class, 'getProfile'])->name('profile');
        Route::get('/edit', [AdminProfileController::class, 'editProfile'])->name('edit');
        Route::post('/update', [AdminProfileController::class, 'updateProfile'])->name('update');
        Route::get('/delete', [AdminProfileController::class, 'deleteProfile'])->name('delete');
    });

    Route::group(['prefix' => 'review', 'as' => 'review.'], function (){
        Route::get('/', [AdminReviewsController::class, 'getReview'])->name('review');
        Route::get('/delete/{id}', [AdminReviewsController::class, 'deleteReview'])->name('delete');
    });

    Route::group(['prefix' => 'contact_us', 'as' => 'contact_us.'], function (){
        Route::get('/', [AdminContactsController::class, 'getContact'])->name('contact_us');
        Route::get('/delete/{id}', [AdminContactsController::class, 'deleteContact'])->name('delete');
    });

    Route::group(['prefix' => 'kidkinder', 'as' => 'kidkinder.'], function (){
        Route::get('/', [AdminKidKinderController::class, 'getData'])->name('kidkinder');
        //add social media links
        Route::get('/add', [AdminKidKinderController::class, 'addData'])->name('add');
        //store social media links in database
        Route::post('/store', [AdminKidKinderController::class, 'storeData'])->name('store');
        //go to social media table
        Route::get('/editSocial', [AdminKidKinderController::class, 'editSocial'])->name('edit.social');
        //go to social media edit page
        Route::get('/editSocialData/{id}', [AdminKidKinderController::class, 'editSocialData'])->name('edit.social.data');
        //update social links data
        Route::post('/updateSocial', [AdminKidKinderController::class, 'updateSocialData'])->name('update.social');
        //go to edit kidkinder data page
        Route::get('/edit', [AdminKidKinderController::class, 'editData'])->name('edit');
        //go to edit kidkinder single data
        Route::get('/edit/{data}', [AdminKidKinderController::class, 'editSingleData'])->name('edit.single');
        //update kidkinder data
        Route::post('/update', [AdminKidKinderController::class, 'updateData'])->name('update');
        //update kidkinder single data
        Route::post('/updateSingle', [AdminKidKinderController::class, 'updateSingleData'])->name('update.single');
        //delete social link
        Route::get('/delete/{id}', [AdminKidKinderController::class, 'deleteData'])->name('delete');
    });
});
