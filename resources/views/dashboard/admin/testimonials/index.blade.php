@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Testimonials</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('testimonials.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New Testimonial
                        </a>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Cover Image</th>
                                    <th>Name</th>
                                    <th>Rating</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->id }}</td>
                                        <td><img src="{{ asset('testimonial/image/' . $testimonial->image) }}" alt="Image" width="50"></td>
                                        <td><img src="{{ asset('testimonial/cover/' . $testimonial->cover_image) }}" alt="Cover Image" width="50"></td>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->rating }}</td>
                                        <td>{{ $testimonial->location }}</td>
                                        <td>{{ $testimonial->status ? 'Enabled' : 'Disabled' }}</td>
                                        <td>
                                            <a href="{{ route('testimonials.show', $testimonial->id) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
