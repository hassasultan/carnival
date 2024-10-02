@extends('dashboard.admin.layouts.app')

@section('content')
    <h1>Banners</h1>
    <a href="{{ route('banners.create') }}" class="btn btn-primary">Add Banner</a>

    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Type</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td><img src="{{ asset($banner->banner_image) }}" alt="Banner" width="100"></td>
                    <td>{{ $banner->type }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>{{ $banner->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
