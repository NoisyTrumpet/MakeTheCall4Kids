<div class="container">
	<div class="gradContainer">
		<h1 class="quickSand textPurple bold text-center">@field('main_headline')</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
				<div class="stepSection text-center">
					<h4 class="quickSand textOrange regular">Step</h4>
					<div class="circle">
						<h4 class="quickSand semiBold textPurple">1</h4>
					</div>
					<p class="quickSand light textBlack">@field('step_1')</p>
					<img class="samplePhone" src="@asset('images/sample.png')">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
				<div class="stepSection text-center">
					<h4 class="quickSand textOrange regular">Step</h4>
					<div class="circle">
						<h4 class="quickSand semiBold textPurple">2</h4>
					</div>
					<p class="quickSand light textBlack">@field('step_2')</p>
					<img class="phones" src="@asset('images/iPhoneSelection.png')">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
				<div class="stepSection text-center">
					<h4 class="quickSand textOrange regular">Step</h4>
					<div class="circle">
						<h4 class="quickSand semiBold textPurple">3</h4>
					</div>
					<p class="quickSand light textBlack">@field('step_3')</p>
					<img class="tjh" src="@asset('images/tjh.png')">
				</div>
			</div>
		</div>
		<div class="centerMe">
			<a class="button buttonRed quickSand semiBold" href="/shop" >Choose Your Phone</a>
		</div>
	</div>
</div>