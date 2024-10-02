@extends('dashboard.admin.layouts.app')

@section('content')
    <h1>Edit Banner</h1>

    <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="banner_image">Banner Image (870x328)</label>
            <input type="file" name="banner_image" class="form-control">
            <img src="{{ asset($banner->banner_image) }}" width="100">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $banner->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control">
                <option value="home" @if ($banner->type == 'home') selected @endif>Home</option>
                <option value="shop" @if ($banner->type == 'shop') selected @endif>Shop</option>
                <option value="mascamps" @if ($banner->type == 'mascamps') selected @endif>Mascamps</option>
                <option value="section_leader" @if ($banner->type == 'section_leader') selected @endif>Section Leader</option>
                <option value="event" @if ($banner->type == 'event') selected @endif>Event</option>
                <option value="flight" @if ($banner->type == 'flight') selected @endif>Flight</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $banner->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$banner->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
