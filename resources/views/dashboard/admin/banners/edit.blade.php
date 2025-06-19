@extends('dashboard.admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Edit Banner</h2>
        <p class="card-text">Update banner information and files.</p>
        <div class="row my-4">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">Banner Information</strong>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="banner_image">Banner Image/Video <small class="text-muted">(Optional - Leave empty to keep current)</small></label>
                                        <input type="file" name="banner_image" id="banner_image" class="form-control @error('banner_image') is-invalid @enderror" accept="image/*,video/*">
                                        @error('banner_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        
                                        @if($banner->banner_image)
                                            <div class="mt-2">
                                                <small class="text-muted">Current file:</small>
                                                <div class="mt-1">
                                                    @if(str_contains($banner->banner_image, '.mp4') || str_contains($banner->banner_image, '.avi') || str_contains($banner->banner_image, '.mov') || str_contains($banner->banner_image, '.wmv'))
                                                        <video width="200" height="120" controls>
                                                            <source src="{{ asset($banner->banner_image) }}" type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @else
                                                        <img src="{{ asset($banner->banner_image) }}" alt="Current Banner" width="200" height="120" style="object-fit: cover; border: 1px solid #ddd; border-radius: 4px;">
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group" id="poster_wrapper" @if ($banner->poster != null) style="display: block;" @else style="display:none;" @endif>
                                        <label for="poster">Poster Image <small class="text-muted">(Required for videos, optional for images)</small></label>
                                        <input type="file" name="poster" id="poster" class="form-control @error('poster') is-invalid @enderror" accept="image/*">
                                        @error('poster')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        
                                        @if($banner->poster)
                                            <div class="mt-2">
                                                <small class="text-muted">Current poster:</small>
                                                <div class="mt-1">
                                                    <img src="{{ asset($banner->poster) }}" alt="Current Poster" width="150" height="100" id="poster-img" style="object-fit: cover; border: 1px solid #ddd; border-radius: 4px;" />
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Banner Type</label>
                                        <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                                            <option value="">Select Type</option>
                                            <option value="home" @if ($banner->type == 'home') selected @endif>Home</option>
                                            <option value="shop" @if ($banner->type == 'shop') selected @endif>Shop</option>
                                            <option value="mascamps" @if ($banner->type == 'mascamps') selected @endif>Mascamps</option>
                                            <option value="section_leader" @if ($banner->type == 'section_leader') selected @endif>Section Leader</option>
                                            <option value="event" @if ($banner->type == 'event') selected @endif>Event</option>
                                            <option value="flight" @if ($banner->type == 'flight') selected @endif>Flight</option>
                                            <option value="about" @if ($banner->type == 'about') selected @endif>About</option>
                                            <option value="aboutus" @if ($banner->type == 'aboutus') selected @endif>Aboutus</option>
                                        </select>
                                        @error('type')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                                            <option value="1" {{ $banner->status ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ !$banner->status ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter banner description...">{{ $banner->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fe fe-save mr-1"></i>Update Banner
                                </button>
                                <a href="{{ route('banners.index') }}" class="btn btn-secondary">
                                    <i class="fe fe-arrow-left mr-1"></i>Back to Banners
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottom_script')
<script>
    document.getElementById('banner_image').addEventListener('change', function(event) {
        let file = event.target.files[0];
        let posterInput = document.getElementById('poster');
        let posterWrapper = document.getElementById('poster_wrapper');

        if (file) {
            let videoTypes = ['video/mp4', 'video/mov', 'video/avi', 'video/wmv', 'video/flv', 'video/webm', 'video/mkv'];

            if (videoTypes.includes(file.type)) {
                posterWrapper.style.display = 'block';
                posterInput.setAttribute('required', 'required');
                posterInput.parentElement.querySelector('label small').textContent = '(Required for videos)';
            } else {
                posterWrapper.style.display = 'none';
                posterInput.removeAttribute('required');
                posterInput.parentElement.querySelector('label small').textContent = '(Required for videos, optional for images)';
            }
        } else {
            // No file selected, check if current banner is a video
            let currentBannerSrc = '{{ $banner->banner_image }}';
            if (currentBannerSrc && (currentBannerSrc.includes('.mp4') || currentBannerSrc.includes('.avi') || currentBannerSrc.includes('.mov') || currentBannerSrc.includes('.wmv'))) {
                posterWrapper.style.display = 'block';
                posterInput.setAttribute('required', 'required');
                posterInput.parentElement.querySelector('label small').textContent = '(Required for videos)';
            } else {
                posterWrapper.style.display = 'none';
                posterInput.removeAttribute('required');
                posterInput.parentElement.querySelector('label small').textContent = '(Required for videos, optional for images)';
            }
        }
    });

    document.getElementById('poster').addEventListener('change', function(event) {
        let file = event.target.files[0];
        let posterImg = document.getElementById('poster-img');

        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                posterImg.src = e.target.result;
                posterImg.style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            posterImg.style.display = 'none';
        }
    });
</script>
@endsection
