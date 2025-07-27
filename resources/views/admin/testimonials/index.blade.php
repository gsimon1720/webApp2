@extends('admin.layouts.master')

@section('content')
<h2>Testimonials</h2>
<a href="{{ route('testimonials.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>

<table class="table">
    <thead>
        <tr><th>Name</th><th>Role</th><th>Rating</th><th>Actions</th></tr>
    </thead>
    <tbody>
        @foreach($testimonials as $t)
        <tr>
            <td>{{ $t->name }}</td>
            <td>{{ $t->role }}</td>
            <td>{{ $t->rating }}</td>
            <td>
                <a href="{{ route('testimonials.edit', $t) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('testimonials.destroy', $t) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete?')" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
