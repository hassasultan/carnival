@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Edit Package</h2>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Package Information</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('packages.update', $package->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" value="{{ $package->title }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" id="slug" name="slug" class="form-control" value="{{ $package->slug }}" required>
                            </div>
                            <div class="form-group">
                                <label for="icon">Icon:</label>
                                <input type="file" class="form-control" id="icon" name="icon">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" required>{{ $package->description }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ecommerce">E-commerce</label>
                                <select id="ecommerce" name="ecommerce" class="form-control" required>
                                    <option value="1" {{ $package->ecommerce == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->ecommerce == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            {{-- <div class="form-group mb-3">
                                <label for="product">Products</label>
                                <select id="product" name="product" class="form-control" required>
                                    <option value="1" {{ $package->product == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->product == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div> --}}
                            <div class="form-group mb-3">
                                <label for="costume">Costumes</label>
                                <select id="costume" name="costume" class="form-control" required>
                                    <option value="1" {{ $package->costume == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->costume == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="events">Events</label>
                                <select id="events" name="events" class="form-control" required>
                                    <option value="1" {{ $package->events == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->events == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="music">Music</label>
                                <select id="music" name="music" class="form-control" required>
                                    <option value="1" {{ $package->music == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->music == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="appointment">Appointment</label>
                                <select id="appointment" name="appointment" class="form-control" required>
                                    <option value="1" {{ $package->appointment == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->appointment == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ad_space">Ad Space</label>
                                <select id="ad_space" name="ad_space" class="form-control" required>
                                    <option value="1" {{ $package->ad_space == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->ad_space == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="blogging">Blogging</label>
                                <select id="blogging" name="blogging" class="form-control" required>
                                    <option value="1" {{ $package->blogging == '1' ? 'selected' : '' }}>True</option>
                                    <option value="0" {{ $package->blogging == '0' ? 'selected' : '' }}>False</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="1" {{ $package->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $package->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Package</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- / .card -->
    </div> <!-- .col-12 -->
</div> <!-- .row -->

@endsection
