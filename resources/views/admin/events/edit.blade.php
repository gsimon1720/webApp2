@extends('admin.layouts.master')

@section('content')
<div class="container mx-auto px-4 py-6 text-white">
    <h2 class="text-2xl font-semibold mb-6">Edit Event</h2>

    <form method="POST" action="{{ route('manage-events.update', ['event' => $event->id]) }}" enctype="multipart/form-data" class="bg-dark-800 p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-300 mb-1">Title</label>
            <input type="text" name="title" class="w-full bg-dark-700 border border-gray-600 text-white rounded px-3 py-2" value="{{ $event->title }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-300 mb-1">Description</label>
            <textarea name="description" class="w-full bg-dark-700 border border-gray-600 text-white rounded px-3 py-2" rows="4" required>{{ $event->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-300 mb-1">Date</label>
            <input type="date" name="date" class="w-full bg-dark-700 border border-gray-600 text-white rounded px-3 py-2" value="{{ $event->date }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-300 mb-1">Location</label>
            <input type="text" name="location" class="w-full bg-dark-700 border border-gray-600 text-white rounded px-3 py-2" value="{{ $event->location }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-300 mb-1">Price (LKR)</label>
            <input type="number" name="price" step="0.01" min="0" class="w-full bg-dark-700 border border-gray-600 text-white rounded px-3 py-2" value="{{ $event->price }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-300 mb-1">Current Image</label>
            @if($event->image)
                <img src="{{ asset('storage/events/' . $event->image) }}" class="w-40 h-24 object-cover rounded mb-2">
            @else
                <span class="text-gray-400">N/A</span>
            @endif
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-300 mb-1">Change Image</label>
            <input type="file" name="image" class="w-full bg-dark-700 border border-gray-600 text-white rounded px-3 py-2">
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection
