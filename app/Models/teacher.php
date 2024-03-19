<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'name',
        'email',
        'specialist',
        'twitter',
        'linkedin',
        'facebook',
        'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(course::class, 'course_id', 'id');
    }

    public function getImgAttribute($value)
    {
        return 'Images/admin/teachers/'.$value;
    }
}
