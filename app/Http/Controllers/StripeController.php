<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Models\Ticket;

class StripeController extends Controller
{
    public function checkout(Request $request, $eventId)
    {
        $event = Event::findOrFail($eventId);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'lkr',
                    'product_data' => [
                        'name' => $event->title,
                    ],
                    'unit_amount' => $event->price * 100, // amount in cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('stripe.success', ['eventId' => $event->id]),
            'cancel_url' => route('events.show', $event->id),
        ]);

        return redirect($session->url);
    }

    public function success($eventId)
    {
        // Create a new ticket (simulated after payment)
        $ticket = Ticket::create([
            'user_id' => Auth::id(),
            'event_id' => $eventId,
            'payment_status' => 'paid',
            'ticket_code' => uniqid('TICKET_'),
        ]);

        return redirect()->route('customer.dashboard')->with('success', 'Payment successful! Ticket booked.');
    }
}