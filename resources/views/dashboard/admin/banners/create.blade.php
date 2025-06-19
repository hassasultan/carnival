@extends('dashboard.admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Add New Banner</h2>
        <p class="card-text">Create a new banner with image, video, or both.</p>
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

    <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

                            <div class="row">
                                <div class="col-md-6">
        <div class="form-group">
                                        <label for="banner_image">Banner Image/Video <span class="text-danger">*</span> <small class="text-muted">(870x328 recommended)</small></label>
                                        <input type="file" name="banner_image" id="banner_image" class="form-control @error('banner_image') is-invalid @enderror" accept="image/*,video/*" required>
                                        @error('banner_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <small class="form-text text-muted">Supported formats: JPG, PNG, GIF, MP4, MOV, AVI, WMV</small>
                                    </div>
        </div>

                                <div class="col-md-6">
        <div class="form-group" id="poster_wrapper" style="display: none;">
                                        <label for="poster">Poster Image <span class="text-danger">*</span> <small class="text-muted">(Required for videos)</small></label>
                                        <input type="file" name="poster" id="poster" class="form-control @error('poster') is-invalid @enderror" accept="image/*">
                                        @error('poster')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <div class="mt-2">
                                            <img src="" width="150" height="100" id="poster-img" style="object-fit: cover; border: 1px solid #ddd; border-radius: 4px; display: none;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Banner Type <span class="text-danger">*</span></label>
                                        <select name="type" class="form-control @error('type') is-invalid @enderror" required>
                                            <option value="">Select Type</option>
                                            <option value="home" {{ old('type') == 'home' ? 'selected' : '' }}>Home</option>
                                            <option value="shop" {{ old('type') == 'shop' ? 'selected' : '' }}>Shop</option>
                                            <option value="mascamps" {{ old('type') == 'mascamps' ? 'selected' : '' }}>Mascamps</option>
                                            <option value="section_leader" {{ old('type') == 'section_leader' ? 'selected' : '' }}>Section Leader</option>
                                            <option value="event" {{ old('type') == 'event' ? 'selected' : '' }}>Event</option>
                                            <option value="flight" {{ old('type') == 'flight' ? 'selected' : '' }}>Flight</option>
                                            <option value="about" {{ old('type') == 'about' ? 'selected' : '' }}>About</option>
                                            <option value="aboutus" {{ old('type') == 'aboutus' ? 'selected' : '' }}>Aboutus</option>
                                        </select>
                                        @error('type')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                                            <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter banner description...">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
        </div>

        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fe fe-save mr-1"></i>Create Banner
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
                posterInput.parentElement.querySelector('label small').textContent = '(Required for videos)';
            }
        } else {
            posterWrapper.style.display = 'none';
            posterInput.removeAttribute('required');
            posterInput.parentElement.querySelector('label small').textContent = '(Required for videos)';
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
