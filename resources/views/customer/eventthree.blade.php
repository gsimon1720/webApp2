<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Masterclass - Event Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ec4899', // pink-500
                        secondary: '#22c55e', // green-500
                    },
                    animation: {
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        glow: {
                            '0%': { 'box-shadow': '0 0 5px rgba(236, 72, 153, 0.5)' },
                            '100%': { 'box-shadow': '0 0 15px rgba(236, 72, 153, 0.8)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">
    <!-- Event Details Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl overflow-hidden">
            <!-- Event Header -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Digital Marketing Masterclass" 
                     class="w-full h-64 object-cover opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent p-6 flex flex-col justify-end">
                    <div>
                        <span class="bg-secondary text-white px-3 py-1 rounded-full text-sm font-medium">
                            Workshop
                        </span>
                        <h1 class="text-3xl font-bold text-white mt-2">Digital Marketing Masterclass</h1>
                        <div class="flex items-center space-x-4 mt-3 text-green-200">
                            <span class="flex items-center">
                                <i class="fas fa-calendar-day mr-2"></i>
                                July 5, 2025
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                2:00 PM EST
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Body -->
            <div class="p-8">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-info-circle text-primary mr-3"></i>
                        About The Workshop
                    </h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        Transform your marketing strategy with actionable insights from experts. This masterclass covers the latest trends in digital marketing, including social media, SEO, email campaigns, and analytics.
                    </p>
                    <p class="text-gray-700 dark:text-gray-300 mt-4 leading-relaxed">
                        Suitable for marketers, business owners, and anyone looking to elevate their digital marketing skills. Engage in hands-on exercises and interactive sessions with top industry professionals.
                    </p>
                </div>

                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <i class="fas fa-user-tie text-primary mr-3"></i>
                        Featured Speakers
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-5 flex items-start transition hover:bg-gray-200 dark:hover:bg-gray-600">
                            <div class="h-20 w-20 rounded-full bg-gray-300 dark:bg-gray-600 overflow-hidden mr-4 border-2 border-primary">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white">Alice Morgan</h3>
                                <p class="text-sm text-primary mb-2">SEO Specialist • New York</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Session: 2:00 PM EST</p>
                            </div>
                        </div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-5 flex items-start transition hover:bg-gray-200 dark:hover:bg-gray-600">
                            <div class="h-20 w-20 rounded-full bg-gray-300 dark:bg-gray-600 overflow-hidden mr-4 border-2 border-secondary">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 dark:text-white">Ravi Patel</h3>
                                <p class="text-sm text-secondary mb-2">Social Media Expert • Mumbai</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Session: 3:00 PM EST</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 flex items-center">
                        <i class="fas fa-laptop text-primary mr-3"></i>
                        Workshop Highlights
                    </h2>
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-6">
                        <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Hands-on digital marketing exercises</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Live Q&A with industry leaders</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Access to downloadable resources</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Networking opportunities with peers</span>
                            </li>
                        </ul>
                        <div class="mt-6 bg-gray-200 dark:bg-gray-800 rounded p-4">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                <i class="fas fa-info-circle text-primary mr-2"></i>
                                Stream access available on all devices. Interactive sessions via Zoom.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-between items-center">
                    <span class="text-2xl font-bold text-gray-900 dark:text-white">Rs. 2500</span>
                 
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
