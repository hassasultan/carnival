@extends('dashboard.subVendor.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Site Gallery</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('subvendor_site_gallery.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New Image
                        </a>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                {{-- @foreach ($siteGalleries as $key => $siteGallery)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset('images/' . $siteGallery->image) }}" alt="Image"
                                                width="50"></td>
                                        <td>{{ $siteGallery->status == 1 ? 'Enabled' : 'Disabled' }}</td>
                                        <td>
                                            <a href="{{ route('subvendor_site_gallery.show', $siteGallery->id) }}"
                                                class="btn btn-info">Show</a>
                                            <a href="{{ route('subvendor_site_gallery.edit', $siteGallery->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('subvendor_site_gallery.destroy', $siteGallery->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach --}}
                                @foreach ($siteGalleries as $siteGallery)
                                    <tr>
                                        <td>{{ $siteGallery->id }}</td>
                                        {{-- <td><img src="{{ asset('images/' . $siteGallery->image) }}" alt="Image" width="50"></td> --}}
                                        {{-- <td>{{ $siteGallery->status == 1 ? 'Enabled' : 'Disabled' }}</td> --}}
                                        <td>{{ $siteGallery->title }}</td>
                                        <td>
                                            {{-- <a href="{{ route('subvendor_site_gallery.show', $siteGallery->id) }}"
                                                class="btn btn-info">Show</a> --}}
                                            <a href="{{ route('subvendor_site_gallery.edit', $siteGallery->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ route('subvendor_site_gallery.destroy', $siteGallery->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
