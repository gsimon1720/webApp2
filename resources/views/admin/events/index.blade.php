@extends('admin.layouts.master')

@section('content')
<div class="container mx-auto px-4 py-6">

    @if (session('success'))
        <div class="mb-4 px-4 py-3 rounded bg-green-600 text-white shadow">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-white">Manage Events</h2>
        <a href="{{ route('manage-events.create') }}" class="bg-purple-600 text-white px-4 py-2 rounded">+ Add Event</a>
    </div>

    <table class="min-w-full text-sm text-gray-200 bg-dark-800 border border-dark-600">
        <thead class="bg-dark-700 text-gray-100">
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Date</th>
                <th class="px-4 py-2">Location</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr class="border-b border-dark-600 hover:bg-dark-700">
                    <td class="px-4 py-2">{{ $event->title }}</td>
                    <td class="px-4 py-2">{{ $event->date }}</td>
                    <td class="px-4 py-2">{{ $event->location }}</td>
                    <td class="px-4 py-2">Rs. {{ number_format($event->price, 2) }}</td>
                    <td class="px-4 py-2">{{ Str::limit($event->description, 50) }}</td>
                    <td class="px-4 py-2">
                        @if($event->image)
                            <img src="{{ asset('storage/events/' . $event->image) }}" alt="Event Image" class="h-12 w-12 rounded object-cover">
                        @else
                            <span class="text-gray-400">No image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 flex items-center space-x-2">
                        <a href="{{ route('manage-events.edit', $event->id) }}" class="text-blue-400 hover:underline">Edit</a>

                        <form action="{{ route('manage-events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this event?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
