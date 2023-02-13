<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'lastname', 'firstname', 'address', 'year', 'course'
    ];

    public $timestamps = true;
}
