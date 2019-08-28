@php
$phones_query = new WP_Query([
	'post_type' => 'product',
	'posts_per_page' => 3,
]);
@endphp
<section id="phonesGrid">
	<div class="container">
		<div class="gradContainer">
			<h2 class="quickSand textPurple semiBold text-center">Select Your iPhone & Beats Gift</h2>
			<div class="row">
				@posts($phones_query)
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<h3 class="quickSand textOrange medium text-center">@title</h3>
					<a href="@permalink">
						<img class="phoneThumb" src="@php(the_post_thumbnail_url())">
					</a>
					<div class="centerMe">
						<a class="quickSand button buttonPurple semiBold" href="@permalink">Donate Now</a>
					</div>
				</div>
				@endposts
			</div>
		</div>
	</div>
</section>