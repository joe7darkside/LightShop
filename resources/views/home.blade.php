@extends('layout.content')
	@section('content')
        <!-- banner -->
	<div class="banner_top" id="home">
		<div class="wrapper_top_w3layouts">

			<div class="header_agileits">
				<div class="logo">
				<h1><a class="navbar-brand" href="{{url('/')}}"><span>Light</span> <i>Shop</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="{{url('/')}}" class="active">Home</a></li>
							<li><a href="{{ url('/shop') }}">Items</a></li>
							<li><a href="{{ url('/about') }}">About</a></li>
							<li><a href="{{ url('/contact') }}">Contact</a></li>
							@auth
								{{-- <li><a href="{{ url('/bookmarks') }}">Bookmarks</a></li> --}}
								<li><a style="color: #ff0009;" href="{{url('/logout')}}">Logout</a></li>
								@if(auth()->user()->id == 1)
									<li><a  style="color: #ff8507;" href="{{ url('/admin/slideshows') }}">Manage Slideshow</a></li>
									<li><a  style="color: #ff8507;" href="{{ url('/admin/items') }}">Manage Items</a></li>
									<li><a  style="color: #ff8507;" href="{{ url('/admin/categories') }}">Manage Categories</a></li>
								@endif
							@endauth

							@guest
								<li><a href="{{url('/login')}}">Login</a></li>
							@endguest
							@guest
								<li><a href="{{url('/register')}}">Register</a></li>
							@endguest
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- search -->
				<div class="search_w3ls_agileinfo">
					<div class="cd-main-header">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
					</div>
					<div id="cd-search" class="cd-search">
						<form action="{{url('/shop')}}" method="get">
							<input name="search" type="search" placeholder="Click enter after typing...">
						</form>
					</div>
				</div>
				<!-- //search -->

				<div class="clearfix"></div>
			</div>
			<!-- /slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">
						@foreach ($slideshows as $slideshow)
							<li>
							<div class="banner-top" style="background: url({{ url('/storage/uploads/' . $slideshow->image) }}) no-repeat 0px 0px">
										<div class="banner-info-wthree">
											<h3>
												<a style="color: #ffff;" href="{{$slideshow->url}}">{{$slideshow->title}}</a>
											</h3>
											<p>{{$slideshow->description}}</p>
		
										</div>
		
									</div>
								</li>	
						@endforeach
					
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //slider -->
			<ul class="top_icons">
				<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

			</ul>
		</div>
	</div>
    <!-- //banner -->
    <div id="app">

	<!-- /girds_bottom-->
	<div class="grids_bottom">
		<div class="style-grids">
			<div class="col-md-6 style-grid style-grid-1">
				<img src="/lightshop/images/b1.jpg" alt="shoe">
			</div>
		</div>
		<div class="col-md-6 style-grid style-grid-2">
			<div class="style-image-1_info">
				<div class="style-grid-2-text_info">
					<h3>Nike DOWNSHIFTER</h3>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
						tempora incidunt ut labore et dolore .</p>
					<div class="shop-button">
						<a href="shop.html">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="style-image-2">
				<img src="/lightshop/images/b2.jpg" alt="shoe">
				<div class="style-grid-2-text">
					<h3>Air force</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
	<!-- //grids_bottom-->
	<!-- /girds_bottom2-->
	<div class="grids_sec_2">
		<div class="style-grids_main">
			<div class="col-md-6 grids_sec_2_left">
				<div class="grid_sec_info">
					<div class="style-grid-2-text_info">
						<h3>Sneakers</h3>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
							tempora incidunt ut labore .</p>
						<div class="shop-button">
							<a href="shop.html">Shop Now</a>
						</div>
					</div>
				</div>
				<div class="style-image-2">
					<img src="/lightshop/images/b4.jpg" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Air force</h3>
					</div>
				</div>
			</div>
			<div class="col-md-6 grids_sec_2_left">

				<div class="style-image-2">
					<img src="/lightshop/images/b3.jpg" alt="shoe">
					<div class="style-grid-2-text">
						<h3>Air force</h3>
					</div>
				</div>
				<div class="grid_sec_info last">
					<div class="style-grid-2-text_info">
						<h3>Sneakers</h3>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
							tempora incidunt ut labore .</p>
						<div class="shop-button two">
							<a href="shop.html">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //grids_bottom2-->
	<!-- /Properties -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Styles</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1" class=""></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g5.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g6.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g1.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g2.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g3.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="/lightshop/images/g4.jpg" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!--//banner -->

	@endsection