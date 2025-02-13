@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Create State</h2>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">State Information</strong>
            </div>
            <div class="card-body">
                <form id="createStateForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="country_id">Country</label>
                                <select id="country_id" name="country_id" class="form-control" required>
                                    <option value="">Select</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter state name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="code">Code</label>
                                <input type="text" id="code" name="code" class="form-control" placeholder="Enter state code" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create State</button>
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
        $('#createStateForm').submit(function(e) {
            e.preventDefault();
            
            var formData = $(this).serialize();
            
            $.ajax({
                type: 'POST',
                url: `{{ route('states.store') }}`,
                data: formData,
                success: function(response) {
                    window.location.href = `{{ route('states.index') }}`;
                    $('#createStateForm')[0].reset();
                    $('#successMessage').html('New state created successfully.').show();
                    setTimeout(function() {
                        $('#successMessage').hide();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

            return false;
        });
    });
</script>
@endsection
