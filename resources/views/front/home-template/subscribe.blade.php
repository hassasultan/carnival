<div class="main-wraper padd-90 background-block" style="background-image: url({{ asset('assets/images/bg_block_1.jpg') }});">
    <img class="center-image" src="{{ asset('assets/images/bg_block_1.jpg') }}" alt="" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-white underline">subscribe</h4>
                    <h2 class="color-white">let’s subscribe</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <form class="subscribe-form" action="#">
                    <div class="subscribe-input input-style-1 input-style-2 fl">
                        <input type="email" required="" placeholder="Enter your email">
                    </div>
                    <button type="submit"
                        class="c-button b-60 bg-blue-2 hv-blue-2-o fr"><span>subscribe</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.subscribe-form').on('submit', function(e) {
            e.preventDefault();
            let email = $(this).find('input').val();
            
            $.ajax({
                url: "{{ route('subscribe.store') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email
                },
                success: function(response) {
                    // alert(response.success);
                    $('.subscribe-form')[0].reset();
                },
                error: function(xhr) {
                    alert(xhr.responseJSON.errors.email[0]);
                }
            });
        });
    });
</script>