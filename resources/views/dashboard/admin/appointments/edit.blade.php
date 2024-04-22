@extends('dashboard.admin.layouts.app')

@section('content')
    <style>
        .img-preview {
            max-width: 100%;
            height: auto;
            margin-top: 5px;
        }

        .delete-button {
            background: none;
            border: none;
            color: red;
            cursor: pointer;
            font-size: 1.2rem;
            margin-left: 5px;
        }

        .slot-container {
            margin-bottom: 10px;
        }

        /* .slot-input {
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .slot-input input {
                                                        flex-grow: 1;
                                                    }

                                                    .slot-input button {
                                                        margin-left: 5px;
                                                    } */
    </style>
    <style>
        .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Appointment</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Appointment Information</strong>
                </div>
                <div class="card-body">
                    <form id="appointmentForm" method="POST" action="{{ route('appointments.update', $appointment->id) }}">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                        <div class="form-group">
                            <label for="service_id">Service</label>
                            <select id="service_id" type="text" class="form-control" name="service_id" required>
                                <option value="">Select</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ $appointment->service_id == $service->id ? 'selected' : '' }}>
                                        {{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="slot-container">
                            @foreach ($appointment->slots as $slot)
                                <div class="form-group slot-input">
                                    <label for="appointment_datetime">Slot #{{ $loop->iteration }}</label>
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <input class="datetime-local form-control" type="datetime-local"
                                                name="appointment_datetime[]" value="{{ $slot->datetime }}" required>
                                        </div>
                                        <div class="col-sm-1">
                                            @if ($loop->iteration === 1)
                                                <button type="button" id="addSlot" class="btn btn-primary plus-btn">+</button>
                                            @else
                                                <button type="button" class="btn btn-danger minus-btn">-</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="notes">Notes</label>
                            <textarea id="notes" class="form-control" name="notes">{{ $appointment->notes }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom_script')
    <script>
        $(document).ready(function() {
            var slotNumber = {{ $appointment->slots->count() }} + 1; // Initialize slot number

            // Function to add a new input field with the appropriate button
            function addSlot() {
                var slotContainer = $('.slot-container');
                var buttonHtml = '<button type="button" class="btn btn-danger minus-btn">-</button>';
                var slotInput =
                    '<div class="form-group slot-input"><label for="appointment_datetime">Slot #' + slotNumber +
                    '</label><div class="row"><div class="col-sm-11"><input class="datetime-local form-control" type="datetime-local" name="appointment_datetime[]" required></div><div class="col-sm-1">' +
                    buttonHtml + '</div></div></div>';
                slotContainer.append(slotInput);
                slotNumber++; // Increment slot number for the next slot
            }

            // Add a new slot when plus button is clicked
            $(document).on('click', '.plus-btn', function() {
                var isValid = true;
                $('.datetime-local').each(function() {
                    if (!$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid'); // Mark the empty input field as invalid
                        $(this).closest('.form-group').append(
                            '<div class="invalid-feedback">Please fill this first.</div>'
                        ); // Append the error message next to the input field
                        return false; // Exit the loop early if any slot is not filled
                    }
                });

                if (isValid) {
                    addSlot();
                }
            });

            $(document).on('click', '.minus-btn', function() {
                $(this).closest('.slot-input').remove();
                updateSlotNumbers();
            });

            function updateSlotNumbers() {
                $('.slot-input').each(function(index) {
                    var slotNumber = index + 1;
                    $(this).find('label').text('Slot #' + slotNumber);
                });
            }

            if (!$('#service_id').val()) {

                $('.datetime-local').attr('disabled', true);
                $('.plus-btn').attr('disabled', true);
            }

            $(document).on('change', '#service_id', function() {
                $('.datetime-local').attr('disabled', false);
                $('.plus-btn').attr('disabled', false);
            });

            // datetime validation
            $(document).on('change', '.datetime-local', function() {
                var appointmentDatetime = $(this).val();
                var serviceId = $('#service_id').val();
                var $inputField = $(this); // Store reference to the input field

                // Remove any existing error styling for this field
                $inputField.removeClass('is-invalid');

                // Basic frontend validation
                if (!serviceId) {
                    return; // Do nothing if service is not selected
                }

                // If appointmentDatetime is empty, mark the field as invalid
                if (!appointmentDatetime) {
                    $inputField.closest('.form-group').find('.invalid-feedback').remove();
                    $inputField.addClass('is-invalid');
                    $inputField.closest('.form-group').append(
                        '<div class="invalid-feedback">Please fill this first.</div>');
                    return;
                }

                // Ajax call to check appointment conflicts
                $.ajax({
                    type: 'POST',
                    url: '{{ route('appointments.check-conflict') }}',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        service_id: serviceId,
                        appointment_datetime: appointmentDatetime
                    },
                    success: function(response) {
                        // Remove any existing error message and invalid class
                        $inputField.removeClass('is-invalid');
                        $inputField.closest('.form-group').find('.invalid-feedback').remove();

                        if (response.conflict) {
                            // Mark input field as invalid and show error message
                            $inputField.val('');
                            $inputField.addClass('is-invalid');
                            $inputField.closest('.form-group').append(
                                '<div class="invalid-feedback">Appointment conflicts with existing appointment. Please choose another date & time.</div>'
                            );
                        }
                    },
                    error: function() {
                        // Handle error here
                    }
                });
            });
        });
    </script>
@endsection
