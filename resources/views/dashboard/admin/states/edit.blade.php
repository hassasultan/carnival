@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Edit State</h2>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">State Information</strong>
            </div>
            <div class="card-body">
                <form id="editStateForm" method="POST" action="{{ route('states.update', $state->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="country_id">Country</label>
                                <select id="country_id" name="country_id" class="form-control" required>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" {{ $state->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $state->name }}" placeholder="Enter state name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                <input type="text" id="code" name="code" class="form-control" value="{{ $state->code }}" placeholder="Enter state code" required>
                            </div>
                            <button type="submit" id="updateStateBtn" class="btn btn-primary">Update State</button>
                            <div id="successMessage" class="alert alert-success mt-3" style="display: none;"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- / .card -->
    </div> <!-- .col-12 -->
</div> <!-- .row -->

@endsection

@section('bottom_script')
<script>
    $(document).ready(function() {
        $('#editStateForm').submit(function(e) {
            e.preventDefault(); // Prevent form submission
            
            // Serialize form data
            var formData = $(this).serialize();
            
            // Submit form via AJAX
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    window.location.href = `{{ route('states.index') }}`;
                    // Show success message
                    $('#successMessage').html('State updated successfully.').show();
                    // Hide success message after 3 seconds
                    setTimeout(function() {
                        $('#successMessage').hide();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection
