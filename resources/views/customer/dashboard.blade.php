@extends('layouts.app') <!-- or your customer layout -->

@section('content')
<div class="container mx-auto p-6 text-white">
    <h1 class="text-3xl font-bold mb-6">Your Purchased Tickets</h1>

    @if($tickets->isEmpty())
        <p>You haven’t purchased any tickets yet.</p>
    @else
        <div class="grid gap-4 md:grid-cols-2">
            @foreach($tickets as $ticket)
                <div class="bg-gray-800 rounded-lg p-4 shadow-md">
                    <h2 class="text-xl font-semibold">{{ $ticket->event->title }}</h2>
                    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($ticket->event->date)->format('F j, Y') }}</p>
                    <p><strong>Location:</strong> {{ $ticket->event->location }}</p>
                    <p><strong>Status:</strong> {{ ucfirst($ticket->payment_status) }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
