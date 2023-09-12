<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructors extends Model
{
    use HasFactory;
    protected $fillable = [
        
        
        'name',
        'designation',
        'bio',
        'image',
        'qualifications',
       
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function courses(){
        return $this->hasMany(Courses::class);
    }
}


