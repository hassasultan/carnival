<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display a listing of the events.
    public function index()
    {
        $events = Event::with('package', 'category')->get();
        return view('events.index', compact('events'));
    }

    // Show the form for creating a new event.
    public function create()
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('events.create', compact('packages', 'categories'));
    }

    // Store a newly created event in the database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive', // Adjust options as needed
            // Add validation rules for other fields here
        ]);

        $event = new Event();
        $event->fill($request->all());
        $event->save();

        return redirect()->route('events.index')
                        ->with('success', 'Event created successfully.');
    }

    // Show the form for editing the specified event.
    public function edit(Event $event)
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('events.edit', compact('event', 'packages', 'categories'));
    }

    // Update the specified event in the database.
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive', // Adjust options as needed
            // Add validation rules for other fields here
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')
                        ->with('success', 'Event updated successfully.');
    }

    // Remove the specified event from the database.
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')
                         ->with('success', 'Event deleted successfully.');
    }
}
