<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Announcements;
use App\Models\Courses;
use App\Models\Events;
use App\Models\Instructors;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses = Courses::all();
        $instractors = Instructors::all();
        $announcements = Announcements::latest()->get();
        $events = Events::latest()->get();
        return view('user.home.home', compact('courses', 'instractors','announcements','events'));
    }
    public function course_single_($id){
        $courses = Courses::find($id);
        //dd($courses);
        return view('user.courses.single-corsue',compact('courses'));
    }

    public function teacher_single($id){
        $instractors =Instructors::find($id);
     
        return view('user.teacher.teacher-single',compact('instractors'));
    }
        
    }
