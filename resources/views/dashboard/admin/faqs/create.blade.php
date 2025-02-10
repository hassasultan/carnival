@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Create FAQ</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">FAQ Information</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('faqs.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="model">Model</label>
                                    <select id="model" name="modelable_type" class="form-control" required>
                                        <option value="" selected disabled>Select Model</option>
                                        <option value="EventsCountryTab" selected>EventsCountryTab</option>
                                        <option value="Mascamp" selected>Mascamp</option>
                                        <option value="Product" selected>Product</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="model">Select EventsCountryTab</label>
                                    <select id="model" name="modelable_id" class="form-control" required>
                                        <option value="" selected disabled>Select Model</option>
                                        @foreach ($modelVal as $item)
                                            <option value="{{ $item->id }}" selected>{{ $item->tab }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="question">Question</label>
                                    <input type="text" id="question" name="question" class="form-control"
                                        placeholder="Enter FAQ question" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="answer">Answer</label>
                                    <textarea id="answer" name="answer" class="form-control" rows="4" placeholder="Enter FAQ answer" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create FAQ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection
