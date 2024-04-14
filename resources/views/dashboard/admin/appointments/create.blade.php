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
        <h2 class="page-title">Create Appointment</h2>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Appointment Information</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('appointments.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="service_id">Service</label>
                        <input id="service_id" type="text" class="form-control" name="service_id" required>
                    </div>

                    <div class="form-group">
                        <label for="appointment_datetime">Date & Time</label>
                        <input id="appointment_datetime" type="datetime-local" class="form-control" name="appointment_datetime" required>
                    </div>

                    <div class="form-group">
                        <label for="notes">Notes</label>
                        <textarea id="notes" class="form-control" name="notes"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection