<section id="SA-Hero-Wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<img class="tjh" src="@asset('images/tjh.png')">
				<p class="quickSand textOrange light text-center">Presents</p>
				<h1 class="quickSand textPurple bold">{!! get_bloginfo(); !!}</h1>
				<p class="quickSand textOrange light text-center">@field('main_sub')</p>
				<p class="quickSand textBlack light">@field('main_bolier')</p>
				<div class="centerMe">
					<a class="button buttonLightBlue semiBold" href="/shop">Donate Now</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<img class="mainPhone" src="@asset('images/MainPhone.png')">
			</div>
		</div>
	</div>
</section>