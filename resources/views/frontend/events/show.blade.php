@extends('frontend.layouts.master')

@section('content')
<section class="py-12 bg-white dark:bg-gray-900">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
            @if($event->image)
                <img src="{{ asset('storage/events/' . $event->image) }}" alt="{{ $event->title }}"
                     class="w-full h-64 object-cover rounded-lg mb-6">
            @endif

            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ $event->title }}</h2>
            <div class="text-gray-600 dark:text-gray-300 mb-4">{{ $event->description }}</div>

            <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">📅 Date: {{ $event->date }}</p>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">📍 Location: {{ $event->location }}</p>
            <p class="text-sm text-green-600 dark:text-green-400 font-semibold mb-4">💵 Price: Rs. {{ number_format($event->price, 2) }}</p>

            <a href="#" class="inline-block px-5 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg transition">Buy Ticket</a>
        </div>
    </div>
</section>
@endsection
