@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Event</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Event Information</strong>
                </div>
                <div class="card-body">
                    <form id="editEventForm">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="edit_name">Title</label>
                                    <input type="text" id="edit_name" name="name" class="form-control"
                                        placeholder="Enter event title" value="" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_package_id">Package</label>
                                    <select id="edit_package_id" name="package_id" class="form-control" required>
                                        <option value="">Select Package</option>
                                        @foreach ($packages as $package)
                                            <option value="{{ $package->id }}">
                                                {{-- {{ $package->id == $event->package_id ? 'selected' : '' }}> --}}
                                                {{ $package->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_category_id">Category</label>
                                    <select id="edit_category_id" name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{-- {{ $category->id == $event->category_id ? 'selected' : '' }}> --}}
                                                {{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_total_no_of_tickets">Total No. of Tickets</label>
                                    <input type="number" id="edit_total_no_of_tickets" name="total_no_of_tickets"
                                        class="form-control" placeholder="Enter Total No of Tickets" value=""
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_venue">Venue</label>
                                    <select id="venue" name="venue" class="form-control" required>
                                        <option value="">Select Venue</option>
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" id="edit_venue" name="venue" class="form-control"
                                        placeholder="Enter Venue Name" value="" required> --}}
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_address">Address</label>
                                    <input type="text" id="edit_address" name="address" class="form-control"
                                        placeholder="Enter Venue Address" value="" required>
                                </div>
                                <div id="edit_dress_code_tags" class="mb-3">
                                    <label for="edit_dress_code">Dress Code</label><br>
                                    <div id="edit_tag-container">
                                        <!-- Include dress code tags here -->
                                    </div>
                                    <input type="text" id="edit_tag-input" class="form-control"
                                        placeholder="Type and press Enter to add tag" required>
                                    <input type="hidden" id="edit_tag-values" name="dress_code[]" value="">
                                </div>
                                <!-- Include other fields similarly -->
                                <div class="form-group mb-3">
                                    <label for="edit_description">Note</label>
                                    <textarea id="edit_description" name="description" class="form-control" placeholder="Enter event description"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <div>
                                        <label for="edit_eventType">Event type</label>
                                    </div>
                                    <select id="edit_eventType" name="eventType" class="form-control select2">
                                        {{-- <option value="private" {{ $event->eventType == 'private' ? 'selected' : '' }}> --}}
                                        <option value="private">
                                            Private</option>
                                        {{-- <option value="public" {{ $event->eventType == 'public' ? 'selected' : '' }}> --}}
                                        <option value="public">
                                            Public</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <!-- Include start date and time fields -->
                                </div>
                                <div class="form-row">
                                    <!-- Include end date and time fields -->
                                </div>
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="edit_all_day"
                                            name="all_day">
                                        {{-- name="all_day" {{ $event->all_day ? 'checked' : '' }}> --}}
                                        <label class="custom-control-label" for="edit_all_day">All day</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_status">Status</label>
                                    <select id="edit_status" name="status" class="form-control" required>
                                        {{-- <option value="active" {{ $event->status == 'active' ? 'selected' : '' }}>Active --}}
                                        <option value="active">Active
                                        </option>
                                        {{-- <option value="inactive" {{ $event->status == 'inactive' ? 'selected' : '' }}> --}}
                                        <option value="inactive">
                                            Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_promotional_Video">Promotional Video</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="edit_promotional_Video"
                                            name="promotional_Video">
                                        <label class="custom-file-label" for="edit_promotional_Video"
                                            id="edit_promotional_Video_label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_customFile">Banner</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="edit_customFile"
                                            name="banner">
                                        <label class="custom-file-label" for="edit_customFile"
                                            id="edit_customFile_label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit_additional_images">Additional Images</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input select2"
                                            id="edit_additional_images" name="additional_images[]" multiple>
                                        <label class="custom-file-label" for="edit_additional_images"
                                            id="edit_additional_images_label">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="promotional_image">Promotional Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input"
                                            id="promotional_image" name="promotional_image">
                                        <label class="custom-file-label" for="promotional_image"
                                            id="promotional_image_label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn mb-2 btn-primary">Update Event</button>
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
        function createTag(text) {
            var tag = document.createElement('div');
            tag.classList.add('tag');
            tag.textContent = text;
            var hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'dress_code[]';
            hiddenInput.value = text;
            tag.addEventListener('click', function() {
                tag.remove();
                hiddenInput.remove();
            });
            var removeBtn = document.createElement('span');
            removeBtn.classList.add('tag-remove');
            removeBtn.textContent = '×';
            removeBtn.addEventListener('click', function(event) {
                event.stopPropagation();
                tag.remove();
                hiddenInput.remove();
            });

            tag.appendChild(removeBtn);
            document.getElementById("dress_code_tags").appendChild(hiddenInput);
            return tag;
        }
        document.getElementById('tag-input').addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && this.value.trim() !== '') {
                var tagText = this.value.trim();
                var tagContainer = document.getElementById('tag-container');
                var tag = createTag(tagText);
                tagContainer.appendChild(tag);
                this.value = '';
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
                var formData = new FormData($('#createEventForm')[0]);
                formData.append('all_day', $('#all_day').is(':checked') ? true : false);

                $.ajax({
                    url: '{{ route('events.store') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
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
        $("#ticket_id").change(function() {
            $("embed-div").html();
            allTickets = $(this).val();
            html = '';
            $.each(allTickets, function(index, val) {
                id = val;
                html += '<div class="form-group mb-3">';
                html += '<h6>' + $('#div-' + val).val() + '</h6>'
                html += '<div class="form-row">';
                html += '<div class="form-group col-md-6">';
                html += '<label for="price-' + id + '">Price</label>';
                html += '<input type="number" class="form-control" name="price[]" required>';
                html += '</div>';
                html += '<div class="form-group col-md-6">';
                html += '<label for="quantity-' + id + '">Quantity</label>';
                html += '<input type="number" class="form-control" name="quantity[]" required>';
                html += '</div>';
                html += '</div>';
                html += '</div>';
            });
            $("#embed-div").html(html);
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
    </script>
@endsection
