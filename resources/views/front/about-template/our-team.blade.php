<style>
	.team-description {
		max-height: 80px;
		/* Adjust as needed */
		overflow: hidden;
		transition: max-height 0.3s;
		position: relative;
	}

	.team-description.expanded {
		max-height: none;
	}

	.see-more-link {
		color: #007bff;
		cursor: pointer;
		display: block;
		margin-top: 5px;
	}
</style>
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
			@foreach ($ourTeam as $key => $team)
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
						<div class="team-description-wrapper">
							<p class="team-description color-dark-2-light">{!! $team->description !!}</p>
							<a href="javascript:void(0);" class="see-more-link" style="display:none;">See more</a>
						</div>
					</div>
				</div>
			@if ($key % 2 == 0)
			</div>
			<div class="row">
			@endif
			@endforeach
		</div>
	</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('.team-description').forEach(function(desc, idx) {
			// Check if content overflows
			if (desc.scrollHeight > desc.clientHeight) {
				var link = desc.parentElement.querySelector('.see-more-link');
				link.style.display = 'block';
				link.textContent = 'See more';
				link.addEventListener('click', function() {
					if (desc.classList.contains('expanded')) {
						desc.classList.remove('expanded');
						link.textContent = 'See more';
					} else {
						desc.classList.add('expanded');
						link.textContent = 'See less';
					}
				});
			}
		});
	});
</script>