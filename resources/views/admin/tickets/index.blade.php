@extends('admin.layouts.master')

@section('content')
<div class="container mx-auto px-4 py-6">

    <h2 class="text-2xl font-semibold text-white mb-6">All Purchased Tickets</h2>

    <table class="min-w-full text-sm text-gray-200 bg-dark-800 border border-dark-600">
        <thead class="bg-dark-700 text-gray-100">
            <tr>
                <th class="px-4 py-2">Ticket Code</th>
                <th class="px-4 py-2">Customer</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Event</th>
                <th class="px-4 py-2">Payment Status</th>
                <th class="px-4 py-2">Purchased At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tickets as $ticket)
                <tr class="border-b border-dark-600 hover:bg-dark-700">
                       <td class="px-4 py-2">{{ $ticket->ticket_code }}</td>
                        <td class="px-4 py-2">{{ $ticket->user->name ?? '—' }}</td> <!-- Customer name -->
                        <td class="px-4 py-2">{{ $ticket->user->email ?? '—' }}</td>
                        <td class="px-4 py-2">{{ $ticket->event->title ?? '—' }}</td> <!-- Event title -->
                    <td class="px-4 py-2">
                        @if(strtolower($ticket->payment_status) === 'paid')
                            <span class="px-2 inline-flex text-xs font-semibold rounded-full bg-green-600 text-white">
                                Paid
                            </span>
                        @else
                            <span class="px-2 inline-flex text-xs font-semibold rounded-full bg-red-600 text-white">
                                Unpaid
                            </span>
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $ticket->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-2 text-center text-gray-400">No tickets found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $tickets->links() }}
    </div>

</div>
@endsection
