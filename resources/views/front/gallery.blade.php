@extends('front.layouts.app')
@section('front-content')
    <!-- INNER-BANNER -->
    <div class="inner-banner style-6">
        <img class="center-image" src="https://carnivalguide.co/travel/img/gallery/bg_1a.jpg" alt="">
        <div class="vertical-align">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                        <ul class="banner-breadcrumb color-white clearfix">
                            <li><a class="link-blue-2" href="#">home</a> /</li>
                            <li><span>gallery #2</span></li>
                        </ul>
                        <h2 class="color-white">gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM -->
    <div class="main-wraper padd-70-70">
        <div class="container">
            <div class="filter style-2">
                <ul class="filter-nav">
                    <li class="selected"><a href="#all" data-filter="*">all</a></li>
                    <li><a href="#tours" data-filter=".tours">Fetes</a></li>
                    <li><a href="#cruises" data-filter=".cruises">Parade</a></li>
                    <li><a href="#flights" data-filter=".flights">Jouvert</a></li>
                    <li><a href="#hotels" data-filter=".hotels">carnival nomads</a></li>
                </ul>
            </div>
            <div class="filter-content row">
                <div class="grid-sizer col-mob-12 col-xs-6 col-sm-2"></div>
                {{-- <div class="item hotels gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/117626778_1229935794035821_7064177164126065243_n.jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>monaco, monte carlo</b></h4>
                            <h5>sea tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item hotels gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/117626778_1229935794035821_7064177164126065243_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>paris, france</b></h4>
                            <h5>mountain tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item hotels gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/118645422_3749137148448663_4028927880612375300_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>santorini, Greece</b></h4>
                            <h5>sea tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item flights gal-item style-3 gal-big col-mob-12 col-xs-6 col-sm-6">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/125780650_2766819066918889_581481012151053084_n.jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>rome, italy</b></h4>
                            <h5>honeymoon tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item flights gal-item style-3 gal-big col-mob-12 col-xs-6 col-sm-6">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/151408319_156631539504740_3598813682156640165_n.jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>monte carlo</b></h4>
                            <h5>mountain tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item cruises gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/186420166_1862677723911066_6215776166720226814_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>andora</b></h4>
                            <h5>mountain tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item cruises gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/120149446_986839835167777_2596333811458437801_n.jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>monaco, paris</b></h4>
                            <h5>mountain tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item cruises gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/125780650_2766819066918889_581481012151053084_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>venice, italy</b></h4>
                            <h5>sea tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item tours gal-item style-3 gal-big col-mob-12 col-xs-6 col-sm-6">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/125780650_2766819066918889_581481012151053084_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>monte carlo</b></h4>
                            <h5>honeymoon tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item tours gal-item style-3 gal-big col-mob-12 col-xs-6 col-sm-6">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/89864616_830889917393312_2125513439436373384_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>rome, italy</b></h4>
                            <h5>sea tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item tours gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/35928280_490239771409161_1172780011749376000_n.jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>santorini, Greece</b></h4>
                            <h5>sea tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item tours gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/131915587_2754181368178585_1416794744601671232_n[1].jpg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>monaco, monte carlo</b></h4>
                            <h5>honeymoon tours</h5>
                        </div>
                    </a>
                </div>
                <div class="item tours gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                    <a class="black-hover" href="gallery_detail.html">
                        <div class="gal-item-icon">
                            <img class="img-full img-responsive"
                                src="https://carnivalguide.co/travel/img/gallery/1_0WLICTmuCQg2pTrrKTo8Nw@2x.jpeg"
                                alt="">
                            <div class="tour-layer delay-1"></div>
                            <div class="vertical-align">
                                <span class="c-button small bg-white delay-2"><span>view more</span></span>
                            </div>
                        </div>
                        <div class="gal-item-desc delay-1">
                            <h4><b>paris, france</b></h4>
                            <h5>mountain tours</h5>
                        </div>
                    </a>
                </div> --}}
                @foreach ($siteGallery as $row)
                    <div class="item hotels gal-item style-3 col-mob-12 col-xs-6 col-sm-4">
                        <a class="black-hover" href="gallery_detail.html">
                            <div class="gal-item-icon">
                                <img class="img-full img-responsive"
                                    src="{{ asset('images/' . $row->image) }}"
                                    alt="">
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-align">
                                    <span class="c-button small bg-white delay-2"><span>view more</span></span>
                                </div>
                            </div>
                            <div class="gal-item-desc delay-1">
                                <h4><b>monaco, monte carlo</b></h4>
                                <h5>sea tours</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
