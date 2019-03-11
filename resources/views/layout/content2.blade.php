<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>LightShop | Home</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href="/lightshop/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/lightshop/css/shop.css" type="text/css" media="screen" property="" />
    <link href="/lightshop/css/style7.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/lightshop/css/checkout.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Owl-carousel-CSS -->
    <link rel="stylesheet" href="/lightshop/css/flexslider.css" type="text/css" media="screen" />
	<link href="/lightshop/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="/lightshop/css/contact.css">
    <link href="/lightshop/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="/lightshop/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
<!-- banner -->
<div class="banner_top innerpage" id="home">
    <div class="wrapper_top_w3layouts">
        <div class="header_agileits">
            <div class="logo inner_page_log">
                <h1><a class="navbar-brand" href="{{url('/')}}"><span>Light</span> <i>Shop</i></a></h1>
            </div>
        </div>
    </div>
    <!-- //cart details -->

    <div class="clearfix"></div>
    <!-- /banner_inner -->
    <div class="services-breadcrumb_w3ls_agileinfo">
        <div class="inner_breadcrumb_agileits_w3">

            <ul class="short">
                <li><a href="{{url('/')}}">Home</a><i>\</i></li>
                @for($i = 1; $i <= count(Request::segments()); $i++)
                <li>
                   <span>
                      {{strtoupper(Request::segment($i))}}
                   </span>
                   @if ($i != count(Request::segments()))
                    <i>\</i>
                   @endif
                </li>
             @endfor
            </ul>
        </div>
    </div>
    <!-- //banner_inner -->
</div>

<!-- //banner -->


@yield('content')


@include('layout.footer')