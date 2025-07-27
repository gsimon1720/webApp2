@extends('frontend.layouts.master')

@section('content')

    <!-- Hero Section -->
    <section class="relative min-h-[400px] overflow-hidden">
        @include('frontend.Home.slider')
    </section>

    <!-- Featured Events -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl" data-aos="fade-up">
                    Featured Events
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4" data-aos="fade-up" data-aos-delay="100">
                    Check out these upcoming virtual experiences
                </p>
            </div>

            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Event Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition duration-500 event-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Concert event">
                        <div class="absolute top-0 right-0 bg-purple-600 text-white px-2 py-1 m-2 rounded-md text-xs font-semibold">
                            Virtual Concert
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="text-xs font-medium text-purple-600 bg-purple-100 dark:bg-purple-900 px-2 py-1 rounded-full">Jun 25</span>
                            </div>
                            <div class="ml-2 text-xs text-gray-500 dark:text-gray-400">8:00 PM EST</div>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Global Music Festival</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">Join artists from around the world in this 24-hour music marathon.</p>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">$29.99</span>
                            <button class="text-sm bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md transition duration-300 glow">
                                Get Tickets
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition duration-500 event-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Tech conference">
                        <div class="absolute top-0 right-0 bg-blue-600 text-white px-2 py-1 m-2 rounded-md text-xs font-semibold">
                            Tech Conference
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="text-xs font-medium text-blue-600 bg-blue-100 dark:bg-blue-900 px-2 py-1 rounded-full">Jul 12-14</span>
                            </div>
                            <div class="ml-2 text-xs text-gray-500 dark:text-gray-400">10:00 AM EST</div>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Future Tech Summit</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">Learn from industry leaders about AI, blockchain and emerging technologies.</p>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">$99.00</span>
                            <button class="text-sm bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition duration-300 glow">
                                Get Tickets
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition duration-500 event-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="relative">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Workshop">
                        <div class="absolute top-0 right-0 bg-green-600 text-white px-2 py-1 m-2 rounded-md text-xs font-semibold">
                            Workshop
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="text-xs font-medium text-green-600 bg-green-100 dark:bg-green-900 px-2 py-1 rounded-full">Jul 5</span>
                            </div>
                            <div class="ml-2 text-xs text-gray-500 dark:text-gray-400">2:00 PM EST</div>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Digital Marketing Masterclass</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">Transform your marketing strategy with actionable insights from experts.</p>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">$49.99</span>
                            <button class="text-sm bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md transition duration-300 glow">
                                Get Tickets
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="inline-flex items-center px-8 py-3 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-purple-600 hover:bg-purple-700 transition duration-300 transform hover:scale-105 glow">
                    View All Events
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl" data-aos="fade-up">
                    Why Choose Eventify?
                </h2>
                <p class="mt-3 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Everything you need to discover and attend amazing virtual events
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                    <!-- Feature 1 -->
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-right" data-aos-delay="200">
                        <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-globe text-2xl text-purple-600 dark:text-purple-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Global Reach</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Connect with events from around the world without geographical limitations.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-left" data-aos-delay="200">
                        <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-ticket-alt text-2xl text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Easy Ticketing</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Seamless ticket purchasing with secure payment processing.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-right" data-aos-delay="300">
                        <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-calendar-check text-2xl text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Personalized Calendar</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Keep track of all your events with our integrated calendar system.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-left" data-aos-delay="300">
                        <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-bell text-2xl text-yellow-600 dark:text-yellow-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Event Reminders</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Never miss an event with our timely notifications and reminders.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-purple-700 dark:bg-purple-800">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl" data-aos="fade-up">
                <span class="block">Ready to join amazing events?</span>
                <span class="block text-purple-200 dark:text-purple-300">Get started today.</span>
            </h2>
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="/register" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-lg font-medium rounded-md text-purple-700 bg-white hover:bg-gray-50 transition duration-300 transform hover:scale-105">
                    Sign Up Now
                </a>
                <a href="#" class="inline-flex items-center justify-center px-8 py-3 border border-white text-lg font-medium rounded-md text-white bg-purple-600 bg-opacity-60 hover:bg-opacity-70 transition duration-300 transform hover:scale-105">
                    Browse Events
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl" data-aos="fade-up">
                    What Our Users Say
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                @foreach($testimonials as $testimonial)
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-6">
                        <img class="h-20 w-20 rounded-full" src="{{ $testimonial->photo_url }}" alt="{{ $testimonial->name }}">
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $testimonial->name }}</h4>
                            <p class="text-purple-600 dark:text-purple-400">{{ $testimonial->role }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 italic mb-6">"{{ $testimonial->message }}"</p>
                    <div class="flex text-yellow-400">
                        @for ($i = 1; $i <= floor($testimonial->rating); $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        @if ($testimonial->rating - floor($testimonial->rating) >= 0.5)
                            <i class="fas fa-star-half-alt"></i>
                        @endif
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection