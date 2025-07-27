<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Display all events
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    // Show the form to create a new event
    public function create()
    {
        return view('admin.events.create');
    }

    // Store a newly created event
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->price = $request->price;


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/events', $imageName);
            $event->image = $imageName;
        }

        $event->save();

        return redirect()->route('manage-events.index')->with('success', 'Event created successfully!');
    }

    // Show the edit form
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Update the event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
         $event->location = $request->location;
        $event->price = $request->price;


        if ($request->hasFile('image')) {
            // Delete old image
            if ($event->image && Storage::exists('public/events/' . $event->image)) {
                Storage::delete('public/events/' . $event->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/events', $imageName);
            $event->image = $imageName;
        }

        $event->save();

        return redirect()->route('manage-events.index')->with('success', 'Event updated successfully!');
    }

    // Delete the event
    public function destroy(Event $event)
    {
        // Delete image from storage
        if ($event->image && Storage::exists('public/events/' . $event->image)) {
            Storage::delete('public/events/' . $event->image);
        }

        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }
}
