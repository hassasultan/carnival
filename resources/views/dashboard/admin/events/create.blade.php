@extends('dashboard.admin.layouts.app')

@section('content')
    <style>
        .nav-tab-active {
            /* color: #f00; */
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Create Event</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Event Information</strong>
                </div>
                <div class="card-body">
                    <form id="createEventForm" method="POST" action="{{ route('events.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                {{-- <div class="form-group mb-3">
                                <label for="additional_images">Additional Images</label>
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <div class="card shadow mb-4">
                                                    <div class="card-header">
                                                        <strong>Browse or drop here</strong>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="drag-drop-area"></div>
                                                    </div> <!-- .card-body -->
                                                </div> <!-- .card -->
                                            </div> <!-- .col -->
                                        </div> <!-- .row -->
                                    </div>
                                </div> <!-- .row -->
                            </div> --}}
                                <h2 class="nav-tab-wrapper">
                                    {{-- <a href="#details" class="nav-tab nav-tab-active">First</a> --}}
                                </h2>
                                <hr />
                                <section id="tickets" class="tab-content">
                                    <div class="form-group mb-3">
                                        <label for="total_no_of_tickets">Total No. of Tickets</label>
                                        <input type="number" id="total_no_of_tickets"
                                            value="{{ old('total_no_of_tickets') }}" name="total_no_of_tickets"
                                            class="form-control" placeholder="Enter Total No of Tickets" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div>
                                            <label for="ticket_id">Tickets Type</label>
                                        </div>
                                        @foreach ($ticktes as $row)
                                            <input type="hidden" id="div-{{ $row->id }}"
                                                value="{{ $row->name }}" />
                                        @endforeach
                                        <select id="ticket_id" name="ticket_id[]" class="form-control select2" multiple>
                                            @foreach ($ticktes as $row)
                                                <option value="{{ $row->id }}"
                                                    data-name-{{ $row->id }}="{{ $row->name }}">
                                                    {{ $row->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div id="embed-div">
                                    </div>
                                    <div class="text-center">
                                        <a href="#details" class="nav-tab btn mb-2 btn-primary">Previous</a>
                                        <button type="button" data-current="tickets" data-next="settings"
                                            class="nav-tab btn mb-2 btn-primary">Next</button>
                                    </div>
                                </section>
                                <section id="details" class="tab-content active">
                                    <div class="form-group mb-3">
                                        <label for="user_id">Vendor</label>
                                        <select id="user_id" value="{{ old('user_id') }}" name="user_id"
                                            class="form-control" required>
                                            <option value="">Select Vendor</option>
                                            @foreach ($vendors as $vendor)
                                                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">Title</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                            class="form-control" placeholder="Enter event title" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="package_id">Package</label>
                                        <select id="package_id" value="{{ old('package_id') }}" name="package_id"
                                            class="form-control" required>
                                            <option value="">Select Package</option>
                                            @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">{{ $package->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="category_id">Category</label>
                                        <select id="category_id" value="{{ old('category_id') }}" name="category_id"
                                            class="form-control" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="venue">Venue</label>
                                        <select id="venue" name="venue" class="form-control" required>
                                            <option value="">Select Venue</option>
                                            @foreach ($countries as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        {{-- <input type="text" id="venue" value="{{ old('venue') }}" name="venue"
                                            class="form-control" placeholder="Enter Venue Name" required> --}}
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" value="{{ old('address') }}" name="address"
                                            class="form-control" placeholder="Enter Venue Address" required>
                                    </div>
                                    <div id="hash_dress_code" class="mb-3">
                                        <label for="dress_code">Dress Code</label><br>
                                        <input type="hidden" name="dress_code[]" value="{{ $row->title }}">
                                        <input type="text" id="dress_codeInput" class="form-control"
                                            placeholder="Add a new tag...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="description">Note</label>
                                        <textarea id="description" value="{{ old('description') }}" name="description" class="form-control"
                                            placeholder="Enter event description"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="form-group">
                                            <label for="eventType">Event type</label>
                                            <select id="eventType" value="{{ old('eventType') }}" name="eventType"
                                                class="form-control select2">
                                                <option value="private">Private</option>
                                                <option value="public">Public</option>
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
                                                <input type="date" class="form-control drgpicker" id="start_date"
                                                    value="{{ old('start_date') }}" name="start_date"
                                                    value="04/24/2020">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 timeFields">
                                            <label for="startDate">Start Time</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text" id="button-addon-time"><span
                                                            class="fe fe-clock fe-16"></span></div>
                                                </div>
                                                <input type="time" class="form-control time-input" id="start_time"
                                                    value="{{ old('start_time') }}" name="start_time"
                                                    placeholder="10:00 AM">
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
                                                <input type="date" class="form-control drgpicker" id="end_date"
                                                    value="{{ old('end_date') }}" name="end_date" value="04/24/2020">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 timeFields">
                                            <label for="endDate">End Time</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text" id="button-addon-time"><span
                                                            class="fe fe-clock fe-16"></span></div>
                                                </div>
                                                <input type="time" class="form-control time-input" id="end_time"
                                                    value="{{ old('end_time') }}" name="end_time"
                                                    placeholder="11:00 AM">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="all_day"
                                                value="{{ old('all_day') }}" name="all_day">
                                            <label class="custom-control-label" for="all_day">All day</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="status">Status</label>
                                        <select id="status" value="{{ old('status') }}" name="status"
                                            class="form-control" required>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="promotional_Video">Promotional Video</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="promotional_Video"
                                                value="{{ old('promotional_Video') }}" name="promotional_Video">
                                            <label class="custom-file-label" for="promotional_Video"
                                                id="promotional_Video_label">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="customFile">Banner</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile"
                                                value="{{ old('banner') }}" name="banner">
                                            <label class="custom-file-label" for="customFile"
                                                id="customFile_label">Choose
                                                file</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="additional_images">Additional Images</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input select2"
                                                id="additional_images" name="additional_images[]" multiple>
                                            <label class="custom-file-label" for="additional_images"
                                                id="additional_images_label">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="promotional_image">Promotional Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="promotional_image"
                                                name="promotional_image">
                                            <label class="custom-file-label" for="promotional_image"
                                                id="promotional_image_label">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" data-current="details" data-next="tickets"
                                            class="nav-tab btn mb-2 btn-primary">Next</button>
                                    </div>
                                </section>
                                <section id="settings" class="tab-content">
                                    <div class="p_30 bp-form main-form">
                                        <div class="form-group">
                                            <div class="ticket-section">
                                                <label class="form-label fs-16">Let's configure a few additional options
                                                    for your event!</label>
                                                <p class="mt-2 fs-14 d-block mb-3 pe_right">Change the following settings
                                                    based on your preferences to customise your event accordingly.</p>
                                                <div class="content-holder">
                                                    <div class="setting-item border_bottom pb_30 pt-4">
                                                        <div class="d-flex align-items-start">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    value="1" checked id="booking-start-time-btn"
                                                                    name="booking-start-time-btn">
                                                                <label class="custom-control-label"
                                                                    for="booking-start-time-btn"></label>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <label class="color-black fw-bold mb-1">I want the bookings
                                                                    to start immediately.</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Disable this option if
                                                                    you want to start your booking from a specific date and
                                                                    time.</p>
                                                            </div>
                                                        </div>
                                                        <div class="booking-start-time-holder" style="display: none;">
                                                            <div class="form-group pt_30">
                                                                <label class="form-label fs-16">Booking starts on</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Specify the date and
                                                                    time when you want the booking to start.</p>
                                                                <div class="row g-3">
                                                                    <div class="col-md-6">
                                                                        <label class="form-label mt-3 fs-6">Event
                                                                            Date.*</label>
                                                                        <div class="loc-group position-relative">
                                                                            <input
                                                                                class="form-control h_50 datepicker-here"
                                                                                data-language="en" type="date"
                                                                                name="booking_starts_on_date"
                                                                                placeholder="MM/DD/YYYY" value="">
                                                                            <span class="absolute-icon"><i
                                                                                    class="fa-solid fa-calendar-days"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="clock-icon">
                                                                            <label
                                                                                class="form-label mt-3 fs-6">Time</label>
                                                                            <input
                                                                                class="form-control h_50 datepicker-here"
                                                                                data-language="en" type="time"
                                                                                name="booking_starts_on_time"
                                                                                placeholder="10:30 AM">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setting-item border_bottom pb_30 pt_30">
                                                        <div class="d-flex align-items-start">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    value="1" checked id="booking-end-time-btn"
                                                                    name="booking-end-time-btn">
                                                                <label class="custom-control-label"
                                                                    for="booking-end-time-btn"></label>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <label class="color-black fw-bold mb-1">I want the bookings
                                                                    to continue until my event ends.</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Disable this option if
                                                                    you want to end your booking from a specific date and
                                                                    time.</p>
                                                            </div>
                                                        </div>
                                                        <div class="booking-end-time-holder" style="display: none;">
                                                            <div class="form-group pt_30">
                                                                <label class="form-label fs-16">Booking ends on</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Specify the date and
                                                                    time when you want the booking to start.</p>
                                                                <div class="row g-3">
                                                                    <div class="col-md-6">
                                                                        <label class="form-label mt-3 fs-6">Event
                                                                            Date.*</label>
                                                                        <div class="loc-group position-relative">
                                                                            <input
                                                                                class="form-control h_50 datepicker-here"
                                                                                data-language="en" type="date"
                                                                                placeholder="MM/DD/YYYY" value=""
                                                                                name="booking_ends_on_date">
                                                                            <span class="absolute-icon"><i
                                                                                    class="fa-solid fa-calendar-days"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="clock-icon">
                                                                            <label
                                                                                class="form-label mt-3 fs-6">Time</label>
                                                                            <input
                                                                                class="form-control h_50 datepicker-here"
                                                                                name="booking_ends_on_time"
                                                                                data-language="en" type="time"
                                                                                placeholder="10:30 AM">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setting-item border_bottom pb_30 pt_30">
                                                        <div class="d-flex align-items-start">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    value="1" checked id="passing-service-charge-btn"
                                                                    name="passing-service-charge-btn">
                                                                <label class="custom-control-label"
                                                                    for="passing-service-charge-btn"></label>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <label class="color-black fw-bold mb-1">I want my customers
                                                                    to pay the applicable service fees at the time when they
                                                                    make the bookings.</label>
                                                                <p class="mt-2 fs-14 d-block mb-0 pe_right">Passing your
                                                                    service charge means your attendees will pay your
                                                                    service charge in addition to the ticket price.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setting-item border_bottom pb_30 pt_30">
                                                        <div class="d-flex align-items-start">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    value="1" checked id="refund-policies-btn"
                                                                    name="refund-policies-btn">
                                                                <label class="custom-control-label"
                                                                    for="refund-policies-btn"></label>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <label class="color-black fw-bold mb-1">I do not wish to
                                                                    offer my customers with option to cancel their orders
                                                                    and receive refund.</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Disable this slider if
                                                                    you want to let your customers cancel their order and
                                                                    select a refund policy.</p>
                                                            </div>
                                                        </div>
                                                        <div class="refund-policies-holder" style="display:none;">
                                                            <div class="refund-policies-content border_top mt-4">
                                                                <div class="row grid-padding-8">
                                                                    <div class="col-md-12 mb-6">
                                                                        <div class="refund-method">
                                                                            <div class="form-group mb-0">
                                                                                <label
                                                                                    class="brn-checkbox-radio mb-0 mt-4">
                                                                                    <input type="radio"
                                                                                        name="refund_policy_id"
                                                                                        value="refund-id-1"
                                                                                        class="form-check-input br-checkbox refund-policy1 refund_policy_disable">
                                                                                    <span class="fs-14 fw-bold ms-xl-2">I
                                                                                        wish to offer my customers with
                                                                                        option to cancel their orders.
                                                                                        However, I will handle refund
                                                                                        manually.</span>
                                                                                    <span
                                                                                        class="ms-xl-4 d-block sub-label mt-2 mb-4">Select
                                                                                        this option if you want to refund
                                                                                        your customer manually.</span>
                                                                                </label>
                                                                                <div class="refund-input-content"
                                                                                    data-method="refund-id-1">
                                                                                    <div class="input-content mb-3">
                                                                                        <label
                                                                                            class="color-black mb-2 fs-14 fw-bold">Cancellation
                                                                                            must be made<span
                                                                                                class="red">*</span></label>
                                                                                        <div
                                                                                            class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                                            <div class="col-md-4 pl-0">
                                                                                                <div
                                                                                                    class="input-group mr-3 mx-width-135 input-number">
                                                                                                    <input type="number"
                                                                                                        min="0"
                                                                                                        max="30"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        name="cancel_before">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="input-sign ms-md-3 mt-3 mb-3">
                                                                                                days before the event</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="refund-method">
                                                                            <label class="brn-checkbox-radio mb-0 mt-4">
                                                                                <input type="radio"
                                                                                    name="refund_policy_id"
                                                                                    value="refund-id-2"
                                                                                    class="form-check-input br-checkbox refund-polic-2 refund_policy_disable">
                                                                                <span class="fs-14 fw-bold ms-xl-2">I wish
                                                                                    to offer my customers with option to
                                                                                    cancel their orders and receive refund
                                                                                    automatically.</span>
                                                                                <span
                                                                                    class="ms-xl-4 d-block sub-label mt-2 mb-4">Select
                                                                                    this option if you want to refund your
                                                                                    customer automatically.</span>
                                                                            </label>
                                                                            <div class="refund-input-content"
                                                                                data-method="refund-id-2">
                                                                                <div class="input-content mb-3">
                                                                                    <label
                                                                                        class="color-black mb-2 fs-14 fw-bold">Cancellation
                                                                                        must be made <span
                                                                                            class="red">*</span></label>
                                                                                    <div
                                                                                        class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                                        <div class="col-md-4">
                                                                                            <div
                                                                                                class="input-group input-number">
                                                                                                <input type="number"
                                                                                                    min="0"
                                                                                                    max="30"
                                                                                                    class="form-control"
                                                                                                    placeholder="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="input-sign ms-md-3 mt-3 mb-3">
                                                                                            days before the event</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-content mb-3">
                                                                                    <label
                                                                                        class="color-black mb-2 fs-14 fw-bold">Refund
                                                                                        amount <span
                                                                                            class="red">*</span></label>
                                                                                    <div
                                                                                        class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
                                                                                        <div class="col-md-4">
                                                                                            <div
                                                                                                class="input-group loc-group position-relative">
                                                                                                <input type="text"
                                                                                                    value=""
                                                                                                    name="refund_amount"
                                                                                                    class="form-control"
                                                                                                    placeholder="">
                                                                                                <span
                                                                                                    class="percentage-icon"><i
                                                                                                        class="fa-solid fa-percent"></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="input-sign ms-md-3 mt-3 mb-3">
                                                                                            days before the event</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setting-item border_bottom pb_30 pt_30">
                                                        <div class="d-flex align-items-start">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    value="1" checked id="ticket-instructions-btn"
                                                                    name="ticket-instructions-btn">
                                                                <label class="custom-control-label"
                                                                    for="ticket-instructions-btn"></label>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <label class="color-black fw-bold mb-1">I do not require
                                                                    adding any special instructions on the tickets.</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Use this space to
                                                                    provide any last minute checklists your attendees must
                                                                    know in order to attend your event. Anything you provide
                                                                    here will be printed on your ticket.</p>
                                                            </div>
                                                        </div>
                                                        <div class="ticket-instructions-holder" style="display:none;">
                                                            <div class="ticket-instructions-content mt-4">
                                                                <textarea class="form-control" placeholder="About" name="special_instructions"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setting-item pb-0 pt_30">
                                                        <div class="d-flex align-items-start">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    value="1" checked id="tags-btn"
                                                                    name="tags-btn">
                                                                <label class="custom-control-label"
                                                                    for="tags-btn"></label>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <label class="color-black fw-bold mb-1">I do not want to
                                                                    add tags in my event</label>
                                                                <p class="mt-2 fs-14 d-block mb-0">Use relevant words as
                                                                    your tags to improve the discoverability of your event.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="tags-holder" style="display:none;">
                                                            {{-- <div class="ticket-instructions-content tags-container mt-4">
                                                                <input class="form-control tags-input" type="text"
                                                                    placeholder="Type your tags and press enter">
                                                                <div class="tags-list" style="height: auto;">
                                                                    <!-- keywords go here -->
                                                                </div>
                                                            </div> --}}
                                                            {{-- <div id="hash_dress_code" class="mb-3">
                                                                <input type="hidden" name="dress_code[]"
                                                                    value="{{ $row->title }}">
                                                                <input type="text" id="dress_codeInput"
                                                                    class="form-control" placeholder="Add a new tag...">
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        {{-- <button type="button" data-prev="tickets" class="nav-tab btn mb-2 btn-primary">Previous</button> --}}
                                        <a href="#tickets" class="nav-tab btn mb-2 btn-primary">Previous</a>
                                        {{-- <button type="submit" class="btn mb-2 btn-primary" id="">Save
                                            Event</button> --}}
                                        <button type="submit" class="btn mb-2 btn-primary" id="saveEventBtn">Save
                                            Event</button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection


@section('bottom_script')
    <!-- Include FullCalendar JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.js"></script>

    <!-- Your custom JavaScript code using FullCalendar and AJAX -->
    <script>
        $(document).on('click', '.dress_code', function() {
            var dress_codeId = $(this).data('id');
            var isSelected = $(this).hasClass('badge-primary');
            if (isSelected) {
                $(this).next('input[name="dress_code[]"]').remove();
                $(this).removeClass('badge-primary').addClass('badge-secondary');
            } else {
                var dress_codeName = $(this).text().trim().replace('#', '');
                var newInput = $('<input type="hidden" name="dress_code[]" value="#' + dress_codeName +
                    '">');
                $('#hash_dress_code').append(newInput);
                $(this).removeClass('badge-secondary').addClass('badge-primary');
            }
        });

        $(document).on('click', '.dress_code', function() {
            var dress_codeId = $(this).data('id');
            var dress_codeInput = $(this).next('input[name="dress_code[]"]');
            if (dress_codeInput.length) {
                dress_codeInput.remove();
            }
            $(this).remove();
        });

        $('#dress_codeInput').keypress(function(event) {
            if (event.which === 13) {
                var newdress_codeName = $(this).val().trim();
                if (newdress_codeName) {
                    var newdress_codeId = 'random_' + Math.floor(Math.random() * 1000000);
                    var newdress_code = $('<span class="badge badge-primary dress_code badge-lg" data-id="' +
                        newdress_codeId +
                        '" style="font-size: 1.25em;">#' + newdress_codeName + '</span>');
                    $('#dress_codeInput').before(newdress_code);

                    var newInput = $('<input type="hidden" name="dress_code[]" value="#' + newdress_codeName +
                        '">');
                    $('#hash_dress_code').append(newInput);

                    $(this).val('');
                }
            }
        });

        $("#view-btn").click(function() {
            text = $(this).html();
            if (text == '<i class="fe fe-grid fe-16"></i> List View') {
                $(this).html("<i class='fe fe-calendar fe-16'></i> Calender View");
                $("#list-view").addClass("d-none");
                $("#calendar").removeClass("d-none");
            } else {
                $(this).html("<i class='fe fe-grid fe-16'></i> List View");
                $("#calendar").addClass("d-none");
                $("#list-view").removeClass("d-none");
            }
        });
        $(document).ready(function() {
            var calendarEl = document.getElementById('calendar');
            var eventsObject = {!! $events->filter(function ($event) {
                    return $event->start_date && $event->end_date;
                })->toJson() !!}; // Filter out events without start/end dates

            var events = Object.values(eventsObject); // Convert the events object to an array

            // Function to convert date strings to ISO 8601 format
            function convertToISODate(dateString) {
                var parts = dateString.split('/');
                return parts[2] + '-' + parts[0].padStart(2, '0') + '-' + parts[1].padStart(2, '0');
            }

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
                        start: convertToISODate(event.start_date),
                        end: convertToISODate(event.end_date),
                        allDay: true // Assuming all events are full-day events
                    };
                })
            });

            calendar.render();

            // Open the event modal when clicking the "New Event" button
            $('#openEventModal').click(function() {
                $('#eventModal').modal('show');
            });

            // Handle form submission via AJAX
            $('#saveEventBtn').click(function() {
                console.log('inn');
                var formData = new FormData($('#createEventForm')[0]);
                formData.append('all_day', $('#all_day').is(':checked') ? true : false);

                $.ajax({
                    url: '{{ route('events.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log('response', response);
                        // Convert date strings to ISO 8601 format
                        var startISO = convertToISODate(response.event.start_date);
                        var endISO = convertToISODate(response.event.end_date);

                        // Construct the new event object
                        var newEvent = {
                            title: response.event.name,
                            start: startISO,
                            end: endISO,
                            allDay: response.event
                                .all_day // Assuming this property exists in the response
                        };

                        // Add the new event to the calendar
                        calendar.addEvent(newEvent);

                        // Hide the event modal
                        $('#eventModal').modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        // You can handle error response here
                    }
                });
            });

            $('#all_day').change(function() {
                if ($(this).prop('checked')) {
                    $('.timeFields').hide();
                } else {
                    $('.timeFields').show();
                }
            });

            function convertToISODate(dateString) {
                var parts = dateString.split('/');
                return parts[2] + '-' + parts[0].padStart(2, '0') + '-' + parts[1].padStart(2, '0');
            }
        });
        // $("#ticket_id").change(function() {
        //     $("#embed-div").html();
        //     allTickets = $(this).val();
        //     html = '';
        //     $.each(allTickets, function(index, val) {
        //         id = val;
        //         html += '<div class="form-group mb-3">';
        //         html += '<h6>' + $('#div-' + val).val() + '</h6>'
        //         html += '<div class="form-row">';
        //         html += '<div class="form-group col-md-6">';
        //         html += '<label for="price-' + id + '">Price</label>';
        //         html += '<input type="number" class="form-control" name="price[]" required>';
        //         html += '</div>';
        //         html += '<div class="form-group col-md-6">';
        //         html += '<label for="quantity-' + id + '">Quantity</label>';
        //         html += '<input type="number" class="form-control" name="quantity[]" required>';
        //         html += '</div>';
        //         html += '</div>';
        //         html += '</div>';
        //     });
        //     $("#embed-div").html(html);
        // });
        $("#ticket_id").change(function() {
            $("#embed-div").html('');
            const allTickets = $(this).val();
            let html = '';
            $.each(allTickets, function(index, val) {
                const id = val;
                const ticketName = $('#div-' + val).val(); // Get the ticket name for display
                html += '<div class="form-group mb-3">';
                html += '<h6>' + ticketName + '</h6>';
                html += '<div class="form-row">';
                html += '<div class="form-group col-md-6" id="price-group-' + id + '">';
                html += '<label for="price-' + id + '">Price</label>';
                html += '<input type="number" class="form-control" name="price[]" required>';
                html += '</div>';
                html += '<div class="form-group col-md-6">';
                html += '<label for="quantity-' + id + '">Quantity</label>';
                html += '<input type="number" class="form-control" name="quantity[]" required>';
                html += '</div>';
                html += '</div>';
                html += '<div class="setting-item border_bottom pb_30 pt_30">';
                html += '<div class="d-flex align-items-start">';
                html += '<div class="custom-control custom-switch">';
                html +=
                    '<input type="checkbox" class="custom-control-input" value="1" checked id="ticket-price-btn-' +
                    id + '" name="ticket-price-btn-' + id + '">';
                html += '<label class="custom-control-label" for="ticket-price-btn-' + id + '"></label>';
                html += '</div>';
                html += '<div class="d-flex flex-column">';
                html += '<label class="color-black fw-bold mb-1">This ticket is free.</label>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            });
            $("#embed-div").html(html);

            $("input[type='checkbox'][id^='ticket-price-btn-']").change(function() {
                const toggleId = $(this).attr('id');
                const ticketId = toggleId.split('-').pop();
                const priceGroup = $("#price-group-" + ticketId);
                const priceInput = priceGroup.find("input[type='number']");

                if ($(this).is(':checked')) {
                    priceGroup.hide();
                    priceInput.prop('required', false);
                    priceInput.val(0);
                } else {
                    priceGroup.show();
                    priceInput.prop('required', true);
                    priceInput.val('');
                }
            });

            $("input[type='checkbox'][id^='ticket-price-btn-']").each(function() {
                $(this).change();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Allow selecting or deselecting options by clicking on tags
            $(document).on('click', '.tag', function() {
                var dressCodeId = $(this).data('id');
                var isSelected = $(this).hasClass('badge-primary');
                if (isSelected) {
                    $(this).removeClass('badge-primary').addClass('badge-secondary');
                } else {
                    $(this).removeClass('badge-secondary').addClass('badge-primary');
                }
            });

            // Add functionality to add a new tag when clicking on the "Add New" text
            $('#addNewTagText').click(function() {
                var newTagName = prompt('Enter the name for the new tag:');
                if (newTagName) {
                    // Generate a unique ID for the new tag
                    var newTagId = 'random_' + Math.floor(Math.random() * 1000000);
                    // Create the new tag
                    var newTag = $('<span class="badge badge-primary tag badge-lg" data-id="' + newTagId +
                        '" style="font-size: 1.25em;">' + newTagName + '</span>');
                    // Append the new tag after the last tag in the container
                    $('#dress_code_tags').append(newTag);

                    // Create a hidden input field for the new dress code name
                    var newInput = $('<input type="hidden" name="dress_code[]" value="' + newTagName +
                        '">');
                    // Append the new input field to the form
                    $('#dress_code_tags').append(newInput);
                }
            });

            // Update label text when a file is selected for promotional video
            $('#promotional_Video').on('change', function() {
                // Get the file name
                var fileName = $(this).val().split('\\').pop();
                // Update the label text
                $('#promotional_Video_label').text(fileName);
            });

            // Update label text when a file is selected for banner
            $('#customFile').on('change', function() {
                // Get the file name
                var fileName = $(this).val().split('\\').pop();
                // Update the label text
                $('#customFile_label').text(fileName);
            });

            // Update label text when files are selected for additional images
            $('#additional_images').on('change', function() {
                // Get the file names
                var files = $(this)[0].files;
                var fileNames = '';
                for (var i = 0; i < files.length; i++) {
                    fileNames += files[i].name;
                    if (i < files.length - 1) {
                        fileNames += ', ';
                    }
                }
                // Update the label text
                $('#additional_images_label').text(fileNames);
            });

            // Update label text when files are selected for promotional images
            $('#promotional_image').on('change', function() {
                // Get the file names
                var files = $(this)[0].files;
                var fileNames = '';
                for (var i = 0; i < files.length; i++) {
                    fileNames += files[i].name;
                    if (i < files.length - 1) {
                        fileNames += ', ';
                    }
                }
                // Update the label text
                $('#promotional_image_label').text(fileNames);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#package_id').on('change', function() {
                var packageId = $(this).val();
                var categorySelect = $('#category_id');
                console.log(packageId, 'packageIdpackageId');

                // Clear existing options
                categorySelect.empty().append('<option value="">Select Category</option>');

                // Fetch categories based on the selected package
                $.ajax({
                    url: '{{ route('get.categories', ':id') }}'.replace(':id', packageId),
                    data: {
                        packageId: packageId
                    }, // Pass the packageId as data
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(index, category) {
                            categorySelect.append('<option value="' + category.id +
                                '">' + category.title + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
    <script>
        var search = null;
        $("input").keyup(function() {
            search = $(this).val();
            fetchDataOnReady();
        });
        $(document).ready(function() {
            fetchDataOnReady();
        });

        function fetchDataOnClick(page) {
            console.log(page);
            $.ajax({
                url: "{{ route('events.index') }}",
                type: "GET",
                data: {
                    type: 'ajax',
                    page: page
                },
                success: function(response) {
                    console.log("Data fetched successfully on click:", response);
                    generateTableRows(response.data);
                    generatePagination(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data on click:", error);
                }
            });
        }

        function fetchDataOnReady() {
            $.ajax({
                url: "{{ route('events.index') }}",
                type: "GET",
                data: {
                    type: 'ajax',
                    search: search
                },
                success: function(response) {
                    console.log("Data fetched successfully on document ready:", response);
                    $('#user-table-body').empty();
                    generateTableRows(response.data);
                    generatePagination(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data on document ready:", error);
                }
            });
        }

        function generateTableRows(users) {
            var html = '';
            const currentUrl = window.location.href;
            $.each(users, function(index, user) {
                html += '<tr>';
                html += '<td>' + user.name + '</td>';
                html += '<td>' + user.eventType + '</td>';
                html += '<td>' + user.category.title + '</td>';
                html += '<td>' + user.start_date + ' ' + user.start_time + '<br/> ' + user.end_date + ' ' + user
                    .end_time + '</td>';
                html += '<td>';
                html +=
                    '  <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                html += '<span class="text-muted sr-only">Action</span>';
                html += '</button>';
                html += '<div class="dropdown-menu dropdown-menu-right shadow">';
                // html += '<a class="dropdown-item editEventBtn" href="' + currentUrl + '/' + user.id +
                html += '<a class="dropdown-item editEventBtn" data-id=" ' + user.id +
                    ' "><i class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>';
                // html += '<a class="dropdown-item" href="#"><i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove</a>';
                // html += '<a class="dropdown-item" href="#"><i class="fe fe-flag fe-12 mr-3 text-muted"></i>Assign</a>';
                html += '</div></td>';
                html += '</tr>';
            });
            $('#user-table-body').html(html);
        }
        pre = 0;
        nxt = 0;

        function generatePagination(response) {
            var html = '';
            if (response.prev_page_url) {
                pre = response.current_page - 1;
                html += '<li class="page-item"><a onclick="fetchDataOnClick(\'' + pre +
                    '\')" href="javascript:void(0);" class="page-link" >Previous</a></li>';
            }
            for (var i = 1; i <= response.last_page; i++) {
                html += '<li class="page-item ' + (i == response.current_page ? 'active' : '') +
                    '"><a class="page-link pg-btn" onclick="fetchDataOnClick(\'' + i + '\')" data-attr="page=' + i +
                    '" href="javascript:void(0);">' + i + '</a></li>';
            }
            if (response.next_page_url) {
                nxt = response.current_page + 1;
                html += '<li class="page-item"><a class="page-link" onclick="fetchDataOnClick(\'' + nxt +
                    '\')" href="javascript:void(0);">Next</a></li>';
            }
            $('#user-pagination').html(html);
        }

        // Handle click event for editing a product using event delegation
        $(document).on('click', '.editEventBtn', function() {
            var eventId = $(this).data('id');
            $.ajax({
                url: '{{ route('events.edit', ':id') }}'.replace(':id', eventId),
                type: 'GET',
                success: function(response) {
                    console.log('edit', response);

                    // Populate the edit form fields with event details
                    $('#edit_name').val(response.event.name);
                    $('#edit_package_id').val(response.event.package_id);
                    $('#edit_category_id').val(response.event.category_id);
                    $('#edit_total_no_of_tickets').val(response.event.total_no_of_tickets);
                    $('#edit_venue').val(response.event.venue);
                    $('#edit_address').val(response.event.address);
                    $('#edit_description').val(response.event.description);
                    $('#edit_eventType').val(response.event.eventType);
                    $('#edit_all_day').prop('checked', response.event.all_day);
                    $('#edit_status').val(response.event.status);

                    // Set dress code tags if available
                    var dressCode = response.event.dress_code;
                    if (dressCode) {
                        $('#edit_tag-values').val(dressCode);
                        var dressCodeTags = dressCode.split(',');
                        var tagContainer = $('#edit_tag-container');
                        tagContainer.empty();
                        dressCodeTags.forEach(function(tag) {
                            tagContainer.append('<span class="badge badge-primary mr-1">' + tag
                                .trim() + '</span>');
                        });
                    }

                    // Set start date and time
                    $('#edit_start_date').val(response.event.start_date);
                    $('#edit_start_time').val(response.event.start_time);

                    // Set end date and time
                    $('#edit_end_date').val(response.event.end_date);
                    $('#edit_end_time').val(response.event.end_time);

                    // Set additional images (if any)
                    var additionalImages = response.event.additional_images;
                    if (additionalImages && additionalImages.length > 0) {
                        var imagesLabel = $('#edit_additional_images_label');
                        imagesLabel.text(additionalImages.length + ' files selected');
                    }

                    // Show the edit modal
                    $('#editEventModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    $('#productMessage').html(
                        '<div class="alert alert-danger" role="alert">Failed to fetch event details for editing</div>'
                    );
                }
            });
        });

        $('.nav-tab').click(function(e) {
            $(this).addClass('nav-tab-active').siblings().removeClass('nav-tab-active');

            $($(this).attr('href')).addClass('active').siblings().removeClass('active');
        });

        $(document).ready(function() {
            $('#createEventForm').on('keypress', function(e) {
                if (e.which === 13) {
                    e.preventDefault();
                }
            });

            $('#booking-start-time-btn').change(function() {
                if ($(this).is(':checked')) {
                    $('.booking-start-time-holder').hide();
                } else {
                    $('.booking-start-time-holder').show();
                }
            });

            $('#booking-end-time-btn').change(function() {
                if ($(this).is(':checked')) {
                    $('.booking-end-time-holder').hide();
                } else {
                    $('.booking-end-time-holder').show();
                }
            });

            $('#refund-policies-btn').change(function() {
                if ($(this).is(':checked')) {
                    $('.refund-policies-holder').hide();
                    $('.refund_policy_disable').prop('disabled', true).removeAttr(
                        'required');
                } else {
                    $('.refund-policies-holder').show();
                    $('.refund_policy_disable').prop('disabled', false).attr('required',
                        'required');
                }
            });

            $('#ticket-instructions-btn').change(function() {
                if ($(this).is(':checked')) {
                    $('.ticket-instructions-holder').hide();
                } else {
                    $('.ticket-instructions-holder').show();
                }
            });

            $('#tags-btn').change(function() {
                if ($(this).is(':checked')) {
                    $('.tags-holder').hide();
                } else {
                    $('.tags-holder').show();
                }
            });
        });

        // validation
        $(document).ready(function() {
            $(".nav-tab").click(function(e) {
                // e.preventDefault(); // Stop default tab switch behavior

                let currentTab = $(this).closest(".tab-content"); // Get current tab section
                let targetTab = $(this).attr("href"); // Get target tab ID
                let isValid = true;
                var currentTabId = $(this).data("current");
                var nextTab = $(this).data("next");

                // Validate required fields in the current tab
                currentTab.find("[required]").each(function() {
                    if (!$(this).val().trim()) {
                        isValid = false;
                        $(this).addClass("is-invalid"); // Highlight empty fields
                    } else {
                        $(this).removeClass("is-invalid"); // Remove highlight if valid
                    }
                });
                console.log('okok', currentTabId, nextTab);

                if (isValid) {
                    $("#" + currentTabId).removeClass("active");
                    $("#" + nextTab).addClass("active");
                }
            });
        });
    </script>
@endsection
