<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Instructors;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::all();
        $instructors = Instructors::all();
        return view('admin.course.all', compact('courses', 'instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructors = Instructors::all();
        return view('admin.course.create', compact('instructors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Courses $courses)
    {
        $instructorId = $request->input('instructor_id');
        $requestData = $request->except('image');
        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('courseimage'), $imagename);
            $requestData['image'] = $imagename;
        }

        $requestData['instructor_id'] = $instructorId;
        $courses->create($requestData);

        return redirect('courses')->with('success', 'Coruses created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $instructors = Instructors::all();
        $courses = Courses::find($id);
        return view('admin.course.edit', compact('courses','instructors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses = Courses::find($id);
        $instructorId = $request->input('instructor_id');

        $requestData = $request->except('image');
        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('courseimage'), $imagename);
            $requestData['image'] = $imagename;
        }
        $requestData['instructor_id'] = $instructorId;
        $courses->update($requestData);
        return redirect('courses')->with('warning', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = Courses::find($id);
        $courses->delete();
        return redirect('courses')->with('error', 'Courses deleted successfully');
    }
}
