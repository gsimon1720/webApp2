@foreach ($sliders as $slider)   
<div class="absolute inset-0 bg-gradient-to-r from-purple-700 to-indigo-800 z-0"></div>  
    <!-- Main content container - now wider with proper constraints -->
    <div class="relative mx-auto w-full max-w-[2000px] px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <!-- Semi-transparent content box with better visibility -->
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 sm:p-10 lg:p-12 w-full max-w-[1600px] mx-auto border border-white/20">
            <div class="flex flex-col lg:flex-row items-center">
                <!-- Text content -->
                <div class="lg:w-1/2 lg:pr-12">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-tight" data-aos="fade-down">
                        <span class="block">{{$slider->heading}}</span>
                        <span class="block text-purple-300 mt-2">{{$slider->sub_heading}}</span>
                    </h1>
                    <p class="mt-4 text-lg sm:text-xl text-purple-100 max-w-lg" data-aos="fade" data-aos-delay="200">
                        {{$slider->paragraph}}
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
                        <a href="#" class="px-8 py-3 bg-white text-purple-700 font-medium rounded-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 text-center">
                             {{$slider->button_text}}
                        </a>
                        <a href="/register" class="px-8 py-3 bg-purple-500/60 text-white font-medium rounded-lg hover:bg-purple-500/70 transition-all duration-300 transform hover:scale-105 text-center">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <!-- Animation container -->
                <div class="lg:w-1/2 mt-12 lg:mt-0">
                    <lottie-player
                        src="https://lottie.host/acc1d167-8da0-4fb2-880c-c33c05fa5d22/B7UleF0lvU.json"
                        background="transparent"
                        speed="1"
                        style="width: 100%; height: 100%; min-height: 300px"
                        loop
                        autoplay>
                    </lottie-player>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach 


