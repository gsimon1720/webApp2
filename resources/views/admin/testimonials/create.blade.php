@extends('admin.layouts.master')

@section('content')
    <h2>Add Testimonial</h2>

    {{-- Show validation errors if any --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Show success message --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('testimonials.store') }}">
        @csrf

        <input name="name" value="{{ old('name') }}" class="form-control mb-2" placeholder="Name" required>

        <input name="role" value="{{ old('role') }}" class="form-control mb-2" placeholder="Role" required>

        <input name="photo_url" value="{{ old('photo_url') }}" type="url" class="form-control mb-2" placeholder="Photo URL (http://...)" required>

        <textarea name="message" class="form-control mb-2" placeholder="Message" required>{{ old('message') }}</textarea>

        <input name="rating" type="number" step="0.5" max="5" min="0" value="{{ old('rating', 5) }}" class="form-control mb-2" placeholder="Rating (0 to 5)" required>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
