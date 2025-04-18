<!-- block-brand -->
<div class="block-brand-op6">
    <div class="container">
        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="2" data-loop="true"
            data-responsive='{
            "0":{"items":3},
            "480":{"items":4},
            "600":{"items":5},
            "992":{"items":7}
        }'>
            @foreach ($user->sponsors as $row)
                <div class="item">
                    <a href=""><img src="{{ asset('sponser_images/' . $row->logo) }}" alt="brand"></a>
                </div>
            @endforeach

        </div>
    </div>
</div><!-- block-brand -->
