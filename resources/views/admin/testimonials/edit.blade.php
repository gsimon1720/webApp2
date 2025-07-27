@extends('admin.layouts.master')

@section('content')
<h2>Edit Testimonial</h2>
<form method="POST" action="{{ route('testimonials.update', $testimonial) }}">
    @csrf @method('PUT')
    <input name="name" class="form-control mb-2" value="{{ $testimonial->name }}">
    <input name="role" class="form-control mb-2" value="{{ $testimonial->role }}">
    <input name="photo_url" class="form-control mb-2" value="{{ $testimonial->photo_url }}">
    <textarea name="message" class="form-control mb-2">{{ $testimonial->message }}</textarea>
    <input name="rating" type="number" step="0.5" max="5" class="form-control mb-2" value="{{ $testimonial->rating }}">
    <button class="btn btn-primary">Update</button>
</form>
@endsection
