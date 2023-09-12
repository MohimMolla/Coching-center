<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Instructors;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses = Courses::all();
        $instractors = Instructors::all();
        return view('user.home.home', compact('courses', 'instractors'));
    }
}
