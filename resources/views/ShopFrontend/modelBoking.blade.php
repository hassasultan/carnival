@extends('ShopFrontend.Layouts.layout')

@section('title')
    Contact Us
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection

@section('main')
    <main class="site-main">

        <div class="columns container">

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active">Contact</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2">Contact Us</span>
            </h2>

            <div class="page-content" id="contact">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="page-subheading">CONTACT FORM</h3>
                        <div class="contact-form-box">
                            <form id="contactForm">
                                @csrf
                                <input type="hidden" name="model_id" value="{{ $model_id }}">
                                <div class="form-selector">
                                    <label>Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control input-sm"
                                        required>
                                    <span id="subject-error" class="text-danger"></span>
                                </div>
                                <div class="form-selector">
                                    <label>Email address</label>
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                        required>
                                    <span id="email-error" class="text-danger"></span>
                                </div>
                                <div class="form-selector">
                                    <label>Phone</label>
                                    <input type="tel" name="phone" id="phone" class="form-control input-sm"
                                        required>
                                    <span id="phone-error" class="text-danger"></span>
                                </div>
                                <div class="form-selector">
                                    <label>Message</label>
                                    <textarea name="message" id="message" rows="10" class="form-control input-sm" required></textarea>
                                    <span id="message-error" class="text-danger"></span>
                                </div>
                                <div class="form-selector">
                                    <button type="submit" class="btn">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="contact_form_map" class="col-xs-12 col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault();

                // Clear previous error messages
                $('.text-danger').text('');

                const formData = $(this).serialize();

                $.ajax({
                    url: '{{ route('model.booking.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Show a success popup
                        Swal.fire({
                            icon: 'success',
                            title: 'Message sent successfully!',
                            text: response
                                .message, // You can customize the message from the server
                            confirmButtonText: 'OK'
                        });

                        // Reset the form
                        $('#contactForm')[0].reset();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            if (errors.subject) {
                                $('#subject-error').text(errors.subject[0]);
                            }
                            if (errors.email) {
                                $('#email-error').text(errors.email[0]);
                            }
                            if (errors.phone) {
                                $('#phone-error').text(errors.phone[0]);
                            }
                            if (errors.message) {
                                $('#message-error').text(errors.message[0]);
                            }
                        } else {
                            // Show an error popup
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'An error occurred. Please try again.',
                                confirmButtonText: 'Try Again'
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
