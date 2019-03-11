@extends('layout.content2')
@section('content')


    <!-- //banner -->
    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <!-- tittle heading -->

            <!-- //tittle heading -->
            <!-- product left -->
            <div class="side-bar col-md-3">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Here..</h3>
                    <form  method="get">
                    <input type="search" placeholder="Product name..." name="search" value="{{ $search }}"  required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="agileits-sear-head">Categories</h3>
                    <ul>
                            <li>
                                    <a href="{{url('/shop')}}">
                                    <span style="{{ Request::path() == 'shop' ? 'color: red;' : '' }}"> All </span>
                                    </a>
                                  
                                </li>  
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{url('/shop/' . $category->id)}}">
                                    <span style="{{ isset($selected_category)?  $selected_category == $category->id? 'color: red;': '' : '' }}">{{ $category->name }}</span>
                                </a>
                              
                            </li>    
                        @endforeach
                    </ul>
                </div>
                <!-- //reviews -->

                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="agileits-sear-head">Filter by Reviews</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->
     

            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="left-ads-display col-md-9">
                <div class="wrapper_top_shop">
                    
                    <div class="clearfix"></div>
                    <!-- product-sec1 -->
                    <div class="product-sec1">
                        @if(count($items) == 0 )
                            <h3 style="margin: 10px;">Sorry No items to show</h3>
                        @endif
                        @foreach($items as $item)
                        <div class="col-md-4 product-men">
                                <div class="product-shoe-info shoe">
                                    <div class="men-pro-item">
                                        <div class="men-thumb-item">
                                            <img src="{{url('/storage/uploads/' . $item->image3)}}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ url('/item/' . $item->id ) }}" class="link-product-add-cart">View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h4>
                                                <a href="{{url('/item/' . $item->id )}}">{{ $item->name }}</a>
                                            </h4>
                                            <div class="info-product-price">
                                                <div class="grid_meta">
                                                    <div class="product_price">
                                                        <div class="grid-price ">
                                                            <span class="money ">${{ $item->price }}</span>
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
                                                        <input type="hidden" name="shoe_item" value="Bella Toes">
                                                        <input type="hidden" name="amount" value="675.00">
                                                        <button  class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
    
                                                        {{-- <a href="#" data-toggle="modal" data-target="#myModal1"></a> --}}
                                                    </form>
    
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>

                    </div>

                    <!-- //product-sec1 -->
                
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //top products -->
    <div class="mid_slider_w3lsagile">
        <div class="col-md-3 mid_slider_text">
            <h5>Some More Shoes</h5>
        </div>
        <div class="col-md-9 mid_slider_info">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
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
                    <div class="item active">
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


    @endsection