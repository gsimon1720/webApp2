@extends('frontend.layouts.master')

@section('content')
<section class="bg-white dark:bg-gray-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">Upcoming Events</h2>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">Don't miss out on our exciting events!</p>
    </div>

    <div class="relative mt-10">
        <div class="glider-container px-4">
            <div class="glider">
                @foreach ($events as $event)
                <div class="event-card bg-white dark:bg-gray-800 rounded-2xl shadow-md p-5 mx-3 max-w-sm">
                    
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

            <!-- Navigation Arrows -->
            <button class="glider-prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full p-2 shadow-md z-10">
                &#8592;
            </button>
            <button class="glider-next absolute right-2 top-1/2 transform -translate-y-1/2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-full p-2 shadow-md z-10">
                &#8594;
            </button>
        </div>
        <div class="glider-dots mt-6 text-center"></div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script>
    new Glider(document.querySelector('.glider'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: true,
        dots: '.glider-dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [
            {
                breakpoint: 1024,
                settings: { slidesToShow: 3 }
            },
            {
                breakpoint: 768,
                settings: { slidesToShow: 2 }
            },
            {
                breakpoint: 640,
                settings: { slidesToShow: 1 }
            }
        ]
    });
</script>
@endpush
