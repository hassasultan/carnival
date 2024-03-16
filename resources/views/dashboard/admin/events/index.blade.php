@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center my-3">
                <div class="col">
                    <h2 class="page-title">Calendar</h2>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn" data-toggle="modal" data-target=".modal-calendar"><span
                            class="fe fe-filter fe-16 text-muted"></span></button>
                    <button type="button" class="btn btn-primary" id="openEventModal"><span
                            class="fe fe-plus fe-16 mr-3"></span>New Event</button>
                </div>
            </div>
            <div id='calendar'></div>
        </div>
    </div>

    <!-- new event modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyModalLabel">New Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <form id="createEventForm" method="POST" action="{{ route('events.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter event name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="package_id">Package</label>
                                    <select id="package_id" name="package_id" class="form-control" required>
                                        <option value="">Select Package</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">{{ $package->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category_id">Category</label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="total_no_of_tickets">Total No. of Tickets</label>
                                    <input type="number" id="total_no_of_tickets" name="total_no_of_tickets"
                                        class="form-control" placeholder="Enter Total No of Tickets" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Note</label>
                                    <textarea id="description" name="description" class="form-control" placeholder="Enter event description"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-group col-md-8">
                                        <label for="eventType">Event type</label>
                                        <select id="eventType" name="eventType" class="form-control select2">
                                            <option value="work">Work</option>
                                            <option value="home">Home</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="date-input1">Start Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" id="button-addon-date"><span
                                                        class="fe fe-calendar fe-16"></span></div>
                                            </div>
                                            <input type="text" class="form-control drgpicker" id="start_date"
                                                name="start_date" value="04/24/2020">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="startDate">Start Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" id="button-addon-time"><span
                                                        class="fe fe-clock fe-16"></span></div>
                                            </div>
                                            <input type="text" class="form-control time-input" id="start_time"
                                                name="start_time" placeholder="10:00 AM">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="date-input1">End Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" id="button-addon-date"><span
                                                        class="fe fe-calendar fe-16"></span></div>
                                            </div>
                                            <input type="text" class="form-control drgpicker" id="end_date"
                                                name="end_date" value="04/24/2020">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="startDate">End Time</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" id="button-addon-time"><span
                                                        class="fe fe-clock fe-16"></span></div>
                                            </div>
                                            <input type="text" class="form-control time-input" id="end_time"
                                                name="end_time" placeholder="11:00 AM">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="all_day"
                                            name="all_day" checked>
                                        <label class="custom-control-label" for="all_day">All day</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="banner">Banner Image</label>
                                    <input type="file" id="banner" name="banner" class="form-control"
                                        placeholder="Enter Total No of Tickets" required>
                                </div>
                                {{-- <div class="modal-footer d-flex justify-content-between"> --}}
                                <button type="button" class="btn mb-2 btn-primary" id="saveEventBtn">Save Event</button>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn mb-2 btn-primary" id="saveEventBtn">Save Event</button>
                </div> --}}
            </div>
        </div>
    </div> <!-- new event modal -->
@endsection

@section('bottom_script')
    <!-- Include FullCalendar JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.js"></script>

    <!-- Your custom JavaScript code using FullCalendar and AJAX -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var events = {!! $events->toJson() !!}; // Convert Eloquent Collection to JSON

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'timeGrid', 'list', 'bootstrap'], // Include necessary plugins
                timeZone: 'UTC',
                themeSystem: 'bootstrap',
                header: {
                    left: 'today, prev, next',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                buttonIcons: {
                    prev: 'fe-arrow-left',
                    next: 'fe-arrow-right',
                    prevYear: 'left-double-arrow',
                    nextYear: 'right-double-arrow'
                },
                weekNumbers: true,
                eventLimit: true, // allow "more" link when too many events
                events: events.map(function(event) {
                    return {
                        title: event.name,
                        start: event.created_at, // Assuming created_at holds the event date
                        allDay: true // Assuming all events are full-day events
                    };
                })
            });

            calendar.render();

            // Open the event modal when clicking the "New Event" button
            document.getElementById('openEventModal').addEventListener('click', function() {
                $('#eventModal').modal('show');
            });

            // Handle form submission via AJAX
            document.getElementById('saveEventBtn').addEventListener('click', function() {
                var formData = new FormData(document.getElementById('createEventForm'));
                $.ajax({
                    url: '{{ route('events.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        // You can handle success response here
                        $('#eventModal').modal('hide');
                        // Reload the calendar to update events
                        calendar.refetchEvents();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // You can handle error response here
                    }
                });
            });
        });
    </script>
@endsection
