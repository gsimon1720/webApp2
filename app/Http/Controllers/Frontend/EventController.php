<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->take(6)->get();
        return view('frontend.events', compact('events'));
    }

    public function show(Event $event)
{
    return view('frontend.events.show', compact('event'));
}

}
