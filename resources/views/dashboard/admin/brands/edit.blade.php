@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Brand</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $brand->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            <input type="file" class="form-control" id="logo" name="logo">
                            <img src="{{ asset('images/' . $brand->logo) }}" alt="Logo" width="100" class="mt-2">
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $brand->status == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ $brand->status == 0 ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
