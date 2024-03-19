<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facility extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'desc',
        'icon'
    ];

    public function getIconAttribute($value)
    {
        return 'Images/admin/facilities/'.$value;
    }
}
