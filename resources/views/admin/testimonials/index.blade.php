@extends('admin.layouts.master')

@section('content')
<h2>Testimonials</h2>
<a href="{{ route('testimonials.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


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
