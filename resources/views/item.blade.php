@extends('layout.content2') 
@section('content')


<div class="ads-grid_shop">
	<div class="shop_inner_inf">
		<div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">


					<div class="clearfix"></div>
					<div class="flex-viewport" style="overflow: hidden; position: relative;">
						<ul>
								<li data-thumb="{{ url('/storage/uploads/' . $item->image3) }}" class="clone" aria-hidden="true" style="width: 401px; float: left; display: block;">
									<div class="thumb-image"> 
										<img src="{{ url('/storage/uploads/' . $item->image3) }}" data-imagezoom="true" class="img-responsive" draggable="false">
									 </div>
								</li>
						</ul>
					</div>
					<ul class="flex-direction-nav">
						<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
						<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3>{{ $item->name }}</h3>
			<p><span class="item_price">${{ $item->price }}</span>
			</p>
			<div class="rating1">
				<ul class="stars">
					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<br>
			<div class="color-quality">
				<div class="color-quality-right">
					<h5>Quantity :</h5>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">1 Qty</option>
								<option value="null">2 Qty</option>
								<option value="null">3 Qty</option>
								<option value="null">4 Qty</option>
								<option value="null">5 Qty</option>
							</select>
				</div>
			</div>
			<div class="occasional">
		
				<div class="clearfix"> </div>
			</div>
			<div class="occasion-cart">
				<div class="shoe single-item single_page_b">
					<form action="#" method="post">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1">
						<input type="hidden" name="shoe_item" value="Chikku Loafers">
						<input type="hidden" name="amount" value="405.00">
						<input type="submit" name="submit" value="Add to cart" class="button add">

						<a href="#" data-toggle="modal" data-target="#myModal1"></a>
					</form>

				</div>

			</div>
			<ul class="social-nav model-3d-0 footer-social social single_page">
				<li class="share">Share On : </li>
				<li>
					<a href="#" class="facebook">
						<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="twitter">
						<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="instagram">
						<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="pinterest">
						<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
					</a>
				</li>
			</ul>

		</div>
		<div class="clearfix"> </div>
		<!--/tabs-->
		<div class="responsive_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Description</li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Reviews</li>
				</ul>
				<div class="resp-tabs-container">
					<!--/tab_one-->
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Description</h2>
					<div class="tab1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0"
					 style="display:block">

						<div class="single_page">
							<h6>{{ $item->name }}</h6>
							<p>{{ $item->description }} </p>
						</div>
					</div>
					<!--//tab_one-->
					<div class="tab2 resp-tab-content">

						<div class="single_page">
							<div class="bootstrap-tab-text-grids">
								<div class="bootstrap-tab-text-grid">
									<div class="bootstrap-tab-text-grid-left">
										<div style="text-align: center;">
												<i class="fa fa-user fa-5x"></i>
										</div>
									</div>
									<div class="bootstrap-tab-text-grid-right">
										<ul>
											<li><a href="#">Admin</a></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
											quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
											autem vel eum iure reprehenderit.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="add-review">
									<h4>add a review</h4>
									<form action="#" method="post">
										<textarea name="Message" required=""></textarea>
										<input type="submit" value="SEND">
									</form>
								</div>
							</div>

						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!--//tabs-->
		<!-- /new_arrivals -->
		<div class="new_arrivals">
			<h3>Featured Products</h3>
			<!-- /womens -->
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src="/lightshop/images/s4.jpg" alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href="single.html">Shuberry Heels </a>
							</h4>
							<div class="info-product-price">
								<div class="grid_meta">
									<div class="product_price">
										<div class="grid-price ">
											<span class="money ">$575.00</span>
										</div>
									</div>
									<ul class="stars">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="shoe single-item hvr-outline-out">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="shoe_item" value="Shuberry Heels">
										<input type="hidden" name="amount" value="575.00">
										<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form>

								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src="/lightshop/images/s5.jpg" alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href="single.html">Red Bellies </a>
							</h4>
							<div class="info-product-price">
								<div class="grid_meta">
									<div class="product_price">
										<div class="grid-price ">
											<span class="money ">$325.00</span>
										</div>
									</div>
									<ul class="stars">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="shoe single-item hvr-outline-out">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="shoe_item" value="Red Bellies">
										<input type="hidden" name="amount" value="325.00">
										<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form>

								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src="/lightshop/images/s7.jpg" alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href="single.html">Running Shoes</a>
							</h4>
							<div class="info-product-price">
								<div class="grid_meta">
									<div class="product_price">
										<div class="grid-price ">
											<span class="money ">$875.00</span>
										</div>
									</div>
									<ul class="stars">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="shoe single-item hvr-outline-out">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="shoe_item" value="Running Shoes">
										<input type="hidden" name="amount" value="875.00">
										<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form>

								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 product-men women_two">
				<div class="product-shoe-info shoe">
					<div class="men-pro-item">
						<div class="men-thumb-item">
							<img src="/lightshop/images/s8.jpg" alt="">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="single.html" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>
						</div>
						<div class="item-info-product">
							<h4>
								<a href="single.html">Sukun Casuals</a>
							</h4>
							<div class="info-product-price">
								<div class="grid_meta">
									<div class="product_price">
										<div class="grid-price ">
											<span class="money ">$505.00</span>
										</div>
									</div>
									<ul class="stars">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="shoe single-item hvr-outline-out">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1">
										<input type="hidden" name="shoe_item" value="Sukun Casuals">
										<input type="hidden" name="amount" value="505.00">
										<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

										<a href="#" data-toggle="modal" data-target="#myModal1"></a>
									</form>

								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- //womens -->
			<div class="clearfix"></div>
		</div>
		<!--//new_arrivals-->


	</div>
</div>
@endsection