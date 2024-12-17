<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index() 
    { 
        $activity = Activity::get();
        // dd($activity);
        return view('admin.activities', ['activity' => $activity]);
    } 
 
    public function create() 
    { 
        return view('admin.form_activities', [ 
            'title' => 'Add', 
            'activity' => new Activity(),
            'route' => route('activities.store'), 
            'method' => 'POST',
        ]);
    } 

    public function store(Request $request) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        Activity::create($validated);
        return redirect()->route('Activity')->with('success', 'Activity berhasil ditambahkan'); 
    } 
 
    public function show(Activity $activity) 
    { 
        return view('activities.show', compact('activity')); 
    } 
 
    public function edit(Activity $activity) 
    { 
        return view('admin.form_activities', [ 
            'title' => 'Edit', 
            'activity' => $activity, 
            'route' => route('activities.update', $activity), 
            'method' => 'PUT', 
        ]); 
    }

    public function update(Request $request, Activity $activity) 
    { 
        $validated = $request->validate([ 
            'name' => 'required|string',
            'description' => 'required|string',
        ]); 
 
        $activity->update($validated); 
        return redirect()->route('Activity')->with('success', 'Activity berhasil diperbarui'); 
    } 

    public function destroy(Activity $activity) 
    { 
        $activity->delete(); 
        return redirect()->route('Activity')->with('success', 'Activity berhasil dihapus');
    } 
}
