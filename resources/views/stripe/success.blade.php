<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation | Eventify</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#7e22ce',
                        'primary-light': '#a855f7',
                    },
                    boxShadow: {
                        glow: '0 0 15px rgba(126, 34, 206, 0.3)',
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f00;
            opacity: 0.7;
        }
        .gradient-text {
            background: linear-gradient(90deg, #7e22ce, #a855f7);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
    <meta http-equiv="refresh" content="5;url={{ route('customer.dashboard') }}">
</head>
<body class="bg-gray-50">
    <!-- Animated Confetti Background -->
    <div id="confetti-container" class="fixed inset-0 overflow-hidden pointer-events-none z-0"></div>

    <!-- Header -->
  

    <!-- Main Content -->
    <main class="relative z-10">
        <div class="container mx-auto px-4 py-8 max-w-4xl">
            <!-- Confirmation Card -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden text-center">
                <!-- Success Header -->
                <div class="bg-gradient-to-r from-green-400 to-green-500 p-8 text-white">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check text-green-500 text-4xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold mb-2">Order Confirmed!</h1>
                    <p class="text-lg">Thank you for your purchase</p>
                </div>
                
                <!-- Order Details -->
                <div class="p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $event->title }}</h2>
                        <p class="text-gray-600 mb-6">{{ $event->platform }}</p>
                        
                        <div class="flex justify-center space-x-8 mb-6">
                            <div>
                                <p class="text-sm text-gray-500">Order Number</p>
                                <p class="font-medium">#{{ $ticket->ticket_code }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Date</p>
                                <p class="font-medium">{{ now()->format('F j, Y') }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Total</p>
                                <p class="font-medium text-primary">Rs. {{ number_format($event->price, 2) }}</p>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <!-- Event Details -->
                    <div class="mb-2 text-left bg-purple-50 rounded-lg p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1 flex items-center">
                            <i class="fas fa-calendar-day text-primary-light mr-3"></i>
                            Event Details
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="font-medium text-gray-700">Date & Time</p>
                                <p class="text-gray-600">{{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</p>
                                <p class="text-gray-600">{{ \Carbon\Carbon::parse($event->time)->format('g:i A') }}</p>
                            </div>
                            <div>
                                <p class="font-medium text-gray-700">How to Access</p>
                                <p class="text-gray-600">Login to your Eventify account</p>
                                <p class="text-gray-600">Access link will be emailed 1 hour before</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    
                </div>
                
                <!-- Email Confirmation -->
                <div class="bg-gray-50 p-3 border-t border-gray-200">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-envelope text-primary-light text-2xl mr-3"></i>
                        <div>
                            <p class="font-medium">Confirmation sent to</p>
                            <p class="text-primary">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Next Steps -->
            
        </div>
    </main>

    <!-- Footer -->
    

    <!-- Confetti Animation -->
    <script>
        // Simple confetti animation
        function createConfetti() {
            const colors = ['#7e22ce', '#a855f7', '#f43f5e', '#f59e0b', '#10b981'];
            const container = document.getElementById('confetti-container');
            
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.top = -10 + 'px';
                confetti.style.transform = `rotate(${Math.random() * 360}deg)`;
                
                const animation = confetti.animate([
                    { top: '-10px', opacity: 1 },
                    { top: '100vh', opacity: 0 }
                ], {
                    duration: 3000 + Math.random() * 3000,
                    delay: Math.random() * 2000,
                    easing: 'cubic-bezier(0.1, 0.8, 0.3, 1)'
                });
                
                container.appendChild(confetti);
                animation.onfinish = () => confetti.remove();
            }
        }
        
        // Run confetti when page loads
        window.addEventListener('load', createConfetti);
    </script>
</body>
</html>