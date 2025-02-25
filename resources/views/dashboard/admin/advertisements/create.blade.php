@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Add New Advertisement</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('advertisements.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}" required>
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
                            <label for="image">File:</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="index">Index:</label>
                            <input type="number" class="form-control" id="index" name="index"
                                value="{{ old('index') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
