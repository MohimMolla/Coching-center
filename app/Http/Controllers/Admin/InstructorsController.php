<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Instructors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $instructors = Instructors::all();

      return view('admin.instructor.all',compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Instructors $instructors)
    {
       
      
        $requestData = $request->except('image');
        $image = $request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('instructimage'), $imagename);
            $requestData['image'] = $imagename;
        }

     
        $instructors->create($requestData);
        return redirect('instructors')->with('success', 'Successfully instructors created');
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
        $instructors = Instructors::find($id);
      
        return view('admin.instructor.edit',compact('instructors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instructors = Instructors::find($id);
      

        $requestData = $request->except('image');
        $image = $request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('instructimage'), $imagename);
            $requestData['image'] = $imagename;
        }
     
        $instructors->update($requestData);
        return redirect('instructors')->with('warning', 'Successfully instructors created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructors = Instructors::find($id);
        $instructors->delete();
        return redirect('instructors')->with('warning','Instructors information deleted successfully');
    }
}
