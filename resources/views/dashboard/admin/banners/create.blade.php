@extends('dashboard.admin.layouts.app')

@section('content')
    <h1>Add Banner</h1>

    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="banner_image">Banner Image (870x328)</label>
            <input type="file" name="banner_image" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control">
                <option value="home">Home</option>
                <option value="shop">Shop</option>
                <option value="mascamps">Mascamps</option>
                <option value="section_leader">Section Leader</option>
                <option value="event">Event</option>
                <option value="flight">Flight</option>
                <option value="about">About</option>
                <option value="aboutus">Aboutus</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
