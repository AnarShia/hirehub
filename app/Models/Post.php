<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'salary',
        'duration',
        'description',
    ];

    

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
   

}

