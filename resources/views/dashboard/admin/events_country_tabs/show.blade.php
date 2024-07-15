@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Event Country Tab Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <strong>Event:</strong>
                        {{ $eventsCountryTab->event->name }}
                    </div>
                    <div class="form-group">
                        <strong>Country:</strong>
                        {{ $eventsCountryTab->country->name }}
                    </div>
                    <div class="form-group">
                        <strong>City:</strong>
                        {{ $eventsCountryTab->city->name }}
                    </div>
                    <div class="form-group">
                        <strong>Tab:</strong>
                        {{ $eventsCountryTab->tab }}
                    </div>
                    <div class="form-group">
                        <strong>File:</strong>
                        @if($eventsCountryTab->file_type == 'image')
                            <img src="{{ asset('files/' . $eventsCountryTab->file) }}" alt="file" style="max-width: 100px;">
                        @elseif($eventsCountryTab->file_type == 'video')
                            <video src="{{ asset('files/' . $eventsCountryTab->file) }}" controls style="max-width: 100px;"></video>
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>File Type:</strong>
                        {{ $eventsCountryTab->file_type }}
                    </div>
                    <div class="form-group">
                        <strong>Content:</strong>
                        <div class="col-12">
                            {!! $eventsCountryTab->content !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Status:</strong>
                        {{ $eventsCountryTab->status ? 'Enabled' : 'Disabled' }}
                    </div>
                    <a href="{{ route('events_country_tabs.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
