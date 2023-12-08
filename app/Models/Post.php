<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'class_name',
        'teacher',
        'term',
        'method',
        'evaluation',
        'fulfillment',
        'obtaining_unit_ease',
        'textbook_presence',
        'supplementaly_information',
    ];
}
