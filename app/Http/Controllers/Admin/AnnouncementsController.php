<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcements;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcements::all();
        return view('admin.announcements.all', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Announcements $announcements)
    {
        $requestData = $request->except('image');
        $image = $request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('announcementsimage'), $imagename);
            $requestData['image'] = $imagename;
        }
        $announcements->create($requestData);
        return redirect('announcements')->with('success',"Announcements created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $announcements = Announcements::find($id);
        return view('admin.announcements.edit',compact('announcements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $announcements = Announcements::find($id);
        $requestData = $request->except('image');
        $image = $request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('announcementsimage'), $imagename);
            $requestData['image'] = $imagename;
        }
        $announcements->update($requestData);
        return redirect('announcements')->with('warning',"Announcements Update successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
