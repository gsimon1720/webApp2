@extends('frontend.layouts.master')
@section('content')
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Contact Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl mb-4" data-aos="fade-up">
                Contact Us
            </h1>
            <p class="text-xl text-gray-500 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Have questions or feedback? We'd love to hear from you!
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
                       <div class="bg-white dark:bg-gray-800 pt-8 pr-8 pb-4 pl-8 rounded-xl shadow-lg" data-aos="fade-right">
  <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send us a message</h2>
  <form>
    <!-- Name -->
    <div class="mb-6">
      <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Full Name
      </label>
      <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white" placeholder="Your name">
    </div>

    <!-- Email -->
    <div class="mb-6">
      <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Email Address
      </label>
      <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white" placeholder="you@example.com">
    </div>

    <!-- Subject -->
    <div class="mb-6">
      <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Subject
      </label>
      <select id="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white">
        <option value="">Select a subject</option>
        <option value="support">Technical Support</option>
        <option value="sales">Sales Inquiry</option>
        <option value="feedback">Feedback</option>
        <option value="other">Other</option>
      </select>
    </div>

    <!-- Message -->
    <div class="mb-4">
      <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        Your Message
      </label>
      <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white" placeholder="Type your message here..."></textarea>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105 glow mb-4">
      Send Message
    </button>

   
  </form>
</div>



            <!-- Contact Info -->
            <div class="space-y-8" data-aos="fade-left">
                <!-- Contact Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 contact-card">
                        <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-map-marker-alt text-purple-600 dark:text-purple-400 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Our Location</h3>
                        <p class="text-gray-600 dark:text-gray-300">123 Event Street<br>San Francisco, CA 94107</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 contact-card">
                        <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-phone-alt text-blue-600 dark:text-blue-400 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Call Us</h3>
                        <p class="text-gray-600 dark:text-gray-300">+1 (555) 123-4567<br>Mon-Fri, 9am-5pm PST</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 contact-card">
                        <div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-envelope text-green-600 dark:text-green-400 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Email Us</h3>
                        <p class="text-gray-600 dark:text-gray-300">support@eventify.com<br>help@eventify.com</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 contact-card">
                        <div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-headset text-yellow-600 dark:text-yellow-400 text-xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Live Chat</h3>
                        <p class="text-gray-600 dark:text-gray-300">Available 24/7<br>Click the chat icon below</p>
                    </div>
                </div>

                <!-- Map -->
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.788210021968!2d-122.4199066846822!3d37.77492997975938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                    </iframe>
                </div>

                <!-- Social Media -->
                <div class="text-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Connect With Us</h3>
                    <div class="flex justify-center space-x-6">
                        <a href="#" class="text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FAQ Section -->
    <section class="bg-gray-100 dark:bg-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl" data-aos="fade-up">
                    Frequently Asked Questions
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4" data-aos="fade-up" data-aos-delay="100">
                    Find answers to common questions about Eventify
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">How do I purchase tickets for an event?</h3>
                            <i class="fas fa-chevron-down text-purple-600 dark:text-purple-400 transition-transform duration-300"></i>
                        </button>
                        <div class="px-6 pb-6 hidden">
                            <p class="text-gray-600 dark:text-gray-300">
                                Purchasing tickets is easy! Simply browse our events, select the one you're interested in, choose your ticket type and quantity, and proceed through our secure checkout process.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">What payment methods do you accept?</h3>
                            <i class="fas fa-chevron-down text-purple-600 dark:text-purple-400 transition-transform duration-300"></i>
                        </button>
                        <div class="px-6 pb-6 hidden">
                            <p class="text-gray-600 dark:text-gray-300">
                                We accept all major credit cards (Visa, Mastercard, American Express, Discover), PayPal, and Apple Pay for your convenience.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Can I get a refund for my tickets?</h3>
                            <i class="fas fa-chevron-down text-purple-600 dark:text-purple-400 transition-transform duration-300"></i>
                        </button>
                        <div class="px-6 pb-6 hidden">
                            <p class="text-gray-600 dark:text-gray-300">
                                Refund policies vary by event. Please check the specific event's refund policy before purchasing. Generally, refunds are available up to 7 days before the event.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">How do I access a virtual event?</h3>
                            <i class="fas fa-chevron-down text-purple-600 dark:text-purple-400 transition-transform duration-300"></i>
                        </button>
                        <div class="px-6 pb-6 hidden">
                            <p class="text-gray-600 dark:text-gray-300">
                                After purchasing a ticket, you'll receive an email with login instructions. Simply click the link in your email at the scheduled event time to join. Make sure to test your connection beforehand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection