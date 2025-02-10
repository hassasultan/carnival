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
                    <form method="POST" action="{{ route('faqs.update', $faq->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3 d-none">
                                    <label for="model">Model</label>
                                    <select id="model" name="modelable_type" class="form-control" required>
                                        <option value="" selected disabled>Select Model</option>
                                        <option value="EventsCountryTab" @if($faq->modelable_type) selected @endif>EventsCountryTab</option>
                                        <option value="Mascamp" @if($faq->modelable_type) selected @endif>Mascamp</option>
                                        <option value="Product" @if($faq->modelable_type) selected @endif>Product</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="model">Select EventsCountryTab</label>
                                    <select id="model" name="modelable_id" class="form-control" required>
                                        <option value="" selected disabled>Select Model</option>
                                        @foreach ($modelVal as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($item->id == $faq->modelable_id) selected @endif>{{ $item->tab }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="question">Question</label>
                                    <input type="text" id="question" name="question" class="form-control"
                                        placeholder="Enter FAQ question" value="{{ $faq->question }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="answer">Answer</label>
                                    <textarea id="answer" name="answer" class="form-control" rows="4" placeholder="Enter FAQ answer" required>{{ $faq->answer }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1" @if ($faq->status == 1) selected @endif>Active</option>
                                        <option value="0" @if ($faq->status == 0) selected @endif>Inactive</option>
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
