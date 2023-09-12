<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $events = Events::all();
       return view('admin.events.all', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Events $events)
    {
        $requestData = $request->except('image');
        $image = $request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('eventimage'), $imagename);
            $requestData['image'] = $imagename;
        }
        $events->create($requestData);
        return redirect('events')->with('success',"Events created successfully");
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
      $events = Events::find($id);
      return view('admin.events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $events = Events::find($id);
        $requestData = $request->except('image');
        $image = $request->file('image');
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('eventimage'), $imagename);
            $requestData['image'] = $imagename;
        }
        $events->update($requestData);
        return redirect('events')->with('success',"Events created successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $events= Events::find($id);
        $events->delete($id);
        return redirect('events')->with('error',"Events deleted successfully");
    }
}
