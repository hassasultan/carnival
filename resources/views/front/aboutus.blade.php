@extends('front.layouts.app')
@section('front-content')
@include('front.about-template.banner-area')
@include('front.about-template.our-team')
@include('front.home-template.our-service')
@include('front.about-template.faqs')
@include('front.home-template.our-partner')
@include('front.home-template.testimonial')
@include('front.home-template.our-gallery')
@include('front.home-template.subscribe')
@include('front.home-template.news')
@include('front.home-template.brand-showcase')
<div class="main-wraper bg-grey-2 padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-blue-2 underline">contact</h4>
					<h2>get in touch</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<form class="contact-form">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" required="" placeholder="Enter your name">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" required="" placeholder="Enter your email">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
							  	<input type="text" required="" placeholder="Subject">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="drop-wrap drop-wrap-s-3 drop-wrap-s-5 color-2">
							  	<div class="drop">
								 	<b>Department</b>
									<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
									<span>
									    <a href="#">Department 1</a>
										<a href="#">Department 1</a>
										<a href="#">Department 3</a>
										<a href="#">Department 4</a>
										<a href="#">Department 5</a>
									</span>
							   	</div>
							</div>
						</div>
						<div class="col-xs-12">
							<textarea class="area-style-1 color-1" required="" placeholder="Enter your comment"></textarea>
							<button type="submit" class="c-button bg-blue-2 hv-blue-2-o"><span>submit comment</span></button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="contact-about">
					<h4 class="color-dark-2"><strong>about us</strong></h4>
					<p class="color-grey-3">Donec gravida euismod felis, quis dictum justo scelerisque in. Aenean nec lacus ipsum. Suspendisse vel lobortis libero, eu imperdiet purus.  Aenean nec lacus ipsum.</p>
				</div>
				<div class="contact-info">
					<h4 class="color-dark-2"><strong>contact info</strong></h4>
					<div class="contact-line color-grey-3"><img src="https://carnivalguide.co/new/img/phone_icon_2_blue.png" alt="">Phone: <a class="color-dark-2" href="tel:93123456789">+93 123 456 789</a></div>
					<div class="contact-line color-grey-3"><img src="https://carnivalguide.co/new/img/mail_icon_b_blue.png" alt="">Email us: <a class="color-dark-2 tt" href="mailto:letstravel@world.com">let’s_travel@world.com</a></div>
					<div class="contact-line color-grey-3"><img src="https://carnivalguide.co/new/img/loc_icon_blue.png" alt="">Address: <span class="color-dark-2 tt">Aenean vulputate porttitor</span></div>
				</div>
				<div class="contact-socail">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-pinterest-p"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('front-script')
@endsection
