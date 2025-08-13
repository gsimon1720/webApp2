<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Music Festival - Event Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8b5cf6', // purple-500
                        secondary: '#2dd4bf', // teal-400
                    },
                    animation: {
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        glow: {
                            '0%': { 'box-shadow': '0 0 5px rgba(139, 92, 246, 0.5)' },
                            '100%': { 'box-shadow': '0 0 15px rgba(139, 92, 246, 0.8)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    <!-- Event Details Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden">
            <!-- Event Header -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Global Music Festival" 
                     class="w-full h-64 object-cover opacity-90">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent p-6 flex flex-col justify-end">
                    <div>
                        <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">
                            Virtual Concert
                        </span>
                        <h1 class="text-3xl font-bold text-white mt-2">Global Music Festival</h1>
                        <div class="flex items-center space-x-4 mt-3 text-purple-200">
                            <span class="flex items-center">
                                <i class="fas fa-calendar-day mr-2"></i>
                                June 25, 2025
                            </span>
                            <span class="flex items-center">
                                <i class="fas fa-clock mr-2"></i>
                                8:00 PM EST (24-hour event)
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Body -->
            <div class="p-8">
                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fas fa-info-circle text-primary mr-3"></i>
                        About The Festival
                    </h2>
                    <p class="text-gray-300 leading-relaxed">
                        The Global Music Festival is a groundbreaking 24-hour virtual music marathon featuring artists from every continent. Experience non-stop performances across multiple genres including pop, rock, electronic, jazz, and world music - all streamed live from iconic locations around the world.
                    </p>
                    <p class="text-gray-300 mt-4 leading-relaxed">
                        This unique event connects music lovers worldwide in a shared celebration of cultural diversity through music. With staggered time zones, you can enjoy live performances at any hour of the day or night.
                    </p>
                </div>

                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-music text-primary mr-3"></i>
                        Featured Artists
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-700 rounded-lg p-5 flex items-start transition hover:bg-gray-600">
                            <div class="h-20 w-20 rounded-full bg-gray-600 overflow-hidden mr-4 border-2 border-primary">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-bold text-white">Lena Cruz</h3>
                                <p class="text-sm text-primary mb-2">Latin Pop • Mexico City</p>
                                <p class="text-xs text-gray-400">Performance: 9:00 PM EST</p>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded-lg p-5 flex items-start transition hover:bg-gray-600">
                            <div class="h-20 w-20 rounded-full bg-gray-600 overflow-hidden mr-4 border-2 border-secondary">
                                <img src="https://randomuser.me/api/portraits/men/75.jpg" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-bold text-white">DJ Arjun</h3>
                                <p class="text-sm text-secondary mb-2">Electronic • Mumbai</p>
                                <p class="text-xs text-gray-400">Performance: 2:00 AM EST</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-10">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fas fa-globe-americas text-primary mr-3"></i>
                        Global Schedule Highlights
                    </h2>
                    <div class="bg-gray-700 rounded-lg p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="border-l-4 border-primary pl-4 py-2">
                                <h3 class="font-bold text-white">Americas</h3>
                                <p class="text-gray-400 text-sm">8:00 PM - 4:00 AM EST</p>
                            </div>
                            <div class="border-l-4 border-secondary pl-4 py-2">
                                <h3 class="font-bold text-white">Europe/Africa</h3>
                                <p class="text-gray-400 text-sm">4:00 AM - 12:00 PM EST</p>
                            </div>
                            <div class="border-l-4 border-primary pl-4 py-2">
                                <h3 class="font-bold text-white">Asia</h3>
                                <p class="text-gray-400 text-sm">12:00 PM - 8:00 PM EST</p>
                            </div>
                            <div class="border-l-4 border-secondary pl-4 py-2">
                                <h3 class="font-bold text-white">Special Collaborations</h3>
                                <p class="text-gray-400 text-sm">Throughout the event</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center">
                        <i class="fas fa-laptop text-primary mr-3"></i>
                        Virtual Experience
                    </h2>
                    <div class="bg-gray-700 rounded-lg p-6">
                        <p class="text-gray-300 mb-4">
                            Our immersive virtual platform delivers concert-quality streaming with:
                        </p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>HD multi-camera production from each location</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Interactive chat with other attendees worldwide</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Virtual "travel" between venue streams</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                <span>Behind-the-scenes artist interviews</span>
                            </li>
                        </ul>
                        <div class="mt-6 bg-gray-800 rounded p-4">
                            <p class="text-sm text-gray-400">
                                <i class="fas fa-info-circle text-primary mr-2"></i>
                                Stream access available on all devices. VR headset optional for enhanced experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>