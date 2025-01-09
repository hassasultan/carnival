@if ($type == 'costume')
    @foreach ($data as $key => $row)
    {{ dd($row->title) }}
        <div class="hotel-line clearfix">
            <a class="hotel-img black-hover" href="#">
                <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg" alt="">
                <div class="tour-layer delay-1">
                </div>
            </a>
            <div class="hotel-line-content">
                <a class="hotel-line-title" href="#">{{ $key }}. {{ $row->title }}</a>
                <div class="rate-wrap">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 Rewies</i>
                </div>
                <div class="hotel-line-price">
                    from $273</div>
            </div>
        </div>
    @endforeach
@elseif($type == 'events')
    @foreach ($data as $key => $row)
        <div class="hotel-line clearfix">
            <a class="hotel-img black-hover" href="#">
                <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg" alt="">
                <div class="tour-layer delay-1">
                </div>
            </a>
            <div class="hotel-line-content">
                <a class="hotel-line-title" href="#">{{ $key }}. {{ $row->name }}</a>
                <div class="rate-wrap">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 Rewies</i>
                </div>
                <div class="hotel-line-price">
                    from $273</div>
            </div>
        </div>
    @endforeach
@elseif($type == 'flight')
    <div class="hotel-line clearfix">
        <a class="hotel-img black-hover" href="#">
            <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg" alt="">
            <div class="tour-layer delay-1">
            </div>
        </a>
        <div class="hotel-line-content">
            <a class="hotel-line-title" href="#">1. luxury
                Hotel</a>
            <div class="rate-wrap">
                <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                </div>
                <i>485 Rewies</i>
            </div>
            <div class="hotel-line-price">
                from $273</div>
        </div>
    </div>
@elseif($type == 'hotel')
    <div class="hotel-line clearfix">
        <a class="hotel-img black-hover" href="#">
            <img class="img-responsive" src="https://carnivalguide.co/travel/images/hotelroomt.jpg" alt="">
            <div class="tour-layer delay-1">
            </div>
        </a>
        <div class="hotel-line-content">
            <a class="hotel-line-title" href="#">1. luxury
                Hotel</a>
            <div class="rate-wrap">
                <div class="rate">
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                    <span class="fa fa-star color-yellow"></span>
                </div>
                <i>485 Rewies</i>
            </div>
            <div class="hotel-line-price">
                from $273</div>
        </div>
    </div>
@endif
