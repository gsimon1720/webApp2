<div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-dark-800 border-r border-dark-700">
                <div class="flex items-center justify-center h-16 border-b border-dark-700">
                    <i class="fas fa-user-shield text-indigo-400 text-2xl"></i>
                </div>
                <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto">
                    <div class="flex-1 px-4 space-y-2">
                        <nav class="flex-1 space-y-2">
                            <!-- Dashboard -->
                            <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-white bg-dark-700 rounded-lg group">
                                <i class="fas fa-tachometer-alt mr-3 text-indigo-400"></i>
                                Dashboard
                            </a>
                            
                            <!-- Users -->
                         <!-- Collapsible Menu Item -->
                            <div x-data="{ open: {{ request()->is('SliderIndex') || request()->is('admin/testimonials*') ? 'true' : 'false' }} }" class="w-full">
                                <a href="#" @click.prevent="open = !open"
                                    class="flex items-center px-4 py-3 text-sm font-medium text-gray-400 hover:text-white hover:bg-dark-700 rounded-lg group">
                                    <i class="fas fa-users mr-3"></i>
                                    Home
                                    <svg :class="{'rotate-180': open}" class="w-4 h-4 ml-auto transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>

                                <!-- Submenu -->
                                <div x-show="open" x-collapse class="ml-10 mt-2 space-y-2 text-sm text-gray-300">
                                   <a href="{{ route('frontend.home') }}"
                                        class="block hover:text-white px-2 py-1 rounded
                                        {{ request()->is('/') ? 'bg-dark-600 text-white font-semibold' : '' }}">
                                        Home
                                    </a>

                            <!--Spatie Permission-->
                                @can('manage site settings')
                                    <a href="/SliderIndex"
                                    class="block hover:text-white px-2 py-1 rounded
                                    {{ request()->is('SliderIndex') ? 'bg-dark-600 text-white font-semibold' : '' }}">
                                        Slider
                                    </a>
                                @endcan

                                    <a href="{{ route('testimonials.index') }}"
                                    class="block hover:text-white px-2 py-1 rounded
                                    {{ request()->is('admin/testimonials*') ? 'bg-dark-600 text-white font-semibold' : '' }}">
                                        Testimonial
                                    </a>
                                </div>
                            </div>




                            
                            <!-- Products -->
                            <a href="{{ route('manage-events.index') }}" class="flex items-center px-4 py-3 text-sm font-medium text-gray-400 hover:text-white hover:bg-dark-700 rounded-lg group">
                                <i class="fas fa-boxes mr-3"></i>
                                Events
                            </a>
                            
                            <!-- Settings -->
                        @can('manage site settings')
                            <a href="/settings" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg group
                                {{ request()->is('settings') ? 'bg-dark-700 text-white' : 'text-gray-400 hover:text-white hover:bg-dark-700' }}">
                                <i class="fas fa-cog mr-3"></i>
                                Settings
                            </a>
                        @endcan

                            
                            <!-- Settings -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left flex items-center px-4 py-3 text-sm font-medium text-gray-400 hover:text-white hover:bg-dark-700 rounded-lg group">
                                    <i class="fas fa-cog mr-3"></i>
                                    Logout
                                </button>
                            </form>

                        </nav>
                    </div>
                    
                    <!-- Profile -->
                    <div class="px-4 pt-4 mt-auto">
                        <div class="flex items-center p-2 text-sm text-white bg-dark-700 rounded-lg group">
                            <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile">
                            <div class="ml-3">
                                <p class="font-medium">John Doe</p>
                                <p class="text-xs text-gray-400">Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>