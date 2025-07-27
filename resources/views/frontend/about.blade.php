@extends('frontend.layouts.master')
@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Our Story Section -->
        <section class="mb-20">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c" 
                         alt="Our team working" 
                         class="w-full rounded-xl shadow-lg">
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl mb-6">
                        Our Story
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Founded in 2020 during the global shift to virtual experiences, Eventify started as a simple idea between three friends who missed attending live events.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        What began as a side project quickly grew into a platform serving thousands of event organizers and attendees worldwide, thanks to our relentless focus on user experience and technological innovation.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center bg-purple-100 dark:bg-purple-900 px-4 py-2 rounded-full">
                            <i class="fas fa-calendar-check text-purple-600 dark:text-purple-400 mr-2"></i>
                            <span class="text-sm font-medium">10,000+ Events</span>
                        </div>
                        <div class="flex items-center bg-purple-100 dark:bg-purple-900 px-4 py-2 rounded-full">
                            <i class="fas fa-globe text-purple-600 dark:text-purple-400 mr-2"></i>
                            <span class="text-sm font-medium">50+ Countries</span>
                        </div>
                        <div class="flex items-center bg-purple-100 dark:bg-purple-900 px-4 py-2 rounded-full">
                            <i class="fas fa-users text-purple-600 dark:text-purple-400 mr-2"></i>
                            <span class="text-sm font-medium">1M+ Attendees</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Mission -->
        <section class="mb-20 bg-gray-100 dark:bg-gray-800 p-12 rounded-2xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl" data-aos="fade-up">
                    Our Mission
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4" data-aos="fade-up" data-aos-delay="100">
                    To revolutionize how people discover and experience virtual events
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-bullseye text-2xl text-purple-600 dark:text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center text-gray-900 dark:text-white mb-3">Our Purpose</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        We exist to break down barriers and make virtual events accessible to everyone, everywhere.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-eye text-2xl text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center text-gray-900 dark:text-white mb-3">Our Vision</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        A world where distance never prevents people from connecting through shared experiences.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-hand-holding-heart text-2xl text-green-600 dark:text-green-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center text-gray-900 dark:text-white mb-3">Our Values</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        Innovation, inclusivity, and integrity guide everything we do.
                    </p>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl" data-aos="fade-up">
                    Meet The Team
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4" data-aos="fade-up" data-aos-delay="100">
                    The passionate people behind Eventify
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 team-card" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" 
                         alt="Sarah Johnson" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Sarah Johnson</h3>
                        <p class="text-purple-600 dark:text-purple-400 mb-2">CEO & Co-Founder</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Visionary leader with 15+ years in event technology and management.
                        </p>
                        <div class="flex mt-4 space-x-3">
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 team-card" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                         alt="Michael Chen" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Michael Chen</h3>
                        <p class="text-purple-600 dark:text-purple-400 mb-2">CTO & Co-Founder</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Tech innovator and systems architect passionate about scalable solutions.
                        </p>
                        <div class="flex mt-4 space-x-3">
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 team-card" data-aos="zoom-in" data-aos-delay="400">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" 
                         alt="Emma Rodriguez" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg">Emma Rodriguez</h3>
                        <p class="text-purple-600 dark:text-purple-400 mb-2">Head of Product</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            User experience specialist focused on intuitive design and workflows.
                        </p>
                        <div class="flex mt-4 space-x-3">
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 team-card" data-aos="zoom-in" data-aos-delay="500">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                         alt="David Kim" 
                         class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-lg">David Kim</h3>
                        <p class="text-purple-600 dark:text-purple-400 mb-2">Marketing Director</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Brand strategist and growth hacker with a data-driven approach.
                        </p>
                        <div class="flex mt-4 space-x-3">
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-purple-600 dark:hover:text-purple-400">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection