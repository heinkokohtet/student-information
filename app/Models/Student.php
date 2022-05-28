<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    protected $fillable = ['name', 'dob','nrc','email','courses'];

    protected $casts = [
        'courses' => 'array',
        
        // ...
    ];
    
    
}
