@extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection
@section('main')
        <!-- MAIN -->
        <main class="site-main">

            <div class="block-section-top block-section-top3">
                <div class="container" style="width: 100%;padding:0 !important;">
                    <div class="box-section-top" style="padding: 0 !important;">

                        <!-- block slide top -->
                        <div class="block-slide-main slide-opt-8" style="width:100%">

                            <!-- slide -->
                            <div class="owl-carousel "
                                data-nav="true"
                                data-dots="true"
                                data-margin="0"
                                data-items='1'
                                data-autoplayTimeout="700"
                                data-autoplay="true"
                                data-loop="true">

                                <div class="item">
                                    <img src="{{asset('shopAssets/images/media/index8/slide1.jpg')}}" alt="slide1" class="img-slide" style="height: 600px;">
                                    <div class="description" style="top: 30%;">
                                        <span class="subtitle " >Paris fashion week</span>
                                        <span class="title">fashion talents from paris </span>
                                        <span class="des">Quisque malesuada placerat nisl. Quisque libero metus, condimen Quisque malesuada placerat nisl. Quisque libero metus, condimen</span>
                                        <a href="" class="view-opt8">SHOP NOW</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{asset('shopAssets/images/media/index8/slide2.jpg')}}" alt="slide1" class="img-slide" style="height: 600px;">
                                    <div class="description" style="top: 30%;">
                                        <span class="subtitle " >Paris fashion week</span>
                                        <span class="title">fashion talents from paris </span>
                                        <span class="des">Quisque malesuada placerat nisl. Quisque libero metus, condimen</span>
                                        <a href="" class="view-opt8">SHOP NOW</a>
                                    </div>
                                </div>

                            </div> <!-- slide -->

                        </div><!-- block slide top -->

                    </div>
                </div>
            </div>


        </main><!-- end MAIN -->
@endsection
