<?php

use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Http\Controllers\Frontend\EventController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Customer\CustomerDashboardController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\Admin\AdminTicketController;
use App\Models\Ticket;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

// Frontend homepage
Route::get('/', function () {
    $sliders = Slider::all();
    $testimonials = Testimonial::latest()->take(3)->get();
    return view('frontend.home', compact('sliders', 'testimonials'));
})->name('frontend.home');

// Authenticated dashboard
Route::get('/dashboard', function () {
    $tickets = Ticket::with(['user', 'event'])
        ->latest()
        ->take(5)
        ->get();

    return view('admin.dashboard', compact('tickets'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Slider management
Route::controller(SliderController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/SliderIndex', 'Index')->name('slider.index');
    Route::post('/saveSlider', 'storeslider')->name('slider.store');
    Route::post('/sliderUpdate', 'updateslider')->name('slider.update');
    Route::get('/deleteSlider/{id}', 'deleteslider')->name('slider.delete');
});

// Admin testimonial CRUD
Route::controller(TestimonialController::class)->middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/testimonials', 'index')->name('testimonials.index');
    Route::get('/testimonials/create', 'create')->name('testimonials.create');
    Route::post('/testimonials', 'store')->name('testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', 'edit')->name('testimonials.edit');
    Route::put('/testimonials/{testimonial}', 'update')->name('testimonials.update');
    Route::delete('/testimonials/{testimonial}', 'destroy')->name('testimonials.destroy');
});

// Settings
Route::controller(SettingsController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/settings', 'index')->name('settings');
    Route::post('/settingUpdate', 'update')->name('settings.update');
});

// Frontend public events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');


// Admin/staff event management
Route::middleware(['auth', 'role:admin|staff'])->group(function () {
    Route::resource('manage-events', AdminEventController::class)->parameters([
        'manage-events' => 'event'
    ]);
});

Route::middleware(['auth', 'role:admin|staff'])->prefix('admin')->group(function () {
    Route::get('/tickets', [AdminTicketController::class, 'index'])->name('admin.tickets.index');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerDashboardController::class, 'index'])->name('customer.dashboard');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::post('/tickets/purchase', [App\Http\Controllers\Customer\TicketController::class, 'store'])->name('tickets.purchase');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/checkout/{eventId}', [StripeController::class, 'checkout'])->name('stripe.checkout');
    Route::get('/checkout/success/{eventId}', [StripeController::class, 'success'])->name('stripe.success');
});

Route::get('/about', function(){
    return view('frontend.about');
})->name('about');

Route::get('/contact', function(){
    return view('frontend.contact');
})->name('contact');

Route::get('/eventone', function(){
    return view('customer.eventone');
})->name('eventone');

Route::get('/eventtwo', function(){
    return view('customer.eventtwo');
})->name('eventtwo');

Route::get('/eventthree', function(){
    return view('customer.eventthree');
})->name('eventthree');

Route::get('/cookies', function(){
    return view('frontend.cookiepolicy');
})->name('cookies');

Route::get('/terms', function(){
    return view('frontend.termsofservice');
})->name('terms');

Route::get('/privacy', function(){
    return view('frontend.privacypolicy');
})->name('privacy');

Route::get('/refund', function(){
    return view('frontend.refundpolicy');
})->name('refund');

require __DIR__ . '/auth.php';
