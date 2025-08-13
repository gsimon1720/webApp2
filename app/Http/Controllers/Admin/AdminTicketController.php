<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function index(Request $request)
    {
        // Load user & event; show newest first; paginate
        $tickets = Ticket::with(['user:id,name,email', 'event:id,title'])
            // ->where('payment_status', 'paid') // <-- uncomment if you only want paid
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.tickets.index', compact('tickets'));
    }
}
