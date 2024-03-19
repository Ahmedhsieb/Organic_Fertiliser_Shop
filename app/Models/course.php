<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img',
        'kids_age',
        'seats_num',
        'time',
        'desc',
        'price'
    ];

    public function getImgAttribute($value)
    {
        return 'Images/admin/courses/'.$value;
    }
}
