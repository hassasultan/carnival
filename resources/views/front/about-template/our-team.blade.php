<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="second-title">
					<h4 class="subtitle color-blue-2 underline">our team</h4>
					<h2>MEET OUR TEAM</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach ($ourTeam as $team)
			<div class="col-xs-12 col-sm-4">
				<div class="team-entry">
				  <div class="image" style="height:250px;">
				  	<img class="team-img img-responsive" src="{{ asset('ourTeam/' . $team->image) }}" alt="">
					  <div class="team-layer bg-blue">
						<div class="team-share vertical-align">
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-skype"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
				      </div>
				  </div>
					<h3 class="team-name color-dark-2">{{ $team->name }}</h3>
					<h5 class="team-position color-dark-2-light">{{ $team->title }}</h5>
					<p class="color-dark-2-light">{!! $team->description !!}</p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
