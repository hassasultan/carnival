@extends('dashboard.admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Create Region</h2>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Region Information</strong>
            </div>
            <div class="card-body col-sm-6">
                <form action="{{ route('regions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon:</label>
                        <input type="file" class="form-control" id="icon" name="icon" required>
                    </div>
                    <div class="form-group">
                        <label for="placement">Placement Order Number:</label>
                        <input type="number" class="form-control" id="placement" name="placement"  required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
