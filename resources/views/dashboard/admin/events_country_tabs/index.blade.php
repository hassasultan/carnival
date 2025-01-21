@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Event Country Tabs</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('events_country_tabs.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New Event Country Tab
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
                                    <th>Carnival</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Tab</th>
                                    <th>File</th>
                                    <th>File Type</th>
                                    {{-- <th>Content</th> --}}
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($eventsCountryTabs as $eventsCountryTab)
                                    <tr>
                                        <td>{{ $eventsCountryTab->id }}</td>
                                        <td>{{ $eventsCountryTab->carnival->name }}</td>
                                        <td>{{ $eventsCountryTab->country->name }}</td>
                                        <td>{{ $eventsCountryTab->city->name }}</td>
                                        <td>{{ $eventsCountryTab->tab }}</td>
                                        <td>
                                            @if($eventsCountryTab->file_type == 'image')
                                                <img src="{{ asset('files/' . $eventsCountryTab->file) }}" alt="file" width="50">
                                            @elseif($eventsCountryTab->file_type == 'video')
                                                <video width="50" controls>
                                                    <source src="{{ asset('files/' . $eventsCountryTab->file) }}" type="{{ $eventsCountryTab->file_type }}">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </td>
                                        <td>{{ $eventsCountryTab->file_type }}</td>
                                        {{-- <td>{!! $eventsCountryTab->content !!}</td> --}}
                                        <td>{{ $eventsCountryTab->status ? 'Enabled' : 'Disabled' }}</td>
                                        <td>
                                            <a href="{{ route('events_country_tabs.show', $eventsCountryTab->id) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('events_country_tabs.edit', $eventsCountryTab->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('events_country_tabs.destroy', $eventsCountryTab->id) }}" method="POST" style="display:inline-block;">
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
