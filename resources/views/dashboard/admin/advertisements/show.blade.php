@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Advertisement Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $advertisement->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Title:</label>
                        <p>{{ $advertisement->title }}</p>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <img src="{{ asset('images/' . $advertisement->image) }}" alt="{{ $advertisement->title }}" width="100">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <p>{{ $advertisement->description }}</p>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <p>{{ $advertisement->status == 1 ? 'Enabled' : 'Disabled' }}</p>
                    </div>
                    <div class="form-group">
                        <label>Index:</label>
                        <p>{{ $advertisement->index }}</p>
                    </div>
                    <a href="{{ route('advertisements.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
