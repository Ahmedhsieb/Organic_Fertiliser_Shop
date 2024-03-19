<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kidkinder extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'address',
        'desc',
        'open_hours',
        'open_days',
        'email',
        'phone'
    ];


    public function getImgAttribute($value)
    {
        return 'Images/admin/Home/'.$value;
    }
}
