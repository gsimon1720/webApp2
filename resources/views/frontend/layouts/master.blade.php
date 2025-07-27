<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventify | Virtual Event Ticketing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Glider CSS -->
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(90deg, #7e22ce, #a855f7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .glow {
            box-shadow: 0 0 15px rgba(126, 34, 206, 0.3);
        }
        .glow:hover {
            box-shadow: 0 0 20px rgba(126, 34, 206, 0.5);
        }
        .event-card:hover {
            transform: translateY(-5px);
        }
    </style>

</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-ticket-alt text-purple-600 dark:text-purple-400 text-2xl mr-2"></i>
                        <span class="text-xl font-bold gradient-text">{{$main_settings['site_name']}}</span>
                    </div>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
                    <a href="{{ route('frontend.home') }}" class="text-gray-900 dark:text-white hover:text-purple-600 dark:hover:text-purple-400 px-3 py-2 text-sm font-medium transition">Home</a>
                    <a href="{{ route('events.index') }}" class="text-gray-500 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 px-3 py-2 text-sm font-medium transition">Events</a>
                    
                    <a href="{{ route('about') }}" class="text-gray-500 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 px-3 py-2 text-sm font-medium transition">About</a>
                    <a href="{{ route('contact') }}" class="text-gray-500 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 px-3 py-2 text-sm font-medium transition">Contact</a>
                    <div class="flex space-x-4">
                        <a href="/login" class="text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 px-4 py-2 rounded-md text-sm font-medium transition duration-300 border border-purple-600 dark:border-purple-400">
                            Login
                        </a>
                        <a href="/register" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300 transform hover:scale-105 glow">
                            Sign Up
                        </a>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-4">Eventify</h3>
                    <p class="text-gray-300 text-sm">
                        The premier platform for virtual event ticketing.
                    </p>
                    <div class="mt-4 flex space-x-6">
                        <a href="{{$main_settings['facebook_link']}}" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{$main_settings['twitter_link']}}" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="{{$main_settings['instagram_link']}}" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{$main_settings['linkedin_link']}}" class="text-gray-400 hover:text-white transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-4">Events</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Upcoming Events</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Past Events</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Popular Events</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Free Events</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">About Us</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Careers</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Blog</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Press</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-sm font-semibold tracking-wider uppercase mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Refund Policy</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white text-sm transition">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-700 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-300 text-sm">
                    &copy; 2023 Eventify. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0">
                    <p class="text-gray-300 text-sm">
                        <i class="fas fa-envelope mr-2"></i> {{$main_settings['site_email']}}
                    </p><br>
                    <p><i class="fas fa-phone-alt mr-2"></i> {{$main_settings['site_phone']}}</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.min.js"></script>
   
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true
        });

        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        
        if (localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        }
        
        themeToggle.addEventListener('click', function() {
            themeIcon.classList.toggle('fa-moon');
            themeIcon.classList.toggle('fa-sun');
            
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        });
        
</script>
@stack('scripts')
</body>
</html>