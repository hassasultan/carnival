@extends('front.layouts.app')
@section('front-content')
<div class="full-height">
    <div class="clip">
       <div class="bg bg-bg-chrome" style="background-image:url(https://carnivalguide.co/travel/img/flightbg5.jpg)">
       </div>
    </div>
    <div class="vertical-align">
        <div class="container">
           <div class="row">
               <div class="col-md-12 col-xs-12">
                  <div class="main-title style-6">
                          <div class="top-weather-info delay-1">
                           <img src="https://carnivalguide.co/travel/img/home_10/slide_icon.png" alt="">
                       </div>
                       <h4>Over 90 000 flights for you choice</h4>
                       <h1>Choose flight</h1>
                      <div class="row no-padd">
                         <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-md-offset-0">
                           <div class="input-style-1 min-324">
                               <img src="https://carnivalguide.co/travel/img/loc_icon_small.png" alt="">
                                 <input type="text" placeholder="Enter a destination or hotel name">
                           </div>
                           <div class="input-style-1 min-204">
                               <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                 <input type="text" placeholder="Check in" class="datepicker">
                           </div>
                           <div class="input-style-1 min-204">
                               <img src="https://carnivalguide.co/travel/img/calendar_icon.png" alt="">
                                 <input type="text" placeholder="Check out" class="datepicker">
                           </div>
                           <div class="submit">
                              <input class="c-button bg-red-3 hv-transparent" type="submit" value="search now">
                           </div>
                         </div>
                      </div>
                  </div>  	  
               </div>
           </div>
        </div>
    </div>
 </div>

<!--HOTEL-ITEM-->
<div class="main-wraper padd-90">
   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-8 col-sm-offset-2">
               <div class="second-title">
                   <h4 class="subtitle color-red-3 underline">popular</h4>
                   <h2>Most popular Flights</h2>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="top-baner arrows">
               <div class="swiper-container fly-slider" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                     <div class="swiper-wrapper">
                       <div class="swiper-slide">
                           <div class="hotel-item style-7">
                                 <div class="radius-top">
                                      <img src="https://carnivalguide.co/travel/img/home_10/flight_1.jpg" alt="">	          	 	 
                                 </div>
                                 <div class="title">
                                   <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                   <h6 class="color-grey-3">one way flights</h6>
                                     <h4><b>Cheap Flights to Paris</b></h4>
                                     <p>Book now and <span class="color-red-3">save 30%</span></p>
                                     <div class="clearfix">
                                       <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                       <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-slide">
                           <div class="hotel-item style-7">
                                 <div class="radius-top">
                                      <img src="https://carnivalguide.co/travel/img/home_10/flight_2.jpg" alt="">	          	 	 
                                 </div>
                                 <div class="title">
                                   <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                   <h6 class="color-grey-3">one way flights</h6>
                                     <h4><b>Cheap Flights to london</b></h4>
                                     <p>Book now and <span class="color-red-3">save 30%</span></p>
                                     <div class="clearfix">
                                       <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                       <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-slide">
                           <div class="hotel-item style-7">
                                 <div class="radius-top">
                                      <img src="https://carnivalguide.co/travel/img/home_10/flight_3.jpg" alt="">	          	 	 
                                 </div>
                                 <div class="title">
                                   <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                   <h6 class="color-grey-3">one way flights</h6>
                                     <h4><b>Flights to monaco</b></h4>
                                     <p>Book now and <span class="color-red-3">save 30%</span></p>
                                     <div class="clearfix">
                                       <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o fl">book now</a>
                                       <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="swiper-slide">
                           <div class="hotel-item style-7">
                                 <div class="radius-top">
                                      <img src="https://carnivalguide.co/travel/img/home_10/flight_4.jpg" alt="">	          	 	 
                                 </div>
                                 <div class="title">
                                   <h5>from <strong class="color-red-3">$860</strong> / person</h5>
                                   <h6 class="color-grey-3">one way flights</h6>
                                     <h4><b>flights to new zealand</b></h4>
                                     <p>Book now and <span class="color-red-3">save 30%</span></p>
                                     <div class="clearfix">
                                       <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
                                       <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
                                   </div>
                               </div>
                           </div>
                       </div>												  
                     </div>
                   <div class="pagination poin-style-2"></div>  
               </div>
               <div class="swiper-arrow-left offers-arrow color-4"><span class="fa fa-angle-left"></span></div>
               <div class="swiper-arrow-right offers-arrow color-4"><span class="fa fa-angle-right"></span></div>
           </div>
       </div>		
   </div>
</div>

<!-- TOUR-BLOCK -->
<div class="main-wraper bg-grey-2 padd-90">
   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-8 col-sm-offset-2">
               <div class="second-title">
                   <h4 class="subtitle color-red-3 underline">best flights</h4>
                   <h2>best flights this month</h2>
               </div>
           </div>
       </div>
           <div class="row">
               <div class="col-xs-12 col-lg-4">
                   <div class="city-entry style-2 bg-grey-2">
                       <div class="tour-block tour-block-s-5 hover-red-3 underline-block">
                            <div class="tour-layer delay-1"></div> 
                             <img src="https://carnivalguide.co/travel/img/home_10/city_1.jpg" class="res-img" alt="">
                           <div class="tour-caption">
                               <div class="vertical-align">
                                   <h5>best flights</h5>
                                   <h3 class="underline hover-it">to france</h3>
                                   <h4><b>save 30%</b> this month</h4>  
                               </div>
                           </div>
                       </div>
                       <div class="flight-desc bg-white">
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_1.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly London to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_2.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly madrid to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_3.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly dubai to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>					    						    	
                       </div>
                   </div>				
               </div>

               <div class="col-xs-12 col-lg-4">
                   <div class="city-entry style-2 bg-grey-2">
                       <div class="tour-block tour-block-s-5 hover-red-3 underline-block">
                            <div class="tour-layer delay-1"></div> 
                             <img src="https://carnivalguide.co/travel/img/home_10/city_2.jpg" class="res-img" alt="">
                           <div class="tour-caption">
                               <div class="vertical-align">
                                   <h5>best flights</h5>
                                   <h3 class="underline hover-it">to france</h3>
                                   <h4><b>save 30%</b> this month</h4>  
                               </div>
                           </div>
                       </div>
                       <div class="flight-desc bg-white">
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_4.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly London to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_5.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly madrid to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_6.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly dubai to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>					    						    	
                       </div>
                   </div>				
               </div>

               <div class="col-xs-12 col-lg-4">
                   <div class="city-entry style-2 bg-grey-2">
                       <div class="tour-block tour-block-s-5 hover-red-3 underline-block">
                            <div class="tour-layer delay-1"></div> 
                             <img src="https://carnivalguide.co/travel/img/home_10/city_3.jpg" class="res-img" alt="">
                           <div class="tour-caption">
                               <div class="vertical-align">
                                   <h5>best flights</h5>
                                   <h3 class="underline hover-it">to france</h3>
                                   <h4><b>save 30%</b> this month</h4>  
                               </div>
                           </div>
                       </div>
                       <div class="flight-desc bg-white">
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_1.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly London to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_2.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly madrid to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>
                           <div class="flight-line clearfix">
                               <a class="fl_image" href="#" ><img src="https://carnivalguide.co/travel/img/home_10/company_3.jpg" alt=""></a>
                               <div class="fl_content">
                                   <h4 class="fl_title color-dark-2">fly dubai to Paris</h4>
                                   <div class="fl_direct color-grey-3">one way flights</div>
                                   <div class="fl_price color-red-3"><span class="color-dark-2-light">$470</span> $300</div>
                               </div>
                           </div>					    						    	
                       </div>
                   </div>				
               </div>			    

           </div>		
   </div>
</div>

<!--HOTEL-ITEM-->
<div class="main-wraper padd-90">
   <img class="center-image" src="https://carnivalguide.co/travel/img/home_10/bg_1.jpg" alt="">
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
                   <div class="subscribe-input input-style-1 fl low-pad">
                       <input type="text" required="" placeholder="Enter your email">
                   </div>
                   <button type="submit" class="c-button b-60 bg-red-3 hv-red-3-o fr"><span>subscribe</span></button>
               </form>
           </div>
       </div>
   </div>
</div>


<div class="main-wraper padd-90">
   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-8 col-sm-offset-2">
               <div class="second-title">
                   <h4 class="subtitle color-red-3 underline">best flights</h4>
                   <h2>best flights this month</h2>
               </div>
           </div>
       </div>
       <div class="tour-item-grid row">
           <div class="col-xs-12 col-sm-4 clear-sm-3">
               <div class="tour-item style-4">
                   <div class="radius-top">
                        <img src="https://carnivalguide.co/travel/img/home_10/tour_1.jpg" alt="">
                        <div class="tour-weather red">hot price</div>
                   </div>
                   <div class="tour-desc bg-white">
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>view more</span></a>
                       <h4><a class="tour-title color-dark-2 link-red-3" href="#">Flights to france</a></h4>
                       <div class="tour-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt="">35 Airlines</div>
                       <div class="tour-price">from <span class="color-red-3">$860</span> / person</div>
                    </div>
               </div>					
           </div>
           <div class="col-xs-12 col-sm-4 clear-sm-3">
               <div class="tour-item style-4">
                   <div class="radius-top">
                        <img src="https://carnivalguide.co/travel/img/home_10/tour_2.jpg" alt="">
                   </div>
                   <div class="tour-desc bg-white">
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>view more</span></a>
                       <h4><a class="tour-title color-dark-2 link-red-3" href="#">Flights to spaine</a></h4>
                       <div class="tour-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt="">35 Airlines</div>
                       <div class="tour-price">from <span class="color-red-3">$600</span> / person</div>
                    </div>
               </div>					
           </div>
           <div class="col-xs-12 col-sm-4 clear-sm-3">
               <div class="tour-item style-4">
                   <div class="radius-top">
                        <img src="https://carnivalguide.co/travel/img/home_10/tour_3.jpg" alt="">
                        <div class="tour-weather green">hot price</div>
                   </div>
                   <div class="tour-desc bg-white">
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>view more</span></a>
                       <h4><a class="tour-title color-dark-2 link-red-3" href="#">Flights to usa</a></h4>
                       <div class="tour-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt="">35 Airlines</div>
                       <div class="tour-price">from <span class="color-red-3">$700</span> / person</div>
                    </div>
               </div>					
           </div>
           <div class="col-xs-12 col-sm-4 clear-sm-3">
               <div class="tour-item style-4">
                   <div class="radius-top">
                        <img src="https://carnivalguide.co/travel/img/home_10/tour_4.jpg" alt="">
                   </div>
                   <div class="tour-desc bg-white">
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>view more</span></a>
                       <h4><a class="tour-title color-dark-2 link-red-3" href="#">Flights to Cyprus</a></h4>
                       <div class="tour-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt="">35 Airlines</div>
                       <div class="tour-price">from <span class="color-red-3">$550</span> / person</div>
                    </div>
               </div>					
           </div>
           <div class="col-xs-12 col-sm-4 clear-sm-3">
               <div class="tour-item style-4">
                   <div class="radius-top">
                        <img src="https://carnivalguide.co/travel/img/home_10/tour_5.jpg" alt="">
                        <div class="tour-weather green">hot price</div>
                   </div>
                   <div class="tour-desc bg-white">
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>view more</span></a>
                       <h4><a class="tour-title color-dark-2 link-red-3" href="#">Flights to Sweden</a></h4>
                       <div class="tour-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt="">35 Airlines</div>
                       <div class="tour-price">from <span class="color-red-3">$990</span> / person</div>
                    </div>
               </div>					
           </div>
           <div class="col-xs-12 col-sm-4 clear-sm-3">
               <div class="tour-item style-4">
                   <div class="radius-top">
                        <img src="https://carnivalguide.co/travel/img/home_10/tour_1.jpg" alt="">
                        <div class="tour-weather red">hot price</div>
                   </div>
                   <div class="tour-desc bg-white">
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>view more</span></a>
                       <h4><a class="tour-title color-dark-2 link-red-3" href="#">Flights to monaco</a></h4>
                       <div class="tour-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt="">35 Airlines</div>
                       <div class="tour-price">from <span class="color-red-3">$300</span> / person</div>
                    </div>
               </div>					
           </div>																								
       </div>		
   </div>
</div>

<!-- PRICE BLOCK -->
<div class="main-wraper bg-grey-2 padd-120">
   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-8 col-sm-offset-2">
               <div class="second-title">
                   <h4 class="subtitle color-red-3 underline">prices</h4>
                   <h2>Top destinations around the world</h2>
               </div>
           </div>
       </div>
       <div class="price-block">
           <div class="pb_entry">
               <div class="table-view">
                   <div class="pb_header bg-white cell-view">
                       <img src="https://carnivalguide.co/travel/img/home_10/airlines_1.png" alt="">
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">spain</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">italy</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Germany</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Lithuania</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_check bg-white cell-view">
                       <div class="pb_check_title color-dark-2">emarates flights</div>
                       <div class="pb_check_text color-grey-3">Nunc cursus libero purus ac congue arcu cursus ut .</div>
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>check all</span></a>
                   </div>															
               </div>			
           </div>
           <div class="pb_entry">
               <div class="table-view">
                   <div class="pb_header bg-white cell-view">
                       <img src="https://carnivalguide.co/travel/img/home_10/airlines_2.png" alt="">
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">spain</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">monaco</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Sweden</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Cyprus</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_check bg-white cell-view">
                       <div class="pb_check_title color-dark-2">singapore flights</div>
                       <div class="pb_check_text color-grey-3">Nunc cursus libero purus ac congue arcu cursus ut .</div>
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>check all</span></a>
                   </div>															
               </div>			
           </div>
           <div class="pb_entry">
               <div class="table-view">
                   <div class="pb_header bg-white cell-view">
                       <img src="https://carnivalguide.co/travel/img/home_10/airlines_1.png" alt="">
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Sweden</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">italy</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Lithuania</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_content bg-grey-6 cell-view">
                       <div class="pb-title color-dark-2">Cyprus</div>
                       <div class="pb-price color-dark-2">from <span class="color-red-3">$860</span></div>
                       <div class="pb-text color-grey-3"><img class="plane-icon" src="https://carnivalguide.co/travel/img/plane.png" alt=""> 35 Airlines</div>
                       <div class="pb-text color-grey-3"><img class="location-icon" src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">90 destination</div>
                   </div>
                   <div class="pb_check bg-white cell-view">
                       <div class="pb_check_title color-dark-2">polish flights</div>
                       <div class="pb_check_text color-grey-3">Nunc cursus libero purus ac congue arcu cursus ut .</div>
                       <a href="#" class="c-button bg-red-3 hv-red-3-o delay-2 b-40"><span>check all</span></a>
                   </div>															
               </div>			
           </div>						
       </div>
     </div>
  </div>  

@endsection