<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>The Nest - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/bootstrap-submenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/leaflet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/map.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/css/dropzone.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('resources/assets/js/html5shiv.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('resources/assets/js/respond.min.js') }}"></script>        
    <![endif]-->
</head>
<body>

<div class="page_loader"></div>

<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                    <a href="tel:1-800-666-8888"><i class="fa fa-phone"></i>1-800-666-8888</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     @if (Route::has('login'))
                <ul class="top-social-media pull-right">
                       @auth
                       <li>
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                     <li>
                        <a href="{{ route('login') }}"   class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                    @endauth
                </ul>
                @endif
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="logo">
                    <img src="img/logos/logo.png" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Home<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                            <li><a href="index-4.html">Home 4</a></li>
                            <li><a href="index-5.html">Home 5</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Properties<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a tabindex="0">Properties List</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-list-rightside.html">Properties List Right Sidebar</a></li>
                                    <li><a href="properties-list-leftside.html">Properties List Left Sidebar</a></li>
                                    <li><a href="properties-list-fullwidth.html">Properties Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Properties Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-grid-rightside.html">Properties Grid Right Sidebar</a></li>
                                    <li><a href="properties-grid-leftside.html">Properties Grid Left Sidebar</a></li>
                                    <li><a href="properties-grid-fullwidth.html">Properties Grid Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Map View</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-map-leftside-list.html">Map Left Sidebar List</a></li>
                                    <li><a href="properties-map-rightside-list.html">Map Right Sidebar List</a></li>
                                    <li><a href="properties-map-leftside-grid.html">Map Left Sidebar Grid</a></li>
                                    <li><a href="properties-map-rightside-grid.html">Map Right Sidebar Grid</a></li>
                                    <li><a href="properties-map-full.html">Map Full Width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Property Detail</a>
                                <ul class="dropdown-menu">
                                    <li><a href="properties-details.html">Property Detail 1</a></li>
                                    <li><a href="properties-details-2.html">Property Detail 2</a></li>
                                    <li><a href="properties-details-3.html">Property Detail 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Agents<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="agent-listing-grid.html">Agent grid</a></li>
                            <li><a href="agent-listing-grid-sidebar.html">Agent Grid sidebarbar</a></li>
                            <li><a href="agent-listing-row.html">Agent list</a></li>
                            <li><a href="agent-listing-row-sidebar.html">Agent List Sidebarbar</a></li>
                            <li><a href="agent-single.html">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Blog<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                            <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                            <li><a href="blog-full-width.html">Blog full width</a></li>
                            <li><a href="blog-creative.html">Blog creative</a></li>
                            <li><a href="blog-single.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Pages<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a tabindex="0">Extras</a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="icon.html">icon</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">User Profile</a>
                                <ul class="dropdown-menu">
                                    <li><a href="user-profile.html">User profile</a></li>
                                    <li><a href="my-properties.html">My Properties</a></li>
                                    <li><a href="favorited-properties.html">Favorited Properties</a></li>
                                    <li><a href="submit-property.html">Submit Property</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a tabindex="0">Contact</a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact-2.html">Contact 2</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="submit-property.html" class="button">
                            Submit Property
                        </a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Banner start -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="http://placehold.it/1920x550" alt="banner-slider-1">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="text-center">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Find your </span> Dream House</h1>
                        <p class="hidden-xs">Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit</p>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-05s">Get Started Now</a>
                        <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-05s">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1920x550" alt="banner-slider-2">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="text-right">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Sweet Home For</span> <br>Small Family</h1>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-05s">Get Started Now</a>
                        <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-05s">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1920x550" alt="banner-slider-3">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="text-left">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>Best Place To</span><br> Find Home</h1>
                        <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-05s">Get Started Now</a>
                        <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-05s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Search area start -->
<div class="search-area">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form method="GET">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search area start -->

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Featured</span> Properties</h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">House</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Office</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Apartment</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">Residential</li>
        </ul>
        <div class="row">
            <div class="filtr-container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <a href="properties-details.html" class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="http://placehold.it/360x250" alt="properties-1" class="img-responsive">
                        </a>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>4800 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <i class="flaticon-building"></i>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                <span class="right">
                                    <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <a href="properties-details.html" class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Rent</div>
                            <div class="property-price">$150,000</div>
                            <img src="http://placehold.it/360x250" alt="properties-3" class="img-responsive">
                        </a>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>4800 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <i class="flaticon-building"></i>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                <span class="right">
                                    <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <a href="properties-details.html" class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="http://placehold.it/360x250" alt="properties-4" class="img-responsive">
                        </a>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>4800 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <i class="flaticon-building"></i>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                <span class="right">
                                    <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="3, 4">
                    <div class="property">
                        <!-- Property img -->
                        <a href="properties-details.html" class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Rent</div>
                            <div class="property-price">$150,000</div>
                            <img src="http://placehold.it/360x250" alt="properties-8" class="img-responsive">
                        </a>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="properties-details.html">Big Head House</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>4800 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <i class="flaticon-building"></i>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                <span class="right">
                                    <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                    <div class="property">
                        <!-- Property img -->
                        <a href="properties-details.html" class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Sale</div>
                            <div class="property-price">$150,000</div>
                            <img src="http://placehold.it/360x250" alt="properties-7" class="img-responsive">
                        </a>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="properties-details.html">Park Avenue</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>4800 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <i class="flaticon-building"></i>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                <span class="right">
                                    <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <a href="properties-details.html" class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <div class="property-tag button sale">For Rent</div>
                            <div class="property-price">$150,000</div>
                            <img src="http://placehold.it/360x250" alt="properties-5" class="img-responsive">
                        </a>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="properties-details.html">Masons Villas</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>4800 sq ft</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <i class="flaticon-building"></i>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                <span class="right">
                                    <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Our service start -->
<div class="mrg-btm-100 our-service">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>What are you</span> looking for?</h1>
        </div>

        <div class="row mgn-btm wow">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-apartment"></i>
                    <h4>Apartments</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-internet"></i>
                    <h4>Houses</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="flaticon-vehicle"></i>
                    <h4>Garages</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="flaticon-symbol"></i>
                    <h4>Commercial</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>
        </div>
        <a href="#" class="btn button-md button-theme">Read More</a>
    </div>
</div>
<!-- Our service end -->

<!-- Recently properties start -->
<div class="mrg-btm-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Recently</span> Properties</h1>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners2">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details.html" class="property-img">
                                    <img src="http://placehold.it/262x182" alt="properties-3" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.html">Modern Family Home</a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span> 2 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    <div class="property-footer">
                                        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                        <span class="right">
                                             <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                             <a href="#"><i class="fa fa-share-alt"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details.html" class="property-img">
                                    <img src="http://placehold.it/262x182" alt="properties-1" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.htmll">Beautiful Single Home</a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span> 2 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    <div class="property-footer">
                                        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                        <span class="right">
                                             <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                             <a href="#"><i class="fa fa-share-alt"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details.html" class="property-img">
                                    <img src="http://placehold.it/262x182" alt="properties-6" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span> 2 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    <div class="property-footer">
                                        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                        <span class="right">
                                             <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                             <a href="#"><i class="fa fa-share-alt"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <a href="properties-details.html" class="property-img">
                                    <img src="http://placehold.it/262x182" alt="properties-2" class="img-responsive">
                                </a>
                                <!-- Property content -->
                                <div class="property-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="properties-details.html">Sweet Family Home</a>
                                    </h1>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                    <!-- Facilities List -->
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span> 2 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                    </ul>
                                    <!-- Property footer -->
                                    <div class="property-footer">
                                        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
                                        <span class="right">
                                             <a href="#"><i class="fa fa-heart-o icon"></i></a>
                                             <a href="#"><i class="fa fa-share-alt"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->

<!-- Categories strat -->
<div class="categories">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Popular</span> Places</h1>
        </div>
        <div class="clearfix"></div>
        <div class="row wow">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <span class="category-content">
                                        <span class="category-title">Florida</span>
                                        <br>
                                        <span class="category-subtitle">14 Properties</span>
                                        <br>
                                        <a href="#" class="btn button-sm button-theme">View All</a>
                                    </span><!-- /.category-content -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <span class="category-content">
                                        <span class="category-title">California</span>
                                        <br>
                                        <span class="category-subtitle">14 Properties</span>
                                        <br>
                                         <a href="#" class="btn button-sm button-theme ">View All</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-pad wow fadeInUp delay-04s">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <span class="category-content">
                                        <span class="category-title">New York</span>
                                        <br>
                                        <span class="category-subtitle">27 Properties</span>
                                        <br>
                                        <a href="#" class="btn button-sm button-theme ">View All</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <span class="category-content">
                                <span class="category-title">San Francisco</span>
                                <br>
                                <span class="category-subtitle">14 Properties</span>
                                <br>
                                 <a href="#" class="btn button-sm button-theme ">View All</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end-->

<!-- Agent section start -->
<div class="mrg-btm-70 agent-section chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our</span> Agent</h1>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners3">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent box start -->
                            <div class="agent-box">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x201" alt="team-1" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="agent-single.html">John Antony</a>
                                    </h1>
                                    <!-- Contact -->
                                    <div class="contact">
                                        <p>
                                            <a href="mailto:sales@themevessel.com"><i class="fa fa-envelope-o"></i>sales@themevessel.com</a>
                                        </p>
                                        <p>
                                            <a href="tel:+55417-634-7071"><i class="fa fa-phone"></i>+55 417-634-7071</a>
                                        </p>
                                        <p>
                                            <a href="#"><i class="fa fa-skype"></i>sales.thenest</a>
                                        </p>
                                    </div>
                                    <!-- Social list -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent box end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent box end -->
                            <div class="agent-box">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x201" alt="team-2" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="agent-single.html">Karen Paran</a>
                                    </h1>
                                    <!-- Contact -->
                                    <div class="contact">
                                        <p>
                                            <a href="mailto:sales@themevessel.com"><i class="fa fa-envelope-o"></i>sales@themevessel.com</a>
                                        </p>
                                        <p>
                                            <a href="tel:+55417-634-7071"><i class="fa fa-phone"></i>+55 417-634-7071</a>
                                        </p>
                                        <p>
                                            <a href="#"><i class="fa fa-skype"></i>sales.thenest</a>
                                        </p>
                                    </div>
                                    <!-- Sociallist -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent box end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent box start -->
                            <div class="agent-box">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x201" alt="team-3" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="agent-single.html">John maikel</a>
                                    </h1>
                                    <!-- Contact -->
                                    <div class="contact">
                                        <p>
                                            <a href="mailto:sales@themevessel.com"><i class="fa fa-envelope-o"></i>sales@themevessel.com</a>
                                        </p>
                                        <p>
                                            <a href="tel:+55417-634-7071"><i class="fa fa-phone"></i>+55 417-634-7071</a>
                                        </p>
                                        <p>
                                            <a href="#"><i class="fa fa-skype"></i>sales.thenest</a>
                                        </p>
                                    </div>
                                    <!-- Sociallist -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent box enx -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Agent bos start -->
                            <div class="agent-box">
                                <!-- Agent img -->
                                <a href="properties-details.html" class="agent-img">
                                    <img src="http://placehold.it/262x201" alt="team-1" class="img-responsive">
                                </a>
                                <!-- Agent content -->
                                <div class="agent-content">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="agent-single.html">Eliane Pereira</a>
                                    </h1>
                                    <!-- Contact -->
                                    <div class="contact">
                                        <p>
                                            <a href="mailto:sales@themevessel.com"><i class="fa fa-envelope-o"></i>sales@themevessel.com</a>
                                        </p>
                                        <p>
                                            <a href="tel:+55417-634-7071"><i class="fa fa-phone"></i>+55 417-634-7071</a>
                                        </p>
                                        <p>
                                            <a href="#"><i class="fa fa-skype"></i>sales.thenest</a>
                                        </p>
                                    </div>
                                    <!-- Sociallist -->
                                    <ul class="social-list clearfix">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Agent bos end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Agent section end -->

<!-- Testimonial section start-->
<div class="testimonial-section testimonial-2 testimonial-3">
    <div class="testimonial-section-inner">
        <div class="container">
            <div class="main-title">

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials">
                        <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item content clearfix active">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="avatar">
                                                <img src="http://placehold.it/150x150" alt="avatar-1" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="testimonials-info">
                                                <div class="text">
                                                    <sup>
                                                        <i class="fa fa-quote-left"></i>
                                                    </sup>
                                                    Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                    <sub>
                                                        <i class="fa fa-quote-right"></i>
                                                    </sub>
                                                </div>
                                                <div class="author-name">
                                                    John Antony
                                                </div>
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item content clearfix">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="avatar">
                                                <img src="http://placehold.it/150x150" alt="avatar-2" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="testimonials-info">
                                                <div class="text">
                                                    <sup>
                                                        <i class="fa fa-quote-left"></i>
                                                    </sup>
                                                    Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                    <sub>
                                                        <i class="fa fa-quote-right"></i>
                                                    </sub>
                                                </div>
                                                <div class="author-name">
                                                    John Mery
                                                </div>
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item content clearfix">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="avatar">
                                                <img src="http://placehold.it/150x150" alt="avatar-4" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="testimonials-info">
                                                <div class="text">
                                                    <sup>
                                                        <i class="fa fa-quote-left"></i>
                                                    </sup>
                                                    Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                    <sub>
                                                        <i class="fa fa-quote-right"></i>
                                                    </sub>
                                                </div>
                                                <div class="author-name">
                                                    John Top
                                                </div>
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item content clearfix">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="avatar">
                                                <img src="http://placehold.it/150x150" alt="avatar-3" class="img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                                            <div class="testimonials-info">
                                                <div class="text">
                                                    <sup>
                                                        <i class="fa fa-quote-left"></i>
                                                    </sup>
                                                    Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                    <sup>
                                                        <i class="fa fa-quote-right"></i>
                                                    </sup>

                                                </div>
                                                <div class="author-name">
                                                    John Pitarshon
                                                </div>
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                                <span class="slider-mover-left" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                                 <span class="slider-mover-right" aria-hidden="true">
                                      <i class="fa fa-angle-right"></i>
                                 </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end -->
<div class="clearfix"></div>

<!-- Counters strat -->
<div class="counters">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">967</h1>
                    <p>Listings For Sale</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">1276</h1>
                    <p>Listings For Rent</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-people"></i>
                    <h1 class="counter">396</h1>
                    <p>Agents</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">177</h1>
                    <p>Brokers</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <h3>Brands & Partners</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/222x82" alt="audiojungle">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/222x82" alt="themeforest">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/222x82" alt="tuts">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/222x82" alt="graphicriver">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href="#">
                                    <img src="http://placehold.it/222x82" alt="codecanyon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->

<!-- Footer start -->
<footer class="main-footer clearfix">
    <div class="container">
        <!-- Footer top -->
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-3 col-xs-12">
                    <div class="logo-2">
                        <a href="index.html">
                            <img src="img/logos/footer-logo.png" alt="footer-logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-5 col-xs-12">
                    <form action="#" method="GET">
                        <input type="text" class="form-contact" name="email" placeholder="Enter your email">
                        <button type="submit" name="submitNewsletter" class="btn btn-default button-small">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <ul class="social-list clearfix">
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Contact Us</h1>
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printing and typesetting
                        </p>
                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Address: 20/F Green Road, Dhanmondi, Dhaka
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:<a href="mailto:sales@hotelempire.com">sales@themevessel.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone: <a href="tel:+55-417-634-7071">+55 417-634-7071</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Fax: +55 417-634-7071
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Links -->
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Links</h1>
                        </div>
                        <ul class="links">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="blog-single.html">Blog</a>
                            </li>
                            <li>
                                <a href="properties-list-rightside.html">properties Listing</a>
                            </li>
                            <li>
                                <a href="properties-grid-rightside.html">properties Grid</a>
                            </li>
                            <li>
                                <a href="properties-details.html">properties Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tags -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item tags-box">
                        <div class="main-title-2">
                            <h1>Tags</h1>
                        </div>
                        <ul class="tags">
                            <li><a href="#">Image</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Typography</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Slideshow</a></li>
                            <li><a href="#">Post Formats</a></li>
                            <li><a href="#">Sellers</a></li>
                            <li><a href="#">WooCommerce</a></li>
                            <li><a href="#">Shortcodes</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Recent cars -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item popular-posts">
                        <div class="main-title-2">
                            <h1>popular posts</h1>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-1">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="#">Modern Design Building</a>
                                </h3>
                                <p>21 October, 2016</p>
                                <div class="comments-icon">
                                    <i class="fa fa-comments"></i>45 comments
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-2">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="#">Real Eatate Expo 2016</a>
                                </h3>
                                <p>10 October, 2016</p>
                                <div class="comments-icon">
                                    <i class="fa fa-comments"></i>32 comments
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-3">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="#">Construction and Development</a>
                                </h3>
                                <p>10 October, 2016</p>
                                <div class="comments-icon">
                                    <i class="fa fa-comments"></i>58 comments
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        &copy;  2017 <a href="http://themevessel.com/" target="_blank">Theme Vessel</a>. Trademarks and brands are the property of their respective owners.
    </div>
</div>
<!-- Copy end right-->

<script type="text/javascript" src="{{ asset('resources/assets/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/bootstrap-submenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/rangeslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/jquery.mb.YTPlayer.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/jquery.scrollUp.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/leaflet.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/leaflet-providers.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/leaflet.markercluster.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/jquery.filterizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/js/maps.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/js/js/app.js') }}"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="{{ asset('resources/assets/js/js/ie10-viewport-bug-workaround.js') }}"></script>
<!-- Custom javascript -->
<script type="text/javascript" src="{{ asset('resources/assets/js/js/ie10-viewport-bug-workaround.js') }}"></script>

</body>
</html>