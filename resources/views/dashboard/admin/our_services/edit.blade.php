@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Service</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('our_services.update', $ourService->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $ourService->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon:</label>
                            <input type="file" class="form-control" id="icon" name="icon">
                            <img src="{{ asset('images/' . $ourService->icon) }}" alt="{{ $ourService->title }}" width="100" class="mt-2">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" required>{{ $ourService->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $ourService->status == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ $ourService->status == 0 ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
