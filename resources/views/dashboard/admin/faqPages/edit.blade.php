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
                    <form method="POST" action="{{ route('faqs_page.update', $faq->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="page">Page</label>
                                    <select id="page" name="page" class="form-control" required>
                                        <option value="" selected disabled>Select Page</option>
                                        <option value="AboutUs" @if($faq->page == 'AboutUs') selected @endif>About Us</option>
                                        <option value="ContactUs" @if($faq->page == 'ContactUs') selected @endif>Contact Us</option>
                                        {{-- <option value="Mascamp" selected>Mascamp</option>
                                        <option value="Product" selected>Product</option> --}}
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="question">Question</label>
                                    <input type="text" id="question" name="question" value="{{ $faq->question }}" class="form-control"
                                        placeholder="Enter FAQ question" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="answer">Answer</label>
                                    <textarea id="answer" name="answer" class="form-control" rows="4" value="{{ $faq->answer }}" placeholder="Enter FAQ answer" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1" @if($faq->status == '1') selected @endif>Active</option>
                                        <option value="0" @if($faq->status == '0') selected @endif>Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update FAQ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection
