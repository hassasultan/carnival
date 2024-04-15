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

                        <div class="form-group">
                            <label for="appointment_datetime">Date & Time</label>
                            <input id="appointment_datetime" type="datetime-local" class="form-control"
                                name="appointment_datetime" value="{{ $appointment->appointment_datetime }}" required>
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

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#appointmentForm').submit(function(e) {
                e.preventDefault();

                var serviceId = $('#service_id').val();
                var appointmentDatetime = $('#appointment_datetime').val();

                // Basic frontend validation
                if (!serviceId || !appointmentDatetime) {
                    alert('Please fill in all required fields.');
                    return;
                }

                // Ajax call to check appointment conflicts
                $.ajax({
                    type: 'POST',
                    url: '{{ route('appointments.check-conflict') }}',
                    data: {
                        service_id: serviceId,
                        appointment_datetime: appointmentDatetime
                    },
                    success: function(response) {
                        if (response.conflict) {
                            alert(
                                'Appointment conflicts with existing appointment. Please choose another date & time.'
                            );
                        } else {
                            $('#appointmentForm')[0].submit();
                        }
                    }
                });
            });
        });
    </script>
@endpush
