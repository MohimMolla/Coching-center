<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'instructor_id',
        'title',
        'description',
        'image',
        'price',
        'start_date',
        'end_date',
    ];
    public function instructor(){
        return $this->belongsTo(Instructors::class,);
    }
}
