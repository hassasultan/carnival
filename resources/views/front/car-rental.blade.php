@extends('front.layouts.app')
@section('front-content')
<div class="full-height">
	<div class="video-wrapper" style="background-image:url(https://carnivalguide.co/travel/img/rentalbg.jpg); background-size: cover; padding-top:300px; text-align:center;" >
		<div ><h1 style="color:#fff">CAR RENTALS</h1></div>
	</div>
</div>
	     <div class="container">
		    <form action="#" class="hotel-filter">
		       <div class="baner-bar cars-bar">
			    <div class="row">
				    <div class="col-md-12">
			         <div class="hotels-block">
				      <h4>From</h4>
						<div class="input-style-1">
							<img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
							  <input type="text" placeholder="Destination; Zip Code" required>
						</div>
						<div class="input-entry color-5">
							<input class="checkbox-form" id="text-1" type="checkbox" name="checkbox" value="climat control">
							<label class="clearfix" for="text-1">
								<span class="sp-check"><i class="fa fa-check"></i></span>
								<span class="checkbox-text">Same location</span>
							</label>
						</div>
					 </div>	
					</div>
				</div>
				<div class="row">
				    <div class="col-md-12">
			         <div class="hotels-block">
				      <h4>To</h4>
						<div class="input-style-1">
							<img src="https://carnivalguide.co/travel/img/loc_icon_small_grey.png" alt="">
							  <input type="text" placeholder="Destination; Zip Code" required>
						</div>
					 </div>	
					</div>
				</div>
				<div class="row">
				   <div class="timePiker"></div>
					<div class="col-md-2">
					  <div class="hotels-block">
					   <h4>Check in</h4>
						<div class="input-style-1">
							<img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
							  <input type="text" placeholder="" class="datepicker" required>
						</div>
					  </div>
					</div>
					<div class="col-md-2">
					  <div class="hotels-block">
					   <h4>Time</h4>
						<div class="time-input">
				          <img src="https://carnivalguide.co/travel/img/clock.png" alt="">
							<input type="text" data-field="time" readonly>
						</div>
					  </div>
					</div>
					<div class="col-md-2">
					  <div class="hotels-block">
					   <h4>Check in</h4>
						<div class="input-style-1">
							<img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png" alt="">
							  <input type="text" placeholder="" class="datepicker" required>
						</div>
					  </div>
					</div>
					<div class="col-md-2">
					  <div class="hotels-block">
					   <h4>Time</h4>
						<div class="time-input">
				          <img src="https://carnivalguide.co/travel/img/clock.png" alt="">
							<input type="text" data-field="time" readonly>
						</div>
					  </div>
					  
					</div>
					<div class="col-md-2 col-md-offset-2">
						<div class="submit">
						   <input class="c-button b-60 bg-white hv-orange" type="submit" value="search now">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">	
						<div class="range-wrapp">
						   <h4>Price range</h4>
							<div class="slider-range" data-counter="$" data-position="start" data-from="0" data-to="5000" data-min="0" data-max="5000">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">						
							</div>
						</div>
					</div>	
				    
				</div>
			 </div>
		   </form>
		</div> 	


      
    <div class="main-wraper hotel-items">
        <div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="second-title">
    					<h2>Advanced Search (16)</h2>
    					  <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id tor.</p>
    				</div>
    			</div>
    		</div>
    		<div class="row">
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
				  <div class="low-price">-10%</div>
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_1a.fw.png" alt="">
						   <div class="price price-s-1">$500<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">porsche cayenne</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_2.png" alt="">
						   <div class="price price-s-1">$350 <span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Totota</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_3.png" alt="">
						   <div class="price price-s-1">$200<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Nissan</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_4.png" alt="">
						   <div class="price price-s-1">$400<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">hyundai</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
    		</div>
    		<div class="row">
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_5.png" alt="">
						   <div class="price price-s-1">$500<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">mustang</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_6.png" alt="">
						   <div class="price price-s-1">$250 <span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Opel</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
				   <div class="low-price">-20%</div>
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_7.png" alt="">
						   <div class="price price-s-1">$350<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Jeep</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_8.png" alt="">
						   <div class="price price-s-1">$400<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">volkswagen</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
    		</div>
    	    <div class="row">
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_1.png" alt="">
						   <div class="price price-s-1">$500<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">porsche cayenne</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
				  <div class="low-price">-50%</div>
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_2.png" alt="">
						   <div class="price price-s-1">$350 <span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Totota</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_3.png" alt="">
						   <div class="price price-s-1">$200<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Nissan</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_4.png" alt="">
						   <div class="price price-s-1">$400<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">hyundai</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
    		</div>
    		<div class="row">
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_5.png" alt="">
						   <div class="price price-s-1">$500<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">mustang</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_6.png" alt="">
						   <div class="price price-s-1">$250 <span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Opel</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_7.png" alt="">
						   <div class="price price-s-1">$350<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">Jeep</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
			  <div class="col-md-3 col-sm-6 col-xs-12">
				  <div class="hotel-item cars-item">
					 <div class="radius-top">
						 <img src="https://carnivalguide.co/travel/img/car_8.png" alt="">
						   <div class="price price-s-1">$400<span>/day</span></div>
					 </div>
					 <div class="title">
						 <h4><a href="#">volkswagen</a></h4>
					      <h6 class="clas">standart</h6>
						   <div class="rate-wrap">
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_2.png" alt=""><i>X2</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_3.png" alt=""><i>X4</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_5.png" alt=""><i>+</i></span>
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_1.png" alt=""><i>auto</i></span> 
							  <span class="car-i"><img src="https://carnivalguide.co/travel/img/car_icon_4.png" alt=""><i>gaz</i></span>
						   </div>  
					 </div>
				  </div>
			  </div>
    		</div>
		</div>
	</div>

@endsection