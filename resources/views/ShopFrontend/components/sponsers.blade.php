<!-- block-brand -->
<div class="block-brand-op6">
    <div class="container">
        <div class="block-title">
            <span class="title"><h2 style="border-bottom: 3px solid #f36">Sponsers</h2></span>
        </div>
        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="2" data-loop="true"
            data-responsive='{
            "0":{"items":3},
            "480":{"items":4},
            "600":{"items":5},
            "992":{"items":7}
        }'>
            @foreach ($user->sponsors as $row)
                <div class="item">
                    <a href=""><img src="{{ asset($row->logo) }}" alt="{{ $row->title }}"></a>
                </div>
            @endforeach

        </div>
    </div>
</div><!-- block-brand -->
