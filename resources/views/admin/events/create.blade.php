@extends('admin.layouts.master')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-semibold mb-6 text-white">Add Event</h2>

    @if (session('success'))
        <div class="mb-6 px-4 py-3 rounded bg-green-600 text-white shadow text-center">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('manage-events.store') }}" enctype="multipart/form-data" class="max-w-lg mx-auto bg-gray-900 p-6 rounded-lg shadow-lg text-gray-200">
        @csrf

        <div class="mb-4">
            <label for="title" class="block mb-2 font-semibold">Event Title</label>
            <input type="text" id="title" name="title" 
                class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600" 
                placeholder="Enter event title" required />
        </div>

        <div class="mb-4">
            <label for="date" class="block mb-2 font-semibold">Date</label>
            <input type="date" id="date" name="date" 
                class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600" required />
        </div>

        <div class="mb-4">
            <label for="location" class="block mb-2 font-semibold">Location</label>
            <input type="text" id="location" name="location" 
                class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600" 
                placeholder="Enter event location" required />
        </div>

        <div class="mb-4">
            <label for="price" class="block mb-2 font-semibold">Price (LKR)</label>
            <input type="number" id="price" name="price" step="0.01" min="0" 
                class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600" 
                placeholder="Enter event price" required />
        </div>

        <div class="mb-4">
            <label for="image" class="block mb-2 font-semibold">Event Image</label>
            <input type="file" id="image" name="image" 
                class="w-full text-gray-300" />
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 font-semibold">Description</label>
            <textarea id="description" name="description" rows="4" 
                class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-600" 
                placeholder="Write event description..." required></textarea>
        </div>

        <button type="submit" 
            class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 rounded transition duration-300">
            Create Event
        </button>
    </form>
</div>
@endsection
