@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Advertisement</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('advertisements.update', $advertisement->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control">
                                <option value="home" @if ($advertisement->type == 'home') selected @endif>Home</option>
                                <option value="shop" @if ($advertisement->type == 'shop') selected @endif>Shop</option>
                                <option value="mascamps" @if ($advertisement->type == 'mascamps') selected @endif>Mascamps</option>
                                <option value="section_leader" @if ($advertisement->type == 'section_leader') selected @endif>Section Leader</option>
                                <option value="event" @if ($advertisement->type == 'event') selected @endif>Event</option>
                                <option value="flight" @if ($advertisement->type == 'flight') selected @endif>Flight</option>
                                <option value="about" @if ($advertisement->type == 'about') selected @endif>About</option>
                                <option value="aboutus" @if ($advertisement->type == 'aboutus') selected @endif>Aboutus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $advertisement->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image">File:</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <img src="{{ asset('images/' . $advertisement->image) }}" alt="{{ $advertisement->title }}"
                                width="100" class="mt-2">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" required>{{ old('description', $advertisement->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $advertisement->status == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ $advertisement->status == 0 ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="index">Index:</label>
                            <input type="number" class="form-control" id="index" name="index"
                                value="{{ old('index', $advertisement->index) }}" required>
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
