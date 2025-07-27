<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
        ]);

        // Optional: check if user already has a ticket for the event
        $existing = Ticket::where('user_id', Auth::id())
                          ->where('event_id', $request->event_id)
                          ->first();

        if ($existing) {
            return redirect()->back()->with('error', 'You already have a ticket for this event.');
        }

        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'event_id' => $request->event_id,
            'payment_status' => 'paid', // Or keep it 'pending'
            'ticket_code' => strtoupper(Str::random(10)),
        ]);

        return redirect()->route('customer.dashboard')->with('success', 'Ticket purchased successfully!');
    }
}
