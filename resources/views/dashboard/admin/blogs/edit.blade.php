{{-- @extends('dashboard.admin.layouts.app') --}}
@extends('dashboard.admin.layouts.app')

@section('content')
    <style>
        .img-preview {
            max-width: 100%;
            height: auto;
            margin-top: 5px;
        }

        .delete-button {
            background: none;
            border: none;
            color: red;
            cursor: pointer;
            font-size: 1.2rem;
            margin-left: 5px;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Blog</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Blog Information</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $blog->title }}" placeholder="Enter Blog title" required>
                                </div>
                                @if (auth()->user()->role_id == 1)
                                    <div class="form-group mb-3">
                                        <label for="type">Vendors</label>
                                        <select id="type" name="user_id" class="form-control" required>
                                            <option value="" selected disabled>Select Vendor</option>
                                            @foreach ($user as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ $blog->user_id == $row->id ? 'selected' : '' }}>
                                                    {{ $row->first_name }} {{ $row->last_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                                <div class="form-group mb-3">
                                    <label for="type">Category</label>
                                    <select id="type" name="category_id" class="form-control" required>
                                        <option value="" selected disabled>Select Category</option>
                                        @foreach ($categories as $row)
                                            <option value="{{ $row->id }}"
                                                {{ $blog->category_id == $row->id ? 'selected' : '' }}>{{ $row->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <select class="form-control" id="edit_region" name="region_id" required>
                                        <option value="" disabled>Select Region</option>
                                        @foreach ($regions as $row)
                                            <option value="{{ $row->id }}"
                                                {{ $blog->region_id == $row->id ? 'selected' : '' }}>
                                                {{ $row->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Blog Image -->
                                <div class="form-group mb-3">
                                    <label for="blog_image">Blog Image</label>
                                    <input type="file" id="blog_image" name="image" class="form-control"
                                        accept="image/*" onchange="previewImage(event)">
                                    <div id="imagePreview">
                                        @if ($blog->image)
                                            {{-- <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" --}}
                                            <img src="{{ asset('blog_images/' . $blog->image) }}" alt="Blog Image"
                                                class="img-preview">
                                            <button type="button" class="delete-button"
                                                onclick="deleteImage(event)">❌</button>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="summernote" name="description" class="form-control description" placeholder="Enter Blog description">{{ $blog->description }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    <script>
        function previewImage(event) {
            const input = event.target;
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function() {
                    const imagePreview = document.getElementById('imagePreview');
                    // Clear previous preview
                    imagePreview.innerHTML = '';

                    // Create image element
                    const img = document.createElement('img');
                    img.src = reader.result;
                    img.className = 'img-preview';

                    // Create delete button
                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = '❌';
                    deleteButton.className = 'delete-button';
                    deleteButton.onclick = function() {
                        // Clear file input and preview
                        input.value = '';
                        imagePreview.innerHTML = '';
                    };

                    // Append image and delete button to preview container
                    imagePreview.appendChild(img);
                    imagePreview.appendChild(deleteButton);
                };

                reader.readAsDataURL(file);
            }
        }

        function deleteImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            // Clear image preview
            imagePreview.innerHTML = '';
        }
    </script>
@endsection
