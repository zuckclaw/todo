<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // sama seperti fetch all mysli assoc
        $activities = Activity::all();
        $activities = $activities->sortBy('created_at');

        // lakukan compact
        return view('home', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $name = $request->name;
        // $description = $request->description;
        // $when = $request->when;

        // Activity::create([
        //     'name' => $name,
        //     'description' => $description,
        //     'when' => $when,
        // ]);

        Activity::create([
            'name' => $request->name,
            'description' => $request->description,
            'when' => $request->when,
        ]);

        return redirect()->back()->with('status', 'Activity created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        //
    }

    public function toggleCheck($id) {
        $activity = Activity::find($id);

        if ($activity->status == 'pending') {
            $activity->update(['status' => 'completed']);
        }
        else {
            $activity->update(['status' => 'pending']);
        }

        return redirect()->back();
    }
}
