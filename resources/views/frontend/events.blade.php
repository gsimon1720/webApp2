@extends('frontend.layouts.master')

@section('content')
<section class="bg-white dark:bg-gray-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Upcoming Events</h2>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">Don't miss out on our exciting events!</p>
    </div>
        <div class="mt-10 px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        @foreach ($events as $event)
            <div class="event-card bg-white dark:bg-gray-800 rounded-2xl shadow-md p-5">
                
                @if($event->image)
                    <img src="{{ asset('storage/events/' . $event->image) }}" alt="{{ $event->title }}"
                        class="w-full h-40 object-cover rounded-lg mb-4">
                @endif

                <h3 class="text-xl font-semibold text-purple-600 dark:text-purple-400 mb-2"> 
                    <a href="{{ route('events.show', $event->id) }}">
                        {{ $event->title }}
                    </a>
                </h3>

                <p class="text-sm text-gray-600 dark:text-gray-300 mb-2">
                    {{ \Illuminate\Support\Str::limit($event->description, 80) }}
                </p>

                <div class="text-sm text-gray-500 dark:text-gray-400 mb-1">
                    📍 {{ $event->location }}
                </div>

                <div class="text-sm text-gray-500 dark:text-gray-400 mb-1">
                    🗓️ {{ $event->date }}
                </div>

                <div class="text-sm font-semibold text-green-600 dark:text-green-400">
                    💵 Rs. {{ number_format($event->price, 2) }}
                </div>

                @auth
                    @if(auth()->user()->hasRole('customer'))
                        <a href="{{ route('stripe.checkout', $event->id) }}" 
                            class="inline-block mt-2 text-sm text-white bg-purple-600 hover:bg-purple-700 px-4 py-1.5 rounded-md">
                            Buy Ticket
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="inline-block mt-2 text-sm text-white bg-purple-600 hover:bg-purple-700 px-4 py-1.5 rounded-md">
                        Login to Buy Ticket
                    </a>
                @endauth

            </div>
        @endforeach
    </div>
</div>

   
</section>
@endsection

@push('scripts')

@endpush
