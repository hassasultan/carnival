@extends('front.layouts.app')
@section('front-content')
<div class="inner-banner style-4">
	<img class="center-image" src="https://carnivalguide.co/travel/img/tour_list/inner_banner_3.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<ul class="banner-breadcrumb color-white clearfix">
				<li><a class="link-blue-2" href="#">home</a> /</li>
				<li><a class="link-blue-2" href="#">tours</a> /</li>
				<li><span class="color-red-3">list tours</span></li>
			</ul>
			<h2 class="color-white">all flights for you</h2>
			<h4 class="color-white">We found: <span class="color-red-3">640</span> flights</h4>
		</div>
	</div>
</div>

  	<div class="list-wrapper bg-grey-2">
  		<div class="container">		
  			<div class="row">
  				<div class="col-xs-12 col-sm-4 col-md-3">
  					<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">search</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
										<input type="text" placeholder="Where do you want to go?">
									</div>
								</div>							
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check In" class="datepicker">
									</div>					
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check Out" class="datepicker">
									</div>					
								</div>
							</div>
							<input type="submit" class="c-button b-40 bg-red-3 hv-red-3-o" value="search">				
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">categories</h4>
							<ul class="sidebar-category color-4">
								<li class="active">
									<a class="cat-drop" href="#">tours <span class="fr">(68)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>
								</li>
								<li>
									<a class="cat-drop" href="#">hotels <span class="fr">(125)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>									
								</li>
								<li>
									<a class="cat-drop" href="#">cruises <span class="fr">(75)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>									
								</li>
								<li>
									<a class="cat-drop" href="#">flights  <span class="fr">(93)</span></a>
									<ul>
										<li><a href="#">sea tours (785)</a></li>
										<li><a href="#">food tours (85)</a></li>
										<li><a href="#">romantic tours (125)</a></li>
										<li><a href="#">honeymoon tours (70)</a></li>
										<li><a href="#">mountain tours (159)</a></li>
									</ul>									
								</li>								
							</ul>
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">price range</h4>
							<div class="slider-range color-4 clearfix" data-counter="$" data-position="start" data-from="0" data-to="1500" data-min="0" data-max="2000">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">						
							</div>
							<input type="submit" class="c-button b-40 bg-red-3 hv-red-3-o" value="search">				
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">flight times</h4>
							<div class="slider-range color-4 clearfix" data-counter=":00" data-position="end" data-from="0" data-to="1500" data-min="0" data-max="24">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">						
							</div>
							<input type="submit" class="c-button b-40 bg-red-3 hv-red-3-o" value="search">				
						</div>						
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">airlines</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-1" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Air tahiti nui</span>
									</label>
								</div>
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-2" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Air France</span>
									</label>
								</div>
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-3" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">US Airways</span>
									</label>
								</div>
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-4" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Alitalia</span>
									</label>
								</div>
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-5" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Delta Airlines</span>
									</label>
								</div>
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-6" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-6" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">United Airlines</span>
									</label>
								</div>
								<div class="input-entry color-7">
									<input class="checkbox-form" id="text-7" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="text-7" >
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Major Airline</span>
									</label>
								</div>																
							</div>											
						</div>											
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Review Score</h4>
							<div class="sidebar-score">
								<div class="input-entry type-2 color-8">
									<input class="checkbox-form" id="score-5" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-5" >
										<span class="checkbox-text">
											5
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-8">
									<input class="checkbox-form" id="score-4" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-4" >
										<span class="checkbox-text">
											4
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-8">
									<input class="checkbox-form" id="score-3" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-3" >
										<span class="checkbox-text">
											3
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-8">
									<input class="checkbox-form" id="score-2" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-2" >
										<span class="checkbox-text">
											2
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
								<div class="input-entry type-2 color-8">
									<input class="checkbox-form" id="score-1" type="checkbox" name="checkbox" value="climat control">
									<label class="clearfix" for="score-1" >
										<span class="checkbox-text">
											1
											<span class="rate">
												<span class="fa fa-star color-yellow"></span>
											</span>
										</span>									
										<span class="sp-check"><i class="fa fa-check"></i></span>
									</label>
								</div>
							</div>							
						</div>					
  					</div>
  				</div>
  				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="list-header clearfix">
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
						  <div class="drop">
							 <b>Sort by price</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
						   </div>
						</div>
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
						  <div class="drop">
							 <b>Sort by ranking</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
								    <a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
						   </div>
						</div>
						<div class="list-view-change">
							<div class="change-grid color-4 fr"><i class="fa fa-th"></i></div>
							<div class="change-list color-4 fr active"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8">View:</div>
						</div>
					</div>
  					<div class="list-content clearfix">
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_1.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to Paris</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_2.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to london</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_1.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Flights to monaco</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_3.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to Paris</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_3.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to london</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_4.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Flights to monaco</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_2.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to Paris</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_4.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to london</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_1.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Flights to monaco</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_3.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to Paris</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_2.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Cheap Flights to london</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>
  						<div class="list-item-entry">
					        <div class="hotel-item style-10 bg-white">
					        	<div class="table-view">
						          	<div class="radius-top cell-view">
						          	 	<img src="https://carnivalguide.co/travel/img/tour_list/flight_grid_1.jpg" alt="">	          	 	 
						          	</div>
						          	<div class="title hotel-middle cell-view">
							            <h5>from <strong class="color-red-3">$860</strong> / person</h5>
							            <h6 class="color-grey-3 list-hidden">one way flights</h6>
						          	    <h4><b>Flights to monaco</b></h4>
						          	    <p class="list-hidden">Book now and <span class="color-red-3">save 30%</span></p>
						          	    <div class="fi_block grid-hidden row row10">
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_2.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    	<div class="flight-icon col-xs-6 col10">
						          	    		<img class="fi_icon" src="https://carnivalguide.co/travel/img/tour_list/flight_icon_1.png" alt="">
						          	    		<div class="fi_content">
						          	    			<div class="fi_title color-dark-2">take off</div>
						          	    			<div class="fi_text color-grey">wed nov 13, 2013 7:50 am</div>
						          	    		</div>
						          	    	</div>
						          	    </div>
							            <a href="#" class="c-button b-40 bg-red-3 hv-red-3-o">book now</a>
							            <a href="#" class="c-button b-40 color-grey-3 hv-o fr"><img src="https://carnivalguide.co/travel/img/flag_icon_grey.png" alt="">view more</a>
						            </div>
						            <div class="title hotel-right clearfix cell-view grid-hidden">
					          	        <div class="hotel-right-text color-dark-2">one way flights</div>
					          	        <div class="hotel-right-text color-dark-2">1 stop</div>
						            </div>						            
					            </div>
					        </div>					
  						</div>  						   						 						  						  						  						  						  						   						  						  						  						  						 						   						 						   						 						  						   						 						  						
  					</div>

  					<div class="c_pagination clearfix padd-120">
						<a href="#" class="c-button b-40 bg-red-3 hv-red-3-o fl">prev page</a>
						<a href="#" class="c-button b-40 bg-red-3 hv-red-3-o fr">next page</a>
						<ul class="cp_content color-4">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">10</a></li>
						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
@endsection