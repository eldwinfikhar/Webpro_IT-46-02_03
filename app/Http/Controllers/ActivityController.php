<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'nullable|image', // Hapus validasi rasio
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'activities/' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Proses gambar ke rasio 4:3
            $img = Image::make($image);
            $img->fit(800, 600); // Ubah angka sesuai kebutuhan
            Storage::disk('public')->put($imageName, $img->encode());

            $validated['image'] = $imageName;
        }

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
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($activity->image) {
                Storage::delete('public/' . $activity->image);
            }

            $image = $request->file('image');
            $imageName = 'activities/' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Proses gambar ke rasio 4:3
            $img = Image::make($image);
            $img->fit(800, 600);
            Storage::disk('public')->put($imageName, $img->encode());

            $validated['image'] = $imageName;
        }

        $activity->update($validated);
        return redirect()->route('Activity')->with('success', 'Activity berhasil diperbarui');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('Activity')->with('success', 'Activity berhasil dihapus');
    }

    public function listAct()
    {
        $activity = Activity::all();
        return view('layout.gallery', ['activity' => $activity]);
    }
}
