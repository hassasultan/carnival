@extends('front.layouts.app')
@section('front-content')
<div class="top-baner swiper-animate arrows">
    <div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-val="0">
                <div class="full-height">
                    <div class="video-wrapper">
                        <video loop autoplay muted poster="https://carnivalguide.co/new/img/poster.jpg" class="bgvid">
                            <source type="video/mp4" src="https://carnivalguide.co/new/video/video.mp4">
                            <source type="video/ogv" src="https://carnivalguide.co/new/video/video.ogv">
                            <source type="video/webm" src="https://carnivalguide.co/new/video/video.webm">
                        </video>
                        <div class="vertical-align">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title vert-title">
                                            <div class="top-weather-info delay-1">
                                                <p>London</p>
                                                <img src="https://carnivalguide.co/new/img/weather_icon.png" alt="">
                                                <span>+30°C</span>
                                            </div>
                                            <h1 class="color-white delay-1">Amazing Santorini<br> 7 Days Tour</h1>
                                            <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
                                            <a href="#" class="c-button bg-aqua delay-2"><img src="https://carnivalguide.co/new/img/loc_icon.png" alt=""><span>View our tours</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat the slide structure for each additional slide -->
            <div class="swiper-slide" data-val="1">
                <div class="full-height">
                    <div class="video-wrapper">
                        <video loop autoplay muted poster="https://carnivalguide.co/new/img/poster.jpg" class="bgvid">
                            <source type="video/mp4" src="https://carnivalguide.co/new/video/video.mp4">
                            <source type="video/ogv" src="https://carnivalguide.co/new/video/video.ogv">
                            <source type="video/webm" src="https://carnivalguide.co/new/video/video.webm">
                        </video>
                        <div class="vertical-align">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-title vert-title">
                                            <div class="top-weather-info delay-1">
                                                <p>London</p>
                                                <img src="https://carnivalguide.co/new/img/weather_icon.png" alt="">
                                                <span>+30°C</span>
                                            </div>
                                            <h1 class="color-white delay-1">Amazing Santorini<br> 7 Days Tour</h1>
                                            <p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
                                            <a href="#" class="c-button bg-aqua delay-2"><img src="https://carnivalguide.co/new/img/loc_icon.png" alt=""><span>View our tours</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination (optional) -->
        <div class="pagination pagination-hidden poin-style-1"></div>
    </div>

    <div class="arrow-wrapp m-200">
        <div class="cont-1170">
            <div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
            <div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
        </div>
    </div>

    <div class="baner-tabs">
        <div class="text-center">
            <div class="drop-tabs">
                <b>Hotels</b>
                <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
                <ul class="nav-tabs tpl-tabs tabs-style-1">
                    <li class="active click-tabs"><a href="#one" data-toggle="tab">Monday</a></li>
                    <li class="click-tabs"><a href="#two" data-toggle="tab">Tuesday</a></li>
                    <li class="click-tabs"><a href="#three" data-toggle="tab">Wednesday</a></li>
                    <li class="click-tabs"><a href="#four" data-toggle="tab">Thursday</a></li>
                    <li class="click-tabs"><a href="#five" data-toggle="tab">Friday</a></li>
                    <li class="click-tabs"><a href="#six" data-toggle="tab">Saturday</a></li>
                    <li class="click-tabs"><a href="#seven" data-toggle="tab">Sunday</a></li>
                </ul>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
            <div class="tab-pane active in" id="one">
                <div class="container">
                    <div class="row">
                        <!-- Repeat for each input block -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="tabs-block">
                                <h5>Your Destination</h5>
                                <div class="input-style">
                                    <img src="https://carnivalguide.co/new/img/loc_icon_small.png" alt="">
                                    <input type="text" placeholder="Enter a destination or hotel name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            <div class="tabs-block">
                                <h5>Check In</h5>
                                <div class="input-style">
                                    <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            <div class="tabs-block">
                                <h5>Check Out</h5>
                                <div class="input-style">
                                    <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>Search now</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat for each day tab -->
            <div class="tab-pane" id="two">
                <div class="container">
                    <div class="row">
                        <!-- Repeat for each input block -->
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="tabs-block">
                                <h5>Your Destination</h5>
                                <div class="input-style">
                                    <img src="https://carnivalguide.co/new/img/loc_icon_small.png" alt="">
                                    <input type="text" placeholder="Enter a destination or hotel name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            <div class="tabs-block">
                                <h5>Check In</h5>
                                <div class="input-style">
                                    <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                            <div class="tabs-block">
                                <h5>Check Out</h5>
                                <div class="input-style">
                                    <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i class="fa fa-search"></i><span>Search now</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other tabs go here -->
        </div>
    </div>
</div>


<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>The Best Sea Tours</h2>
					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="radius-mask tour-block hover-aqua">
				  <div class="clip">
					 <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/sea_tour_img_1.jpg)">
					 </div>
				  </div>
				  <div class="tour-layer delay-1"></div>
				  <div class="tour-caption">
					   <div class="vertical-align">
						   <h3 class="hover-it">mauritius</h3>
							 <div class="rate">
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
							 </div>
						   <h4>from <b>$860</b></h4>  
					   </div>
					   <div class="vertical-bottom">
						 <div class="fl">
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/people_icon.png" alt="">
								 <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
						   </div>
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
								 <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
						   </div>
						 </div>	
						   <a href="#" class="c-button b-50 bg-aqua hv-transparent fr"><img src="https://carnivalguide.co/new/img/flag_icon.png" alt=""><span>view more</span></a>
					   </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="radius-mask tour-block">
				  <div class="clip">
					 <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/sea_tour_img_2.jpg)">
					 </div>
				  </div>
				  <div class="tour-layer delay-1"></div>
				  <div class="tour-caption">
					   <div class="vertical-align">
						   <h3 class="hover-it">santorini</h3>
							 <div class="rate">
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
							 </div>
						   <h4>from <b>$750</b></h4>  
					   </div>
					   <div class="vertical-bottom">
						 <div class="fl">
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/people_icon.png" alt="">
								 <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
						   </div>
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
								 <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
						   </div>
						 </div>	
						   <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="https://carnivalguide.co/new/img/flag_icon.png" alt=""><span>view more</span></a>
					   </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="radius-mask tour-block">
				  <div class="clip">
					 <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/sea_tour_img_3.jpg)">
					 </div>
				  </div>
				  <div class="tour-layer delay-1"></div>
				  <div class="tour-caption">
					   <div class="vertical-align">
						   <h3 class="hover-it">paros</h3>
							 <div class="rate">
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star"></span>
							 </div>
						   <h4>from <b>$600</b></h4>  
					   </div>
					   <div class="vertical-bottom">
						 <div class="fl">
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/people_icon.png" alt="">
								 <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
						   </div>
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
								 <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
						   </div>
						 </div>	
						   <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="https://carnivalguide.co/new/img/flag_icon.png" alt=""><span>view more</span></a>
					   </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="radius-mask tour-block">
				  <div class="clip">
					 <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/sea_tour_img_4.jpg)">
					 </div>
				  </div>
				  <div class="tour-layer delay-1"></div>
				  <div class="tour-caption">
					   <div class="vertical-align">
						   <h3 class="hover-it">kythira</h3>
							 <div class="rate">
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star"></span>
							 </div>
						   <h4>from <b>$1050</b></h4>  
					   </div>
					   <div class="vertical-bottom">
						 <div class="fl">
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/people_icon.png" alt="">
								 <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
						   </div>
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
								 <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
						   </div>
						 </div>	
						   <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="https://carnivalguide.co/new/img/flag_icon.png" alt=""><span>view more</span></a>
					   </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="radius-mask tour-block">
				  <div class="clip">
					 <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/sea_tour_img_5.jpg)">
					 </div>
				  </div>
				  <div class="tour-layer delay-1"></div>
				  <div class="tour-caption">
					   <div class="vertical-align">
						   <h3 class="hover-it">corfu</h3>
							 <div class="rate">
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star"></span>
							 </div>
						   <h4>from <b>$500</b></h4>  
					   </div>
					   <div class="vertical-bottom">
						 <div class="fl">
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/people_icon.png" alt="">
								 <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
						   </div>
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
								 <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
						   </div>
						 </div>	
						   <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="https://carnivalguide.co/new/img/flag_icon.png" alt=""><span>view more</span></a>
					   </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="radius-mask tour-block">
				  <div class="clip">
					 <div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/sea_tour_img_6.jpg)">
					 </div>
				  </div>
				  <div class="tour-layer delay-1"></div>
				  <div class="tour-caption">
					   <div class="vertical-align">
						   <h3 class="hover-it">crete</h3>
							 <div class="rate">
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star color-yellow"></span>
								 <span class="fa fa-star"></span>
							 </div>
						   <h4>from <b>$700</b></h4>  
					   </div>
					   <div class="vertical-bottom">
						 <div class="fl">
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/people_icon.png" alt="">
								 <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong> adults, <strong class="color-white">1</strong> kids</span>
						   </div>
						   <div class="tour-info">
							   <img src="https://carnivalguide.co/new/img/calendar_icon.png" alt="">
								 <span class="font-style-2 color-grey-4">July<strong class="color-white"> 19th</strong> to July<strong class="color-white"> 26th</strong></span>
						   </div>
						 </div>	
						   <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="https://carnivalguide.co/new/img/flag_icon.png" alt=""><span>view more</span></a>
					   </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-wraper">
	<div class="clip">
	   <div class="bg bg-bg-chrome" style="background-image:url(https://carnivalguide.co/new/img/home_1/tour_slider_bg.jpg)">
	   </div>
	</div>
	<div class="swiper-container swiper-swiper-unique-id-1 initialized" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="swiper-unique-id-1">
	   <div class="swiper-wrapper" style="width: 8550px; transform: translate3d(-1425px, 0px, 0px); transition-duration: 0s; height: 353px;"><div class="swiper-slide swiper-slide-duplicate" style="width: 1425px; height: 353px;">
			<div class="container">
				 <div class="row">
					 <div class="col-md-12">
					   <div class="slider-tour padd-94-94">
						 <h3>from $960</h3>
						   <div class="rate">
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star"></span>
						   </div>
						<h2>Maldives Vacation Packages</h2> 
						 <h5>july <b>19th</b> to july <b>26th</b></h5>
					  </div>	
					 </div>
				 </div>
			</div> 
		  </div>
		  <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1425px; height: 353px;">
			<div class="container">
				 <div class="row">
					 <div class="col-md-12">
					   <div class="slider-tour padd-90-90">
						 <h3>from $960</h3>
						   <div class="rate">
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
						   </div>
						<h2>Maldives Vacation Packages</h2> 
						 <h5>july <b>19th</b> to july <b>26th</b></h5>
					  </div>	
					 </div>
				 </div>
			</div> 
		  </div>
		  <div class="swiper-slide" style="width: 1425px; height: 353px;">
			<div class="container">
				 <div class="row">
					 <div class="col-md-12">
					   <div class="slider-tour padd-94-94">
						 <h3>from $960</h3>
						   <div class="rate">
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star"></span>
							   <span class="fa fa-star"></span>
						   </div>
						<h2>Maldives Vacation Packages</h2> 
						 <h5>july <b>19th</b> to july <b>26th</b></h5>
					  </div>	
					 </div>
				 </div>
			</div> 
		  </div>
		  <div class="swiper-slide" style="width: 1425px; height: 353px;">
			<div class="container">
				 <div class="row">
					 <div class="col-md-12">
					   <div class="slider-tour padd-94-94">
						 <h3>from $960</h3>
						   <div class="rate">
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
						   </div>
						<h2>Maldives Vacation Packages</h2> 
						 <h5>july <b>19th</b> to july <b>26th</b></h5>
					  </div>	
					 </div>
				 </div>
			</div> 
		  </div>
		  <div class="swiper-slide" style="width: 1425px; height: 353px;">
			<div class="container">
				 <div class="row">
					 <div class="col-md-12">
					   <div class="slider-tour padd-94-94">
						 <h3>from $960</h3>
						   <div class="rate">
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star"></span>
						   </div>
						<h2>Maldives Vacation Packages</h2> 
						 <h5>july <b>19th</b> to july <b>26th</b></h5>
					  </div>	
					 </div>
				 </div>
			</div> 
		  </div>
	   <div class="swiper-slide swiper-slide-duplicate" style="width: 1425px; height: 353px;">
			<div class="container">
				 <div class="row">
					 <div class="col-md-12">
					   <div class="slider-tour padd-90-90">
						 <h3>from $960</h3>
						   <div class="rate">
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
							   <span class="fa fa-star color-yellow"></span>
						   </div>
						<h2>Maldives Vacation Packages</h2> 
						 <h5>july <b>19th</b> to july <b>26th</b></h5>
					  </div>	
					 </div>
				 </div>
			</div> 
		  </div></div>
	   <div class="pagination poin-style-1 pagination-swiper-unique-id-1"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span><span class="swiper-pagination-switch"></span></div>
	</div>
</div>
<div class="main-wraper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Beautiful Trips</h2>
					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla</p>
				</div>
			</div>
		</div>
		<div class="row col-no-padd">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_1.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_2.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_3.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_4.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_5.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_6.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_7.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_8.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
				  <div class="tour-layer delay-1"></div>
					<img src="https://carnivalguide.co/new/img/home_1/photo_9.jpg" alt="">
					   <div class="vertical-align">
							   <div class="photo-title">
								 <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							   <a class="hover-it" href="#"><h3>promotional trip</h3></a>
								<h5 class="delay-1">Orlando, Air/3 Nights</h5>
							</div>
					   </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Special Offers</h2>
					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
				</div>
			</div>
		</div>
		<div class="row">
		  <div class="top-baner arrows">
			<div class="swiper-container offers-slider swiper-swiper-unique-id-2 initialized pagination-hidden" data-autoplay="5000" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3" id="swiper-unique-id-2">
			  <div class="swiper-wrapper" style="width: 3600px; transform: translate3d(-2400px, 0px, 0px); transition-duration: 0.5s; height: 450px;"><div class="swiper-slide active" data-val="0" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_1.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>greece</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>35</b>tours</li>
						   <li><b>24</b>cities</li>
						   <li><b>90</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div><div class="swiper-slide" data-val="1" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_2.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>france</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>58</b>tours</li>
						   <li><b>49</b>cities</li>
						   <li><b>70</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div><div class="swiper-slide" data-val="2" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_3.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>spain</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>88</b>tours</li>
						   <li><b>10</b>cities</li>
						   <li><b>193</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div>
				<div class="swiper-slide active" data-val="0" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_1.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>greece</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>35</b>tours</li>
						   <li><b>24</b>cities</li>
						   <li><b>90</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div>
				<div class="swiper-slide" data-val="1" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_2.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>france</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>58</b>tours</li>
						   <li><b>49</b>cities</li>
						   <li><b>70</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div>
				<div class="swiper-slide" data-val="2" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_3.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>spain</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>88</b>tours</li>
						   <li><b>10</b>cities</li>
						   <li><b>193</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div>
			  <div class="swiper-slide swiper-slide-visible swiper-slide-active active" data-val="0" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_1.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>greece</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>35</b>tours</li>
						   <li><b>24</b>cities</li>
						   <li><b>90</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div><div class="swiper-slide swiper-slide-visible" data-val="1" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_2.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>france</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>58</b>tours</li>
						   <li><b>49</b>cities</li>
						   <li><b>70</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div><div class="swiper-slide swiper-slide-visible" data-val="2" style="width: 400px; height: 450px;">
				   <div class="offers-block radius-mask">
					 <div class="clip">
						<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/offers_slide_3.jpg)">
						</div>
					 </div>
					 <div class="tour-layer delay-1"></div>
					 <div class="vertical-top">
					   <div class="rate">
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
						<span class="fa fa-star color-yellow"></span>
					   </div>
						<h3>spain</h3>
					 </div>
					 <div class="vertical-bottom">
					   <ul class="offers-info">
						   <li><b>88</b>tours</li>
						   <li><b>10</b>cities</li>
						   <li><b>193</b>hotels</li>
					   </ul>
						<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
						<a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
					 </div>
				   </div> 
				</div></div>
			  <div class="pagination  poin-style-1 pagination-hidden pagination-swiper-unique-id-2"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch" style="display: inline-block;"></span><span class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span><span class="swiper-pagination-switch swiper-visible-switch" style="display: none;"></span></div>
			</div>
				<div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
			  <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
			 </div>
		</div>
	</div>
</div>
<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Most Popular Travel Countries</h2>
					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-push-6 col-sm-12">
				<div class="popular-desc text-left">
					<div class="clip">
						<div class="bg bg-bg-chrome act bg-contain" style="background-image:url(https://carnivalguide.co/new/img/home_1/map_1.png)">
						</div>
					</div>
					<div class="vertical-align">
						<h3>italy, europe</h3>
						  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi Praesent at vestibulum tortor. Praesent condimentum efficitur massa, nec congue sem dapibus sed. </p>
						  <h4>best cities</h4>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Rome</a></li>
										<li><a href="#">Venice</a></li>
										<li><a href="#">Pisa</a></li>
										<li><a href="#">Naples</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Bologna</a></li>
										<li><a href="#">Florence</a></li>
										<li><a href="#">Genoa</a></li>
										<li><a href="#">Turin</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Milan</a></li>
										<li><a href="#">Capri</a></li>
										<li><a href="#">Matera</a></li>
										<li><a href="#">Pompeii</a></li>
									</ul>
								</div>
							</div>
						<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
							<img class="img-hide" src="https://carnivalguide.co/new/img/flag_icon.png" alt="">
							<img class="img-hov" src="https://carnivalguide.co/new/img/flag_icon_aqua.png" alt="">
							<span>view all places</span></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-md-pull-6 col-sm-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_1.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							 <h4><a href="#">Maecenas sit amet</a></h4>
							  <h5><b class="color-aqua">from $235</b> per person</h5>
						 </div>
					  </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_2.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Aenean iaculis enim</a></h4>
							  <h5><b class="color-aqua">from $180</b> per person</h5>
						 </div>
					  </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_3.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Pellentesque tempus</a></h4>
							  <h5><b class="color-aqua">from $195</b> per person</h5>
						 </div>
					  </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_4.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Donec id maximus</a></h4>
							  <h5><b class="color-aqua">from $350</b> per person</h5>
						 </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-sm-12">
				<div class="popular-desc text-right">
					<div class="clip">
						<div class="bg bg-bg-chrome act bg-contain" style="background-image:url(https://carnivalguide.co/new/img/home_1/map_2.png)">
						</div>
					</div>
					<div class="vertical-align">
						<h3>france, europe</h3>
						  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi Praesent at vestibulum tortor. Praesent condimentum efficitur massa, nec congue sem dapibus sed. </p>
						  <h4>best cities</h4>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Rome</a></li>
										<li><a href="#">Venice</a></li>
										<li><a href="#">Pisa</a></li>
										<li><a href="#">Naples</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Bologna</a></li>
										<li><a href="#">Florence</a></li>
										<li><a href="#">Genoa</a></li>
										<li><a href="#">Turin</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Milan</a></li>
										<li><a href="#">Capri</a></li>
										<li><a href="#">Matera</a></li>
										<li><a href="#">Pompeii</a></li>
									</ul>
								</div>
							</div>
						<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
							<img class="img-hide" src="https://carnivalguide.co/new/img/flag_icon.png" alt="">
							<img class="img-hov" src="https://carnivalguide.co/new/img/flag_icon_aqua.png" alt="">
							<span>view all places</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-sm-12">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_5.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Donec id maximus</a></h4>
							  <h5><b class="color-aqua">from $215</b> per person</h5>
						 </div>
					  </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_6.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Pellentesque tempus</a></h4>
							  <h5><b class="color-aqua">from $175</b> per person</h5>
						 </div>
					  </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_7.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Aenean iaculis enim</a></h4>
							  <h5><b class="color-aqua">from $150</b> per person</h5>
						 </div>
					  </div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
					  <div class="radius-mask popular-img">
						 <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(https://carnivalguide.co/new/img/home_1/popular_travel_img_8.jpg)">
							</div>
						 </div>
						 <div class="tour-layer delay-1"></div>
						 <div class="vertical-bottom">
							<h4><a href="#">Maecenas sit amet</a></h4>
							  <h5><b class="color-aqua">from $290</b> per person</h5>
						 </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-wraper padd-90 background-block" style="background-image: url(https://carnivalguide.co/new/&quot;img/home_8/bg_block_1.jpg&quot;);">
	<img class="center-image" src="https://carnivalguide.co/new/img/home_8/bg_block_1.jpg" alt="" style="display: none;">
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
						<input type="text" required="" placeholder="Enter your email">
					</div>
					<button type="submit" class="c-button b-60 bg-blue-2 hv-blue-2-o fr"><span>subscribe</span></button>
				</form>
			</div>
		</div>
	</div>
</div>
 <!-- S_NEWS-ENTRY -->
 <div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-blue-2 underline">news</h4>
					<h2>latest news</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($blogs as $blog)
				<div class="col-xs-12 col-sm-4">
					<div class="s_news-entry">
						<img class="s_news-img img-full img-responsive"
							src="https://carnivalguide.co/travel/images/blog1.jpg" alt="">
						<h4 class="s_news-title"><a href="#">{{ $blog->title }}</a></h4>
						<div class="tour-info-line clearfix">
							<div class="tour-info fl">
								<img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
									alt="">
								<span
									class="font-style-2 color-dark-2">{{ $blog->created_at->format('d/m/Y') }}</span>
							</div>
							<div class="tour-info fl">
								<img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
									alt="">
								<span class="font-style-2 color-dark-2">By
									{{ $blog->user->first_name . ' ' . $blog->user->last_name }}</span>
							</div>
							<div class="tour-info fl">
								<img src="https://carnivalguide.co/travel/img/comment_icon_grey.png" alt="">
								<span class="font-style-2 color-dark-2">10 comments</span>
							</div>
						</div>
						{{-- <div class="s_news-text color-grey-3">{!! $blog->description !!}</div> --}}
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>


<!-- block  showcase-->
<div class="block-showcase block-showcase-opt1 block-brand-tabs">
	<div class="container">
		<div class="block-title">
			<span class="title">brand showcase</span>
		</div>
		<div class="block-content">
			<ul class="nav-brand owl-carousel" data-nav="true" data-loop="true" data-dots="false"
				data-margin="1"
				data-responsive='{
						"0":{"items":3},
						"380":{"items":4},
						"480":{"items":5},
						"640":{"items":7},
						"992":{"items":8}
					}'>
				<li class="active" data-tab="brand1-1">
					<img src="https://carnivalguide.co/travel/images/digicelt.jpg" alt="img">
				</li>
				<li data-tab="brand1-2">
					<img src="https://carnivalguide.co/travel/images/flowt.jpg" alt="img">
				</li>
				<li data-tab="brand1-3">
					<img src="https://carnivalguide.co/travel/images/clarksct.jpg" alt="img">
				</li>
				<li data-tab="brand1-4">
					<img src="https://carnivalguide.co/travel/images/caribt.jpg" alt="img">
				</li>
				<li data-tab="brand1-5">
					<img src="https://carnivalguide.co/travel/images/hugginst.jpg" alt="img">
				</li>
				<li data-tab="brand1-6">
					<img src="https://carnivalguide.co/travel/images/glenlgt.jpg" alt="img">
				</li>
				<li data-tab="brand1-7">
					<img src="https://carnivalguide.co/travel/images/intert.jpg" alt="img">
				</li>
				<li data-tab="brand1-8">
					<img src="https://carnivalguide.co/travel/images/cococolat.jpg" alt="img">
				</li>
				<li data-tab="brand1-9">
					<img src="https://carnivalguide.co/travel/images/clarksct.jpg" alt="img">
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active  " role="tabpanel" id="brand1-1">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/digicel.jpg" alt="logo"
									class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 1)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product image"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/digicel3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/digicel4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane " role="tabpanel" id="brand1-2">
					<div class="row">
						<div class="col-md-4">

							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/flowt2.jpg" alt="logo"
									class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 2)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/flowt3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/flowt4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/flowt5.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/flowt6.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " role="tabpanel" id="brand1-3">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 3)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " role="tabpanel" id="brand1-4">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 4)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " role="tabpanel" id="brand1-5">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 5)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="tab-pane" role="tabpanel" id="brand1-6">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 6)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " role="tabpanel" id="brand1-7">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 7)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " role="tabpanel" id="brand1-8">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 8)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " role="tabpanel" id="brand1-9">
					<div class="row">
						<div class="col-md-4">
							<div class="col-title">
								<img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
									alt="logo" class="logo-showcase">
								<div class="des">
									Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
									women's bags. Discover our spring collection.
								</div>
								<div class="actions">
									<a href="" class="btn btn-default">shop this brand <i
											aria-hidden="true" class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="col-product">
								<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
									data-responsive='{
										"0":{"items":1},
										"380":{"items":1},
										"480":{"items":1},
										"640":{"items":2},
										"992":{"items":2}
									}'>
									@foreach ($products->chunk(2) as $chunk)
										<div class="item">
											@foreach ($chunk as $product)
												@if ($product->brand_id == 9)
													<div class="product-item  product-item-opt-1 ">
														<div class="product-item-info">
															<div class="product-item-photo">
																<a class="product-item-img" href="">
																	<img alt="product name"
																		src="{{ $product->image_url }}">
																</a>
															</div>
															<div class="product-item-detail">
																<strong class="product-item-name">
																	<a href="">{{ $product->name }}</a>
																</strong>
																<div class="clearfix">
																	<div class="product-item-price">
																		<span
																			class="price">${{ $product->price }}</span>
																		@if ($product->old_price)
																			<span
																				class="old-price">${{ $product->old_price }}</span>
																		@endif
																	</div>
																	<div class="product-reviews-summary">
																		<div class="rating-summary">
																			<div title="{{ $product->rating }}%"
																				class="rating-result">
																				<span
																					style="width:{{ $product->rating }}%">
																					<span><span>{{ $product->rating }}</span>%
																						of <span>100</span></span>
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												@endif
											@endforeach
										</div>
									@endforeach
									{{-- <div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase1.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase2.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase3.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
															<span class="old-price">$52.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="product-item  product-item-opt-1 ">
											<div class="product-item-info">
												<div class="product-item-photo">
													<a class="product-item-img" href=""><img
															alt="product name"
															src="https://carnivalguide.co/travel/images/media/index1/showcase4.jpg"></a>
												</div>
												<div class="product-item-detail">
													<strong class="product-item-name"><a href="">Maecenas
															consequat
															mauris</a></strong>
													<div class="clearfix">
														<div class="product-item-price">
															<span class="price">$45.00</span>
														</div>
														<div class="product-reviews-summary">
															<div class="rating-summary">
																<div title="80%" class="rating-result">
																	<span style="width:80%">
																		<span><span>80</span>% of
																			<span>100</span></span>
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> --}}
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- block  showcase-->
@endsection