@extends('dashboard.admin.layouts.app')

@section('content')
    <h1>Edit Banner</h1>

    <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="banner_image">Banner Image (870x328)</label>
            <input type="file" name="banner_image" id="banner_image" class="form-control">
            <img src="{{ asset($banner->banner_image) }}" width="100">
        </div>

            <div class="form-group" id="poster_wrapper" @if ($banner->poster != null) style="display: block;" @else style="display:none;" @endif>
                <label for="banner_image">Poster</label>
                <input type="file" name="poster" id="poster" class="form-control">
            </div>
            <img src="{{ asset($banner->poster) }}" width="150" height="100" id="poster-img"/>

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
                <option value="about" @if ($banner->type == 'about') selected @endif>About</option>
                <option value="aboutus" @if ($banner->type == 'aboutus') selected @endif>Aboutus</option>
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
    <script>
        document.getElementById('banner_image').addEventListener('change', function(event) {
            let file = event.target.files[0];
            let posterInput = document.getElementById('poster');
            let posterWrapper = document.getElementById('poster_wrapper');

            if (file) {
                let videoTypes = ['video/mp4', 'video/mov', 'video/avi', 'video/wmv', 'video/flv', 'video/webm',
                    'video/mkv'
                ];

                if (videoTypes.includes(file.type)) {
                    posterWrapper.style.display = 'block';
                    posterInput.setAttribute('required', 'required'); // Make it required
                } else {
                    posterWrapper.style.display = 'none';
                    posterInput.removeAttribute('required'); // Remove required if not video
                }
            }
        });
    </script>
@endsection
