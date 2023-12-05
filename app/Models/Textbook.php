<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'post_id',
        'name',
        'price',
        'exchange',
        'condition',
        'supplementaly_information',
        'department_id',
    ];
}
