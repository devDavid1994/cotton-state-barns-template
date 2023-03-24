<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>Home l Cotton State Barns</title>
        <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
        <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
        <meta name="author" content="spacingtech_webify">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="image/fevicon.png">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- simple-line icon -->
        <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">
        <!-- font-awesome icon -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <!-- themify icon -->
        <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
        <!-- ion icon -->
        <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <!-- owl slider -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
        <!-- swiper -->
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
        <!-- animation -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- style -->
        <link rel="stylesheet" type="text/css" href="css/style5.css">
        <link rel="stylesheet" type="text/css" href="css/responsive3.css">
    </head>
    <body>
        
        <?php include 'header.php'; ?>

        <!-- header start -->
        <header class="header-area">
            <div class="header-main-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- logo start -->
                                <div class="header-element logo">
                                    <a href="index3.php">
                                        <img src="image/logo2.png" alt="logo-image" class="img-fluid">
                                    </a>
                                </div>
                                <!-- logo end -->
                                <!-- search start -->
                                <div class="header-element header-search">
                                    <form>
                                        <input type="text" name="search" placeholder="Search Product.">
                                        <a href="search.php" class="search-btn"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                                <!-- search end -->
                                <!-- header icon start -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                            <span class="line"></span>
                                            </button>
                                        </li>
                                        <li class="side-wrap search-wrap">
                                            <!-- mobile search start -->
                                            <div class="search-rap">
                                                <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                            </div>
                                            <!-- mobile search start -->
                                        </li>
                                       
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                   <!-- <a href="#" class="cart-count">
                                                <span class="wishlist-icon">Your Dealer:</span>
                                                            <span><b style="color: #295129;">Gardendale, AL</b></span>
                                                    </a>
													<div class="addressphonehours">
													<p>3208 Decatur Hwy, Gardendale, AL</p>
													<p>PHONE: (205) 914-2286</p>-->

														<a href="#" id="openLocationChange">
															<span class="wishlist-icon">Your Dealer:</span>
															<span><b style="color: #295129;" id="dealer_name">No dealer found.</b></span>
														</a>
														<div class="addressphonehours" id="dealer_info" style="display: none">
															<p id="dealer_addr">3208 Decatur Hwy, Gardendale, AL</p>
															<p id="dealer_phone">PHONE: (205) 914-2286</p>
														</div>
													</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header icon end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- menu start  -->
                <section class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top-menu">
                                    <!-- vega menu start -->
                                    <div class="vegamenu-content">
                                        <a href="#vega-menu" data-bs-toggle="collapse" class="vegamenu-title">
                                            <span class="menu-icon"><i class="ion-navicon"></i></span>
                                            <span class="menu-cat-title">STYLES</span>
                                            <span class="menu-down-icon"><i class="ion-ios-arrow-down"></i></span>
                                        </a>
                                        <div class="vegamenu-head">
                                            <div class="main-wrap collapse" id="vega-menu">
                                                <ul class="vega-menu">
                                                    <li class="menu-link dropend">
                                                        <a href="javascript:void(0)" class="link-title dropdown-toggle">
                                                            <img src="image/csb/img/sm_loftedbarn_icon.jpg" alt="menu-image" style="width: 53px;">
                                                            <span>Barns</span>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
                                                            <li class="submenu-li">
                                                                <a href="shed-barns.php" class="sublink-title">
                                                                    <img src="image/csb/img/Barns/Barn.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Barn</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-lofted-barns.php" class="sublink-title">
                                                                    <img src="image/csb/img/Barns/Lofted_Barn.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Lofted Barn</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-side-lofted-barns.php" class="sublink-title">
                                                                    <img src="image/csb/img/Barns/Side_Lofted_Barn.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Side Lofted Barn</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-utility.php" class="link-title">
                                                            <img src="image/csb/img/sm_utility_icon.jpg" alt="menu-image" style="width: 53px;">
                                                            <span>Utility</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-cottage.php" class="link-title">
                                                            <img src="image/csb/img/sm_cottageshed_icon.jpg" alt="menu-image" style="width: 55px;">
                                                            <span>Cottage Sheds</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-garden.php" class="link-title">
                                                            <img src="image/csb/img/sm_gardenshed_icon.jpg" alt="menu-image" style="width: 55px;">
                                                            <span>Garden Sheds</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link dropend">
                                                        <a href="javascript:void(0)" class="link-title dropdown-toggle">
                                                            <img src="image/csb/img/sm_cabin_icon.jpg" alt="menu-image" style="width: 52px;">
                                                            <span>Cabins</span>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
                                                            <li class="submenu-li">
                                                                <a href="shed-cabin.php" class="sublink-title">
                                                                    <img src="image/csb/img/Cabins/Cabin.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Cabin</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-lofted-barn-cabin.php" class="sublink-title">
                                                                    <img src="image/csb/img/Cabins/Lofted_Barn_Cabin.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Lofted Cabin</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-deluxe-cabin.php" class="sublink-title">
                                                                    <img src="image/csb/img/Cabins/barn8white.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Deluxe Cabin</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-deluxe-lofted-barn-cabin.php" class="sublink-title">
                                                                    <img src="image/csb/img/Cabins/Lofted_Deluxe_Barn_Cabin.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Lofted Deluxe Cabin</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-pioneer-cabins.php" class="sublink-title">
                                                                    <img src="image/csb/img/Cabins/Pioneer_Cabin.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Pioneer Cabin</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-lofted-pioneer-cabins.php" class="sublink-title">
                                                                    <img src="image/csb/img/Cabins/Lofted_Pioneer_Cabin.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Lofted Pioneer Cabin</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link dropend">
                                                        <a href="javascript:void(0)" class="link-title dropdown-toggle">
                                                            <img src="image/csb/img/sm_garage_icon.jpg" alt="menu-image" style="width: 55px;">
                                                            <span>Garages</span>
                                                        </a>
                                                        <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
                                                            <li class="submenu-li">
                                                                <a href="shed-garages.php" class="sublink-title">
                                                                    <img src="image/csb/img/Garages/Garage.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Garage</span>
                                                                </a>
                                                            </li>
                                                            <li class="submenu-li">
                                                                <a href="shed-lofted-barn-garages.php" class="sublink-title">
                                                                    <img src="image/csb/img/Garages/Lofted_Garage.jpg" alt="menu-image" style="width: 53px;">
                                                                    <span>Lofted Garage</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-tool.php" class="link-title">
                                                            <img src="image/csb/img/sm_toolshed_icon.jpg" alt="menu-image" style="width: 52px;">
                                                            <span>Tool Sheds</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-sun-studios.php" class="link-title">
                                                            <img src="image/csb/img/sm_sunstudio_icon.jpg" alt="menu-image" style="width: 51px;">
                                                            <span>Sun Studios</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-cabanas.php" class="link-title">
                                                            <img src="image/csb/img/sm_cabana_icon.jpg" alt="menu-image" style="width: 55px;">
                                                            <span>Cabanas</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-livestock-shelters.php" class="link-title">
                                                            <img src="image/csb/img/sm_animalshelter_icon.jpg" alt="menu-image" style="width: 55px;">
                                                            <span>Animal Shelters</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="shed-budget.php" class="link-title">
                                                            <img src="image/csb/img/Budget_icon.jpg" alt="menu-image" style="width: 55px;">
                                                            <span>Budget Series</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- vega menu end -->
                                    <!-- megamenu start -->
                                    <div class="header-element megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link parent">
                                                    <a href="about-us.php" class="link-title">
                                                        <span class="sp-link-title">ABOUT US</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Customization</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
                                                        <li class="submenu-li">
                                                            <a href="materials.php" class="submenu-link">Materials</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="options.php" class="submenu-link">Options</a>
                                                        </li>
                                                    </ul>
                                                </li>
												<li class="menu-link">
                                                    <a href="rent-to-own.php" class="link-title">
                                                        <span class="sp-link-title">Rent-To-Own</span>
                                                    </a>
                                                </li>
												<li class="menu-link parent">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">More Details</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <a href="#collapse-top-home" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                        <span class="sp-link-title">Home</span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-home">
                                                        <li class="submenu-li">
                                                            <a href="delivery.php" class="submenu-link">Delivery</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="dimensions.php" class="submenu-link">Dimensions</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="engineer-certified.php" class="submenu-link">Engineer Certified</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="warranty.php" class="submenu-link">Warranty</a>
                                                        </li>
                                                        <li class="submenu-li">
                                                            <a href="dealer.php" class="submenu-link">Became a Dealer</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- megamenu end -->
                                    <!-- hotline start -->
                                    <div class="hotline">
                                        <a href="javascript:void(0)"><img src="image/hot-image.png" class="img-fluid" alt="image-icon"></a>
                                        <div class="image-content">
                                            <span>+1(855) 842-2276</span>
                                        </div>
                                    </div>
                                    <!-- hotline end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- menu end -->
            </div>
            <!-- mobile menu start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main-menu-area">
                                <div class="main-navigation navbar-expand-xl">
                                    <div class="box-header menu-close">
                                        <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                                    </div>
                                    <div class="navbar-collapse" id="navbarContent">
                                        <!-- main-menu start -->
                                        <div class="megamenu-content">
                                            <div class="mainwrap">
                                                <ul class="main-menu">
                                                    <li class="menu-link">
                                                        <a href="about-us.php" class="link-title">
                                                            <span class="sp-link-title">About us</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">Customization</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu1" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">Customization</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu banner-menu collapse" id="collapse-mega-menu1">
                                                            <li class="menu-banner">
                                                                <a href="materials.php" class="menu-banner-title"><span>Material</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="options.php" class="menu-banner-title"><span>Options</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-link">
                                                        <a href="rent-to-own.php" class="link-title">
                                                            <span class="sp-link-title">rent-to-own</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-link parent">
                                                        <a href="javascript:void(0)" class="link-title">
                                                            <span class="sp-link-title">More details</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <a href="#collapse-mega-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                            <span class="sp-link-title">More details</span>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-submenu banner-menu collapse" id="collapse-mega-menu">
                                                            <li class="menu-banner">
                                                                <a href="delivery.php" class="menu-banner-title"><span>Delivery</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="dimensions.php" class="menu-banner-title"><span>Dimensions</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="engineer-certified.php" class="menu-banner-title"><span>Engineer Certified</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="warranty.php" class="menu-banner-title"><span>Warranty</span></a>
                                                            </li>
                                                            <li class="menu-banner">
                                                                <a href="dealer.php" class="menu-banner-title"><span>Became a dealer</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- main-menu end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu end -->
            <!-- minicart start -->
            <div class="mini-cart">
                <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
                <div class="cart-item-title">
                    <p>
                        <span class="cart-count-desc">There are</span>
                        <span class="cart-count-item bigcounter">4</span>
                        <span class="cart-count-desc">Products</span>
                    </p>
                </div>
                <ul class="cart-item-loop">
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.php">
                                <img src="image/cart-img.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.php">Fresh apple 5kg</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$250.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.php">
                                <img src="image/cart-img02.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.php">Natural grassbean 4kg</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$300.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.php">
                                <img src="image/cart-img03.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.php">Organic coconut juice 5ltr</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$250.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="cart-item">
                        <div class="cart-img">
                            <a href="product-style-3.php">
                                <img src="image/cart-img04.jpg" alt="cart-image" class="img-fluid">
                            </a>
                        </div>
                        <div class="cart-title">
                            <h6><a href="product-style-3.php">Orange juice 5ltr</a></h6>
                            <div class="cart-pro-info">
                                <div class="cart-qty-price">
                                    <span class="quantity">1 x </span>
                                    <span class="price-box">$350.00 USD</span>
                                </div>
                                <div class="delete-item-cart">
                                    <a href="empty-cart.php"><i class="icon-trash icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="subtotal-title-area">
                    <li class="subtotal-info">
                        <div class="subtotal-titles">
                            <h6>Sub total:</h6>
                            <span class="subtotal-price">$750.00 USD</span>
                        </div>
                    </li>
                    <li class="mini-cart-btns">
                        <div class="cart-btns">
                            <a href="cart-3.php" class="btn btn-style2">View cart</a>
                            <a href="checkout-3.php" class="btn btn-style2">Checkout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- minicart end -->
            <!-- mobile search start -->
            <div class="modal fade" id="search-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="search-content">
                                            <div class="search-engine">
                                                <input type="text" name="search" placeholder="Search Product.">
                                                <a href="search.php" class="search-btn"><i class="ion-ios-search-strong"></i></a>
                                            </div>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile search end -->
        </header>
        <!-- header end -->

        <!--home page slider start-->
        <section class="home-slider-3 first-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menu-slider3">
                            <div class="menu-content"></div>
                            <div class="menu-slider">
                                <div class="home-slider-3">
                                    <div class="home-slider3 owl-carousel owl-theme">
                                        <div class="items">
                                            <div class="img-back" style="background-image:url(image/csb/bg_slide_1.jpg);">
                                                <div class="slide-c-1 h-s-content">
                                                    <span class="slider-name">Since 2002</span>
                                                    <h1>Built in ALABAMA<br> for <span class="slider-offer">ALABAMA</span></h1>
                                                    <a href="grid-list.php" class="btn btn-style1">More Information</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="img-back" style="background-image:url(image/csb/bg_slide_2.jpg);">
                                                <div class="slide-c-2 h-s-content">
                                                    <span class="slider-name">Cotton State Barns</span>
                                                    <h1>See The<br>Cotton State Barns<br><span class="slider-offer">Difference</span></h1>
                                                    <a href="grid-list.php" class="btn btn-style1">More Information</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items">
                                            <div class="img-back" style="background-image:url(image/csb/bg_slide_3.jpg);">
                                                <div class="slide-c-3 h-s-content">
                                                    <span class="slider-name">Engineer Certified</span>
                                                    <h1>High Quality,<br><span class="slider-offer">Long-Lasting</span><br>Storage Buildings</h1>
                                                    <a href="grid-list.php" class="btn btn-style1">More Information</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home page slider end-->
        <!-- service start -->
        <section class="service-section section0-t-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="service">
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-truck"></i>
                                    <div class="service-content">
                                        <span>Free Delivery and Setup:</span>
                                        <p>Up to 50 miles from the dealership</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-money"></i>
                                    <div class="service-content">
                                        <span>90 Days Same as Cash:</span>
                                        <p>On all RTO financing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-star"></i>
                                    <div class="service-content">
                                        <span>6 Year Warranty:</span>
                                        <p>Front and back coverage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-box">
                                <div class="s-box">
                                    <i class="ti-clipboard"></i>
                                    <div class="service-content">
                                        <span>Limited Lifetime Warranty:</span>
                                        <p>See dealer for more information.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service end -->
        <!-- banner grid start -->
        <section class="section0-t-padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="left-right-column">
                            <div class="left-column">
                                <div class="left-banner">
                                    <div class="l-banner">
                                        <a href="#">
                                            <img src="image/left-banner.jpg" class="img-fluid" alt="left-banner">
                                        </a>
                                        <div class="left-banner-content">
                                            <span>View Information on</span>
                                            <h2>Dimensions</h2>
                                            <a href="dimensions.php" class="btn btn-style3">VIEW</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- left banner-2 start -->
                                <div class="left-banner section1-t-padding">
                                    <div class="l-banner">
                                        <a href="rent-to-own.php">
                                            <img src="image/left-banner2.jpg" class="img-fluid" alt="left-banner">
                                        </a>
                                        <div class="left-banner-content">
                                            <span>Rent-To-Own</span>
                                            <h2>36, 48, &amp; 60 month contract options</h2>
                                            <a href="rent-to-own.php" class="btn btn-style3">VIEW</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- left banner-2 end -->
                                <!-- left banner-2 start -->
                                <div class="left-banner section1-t-padding">
                                    <div class="l-banner">
                                        <a href="delivery.php">
                                            <img src="image/left-banner3.jpg" class="img-fluid" alt="left-banner">
                                        </a>
                                        <div class="left-banner-content">
                                            <span>No ground prep is necessary</span>
                                            <h2>If site is no more than 3’ out of level in any direction.</h2>
                                            <a href="delivery.php" class="btn btn-style3">Delivery</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- left banner-2 end -->
								<!-- left banner-2 start -->
                                <div class="left-banner section1-t-padding">
                                    <div class="l-banner">
                                        <a href="warranty.php">
                                            <img src="image/left-banner4.jpg" class="img-fluid" alt="left-banner">
                                        </a>
                                        <div class="left-banner-content">
                                            <span>Warranty Coverage</span>
                                            <h2>Includes material defects and the craftsmanship of our products on every new barn we sell.</h2>
                                            <a href="warranty.php" class="btn btn-style3">Warranty</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- left banner-2 end -->
								
                                <!-- trending products left start
                                <div class="tred-product section1-tb-padding">
                                    <div class="left-section-title">
                                        <h4><span>Flooring </span> Options</h4>
                                    </div>
                                    <a href="#tred-products" data-bs-toggle="collapse" class="responsive-collapse">Trending <span>products</span> <i class="fa fa-angle-down"></i></a>
                                    <div class="trening-left-pro swiper-container collapse" id="tred-products">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.php">
                                                                <img src="image/csb/smooth.jpg" alt="pro-img1" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.php">5/8” Smooth Tongue<br>and Groove</a></h3>
                                                    </div>
                                                </div>
                                            
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.php">
                                                                <img src="image/csb/treated.jpg" alt="pro-img1" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.php">5/8” Treated Plywood</a></h3>
                                                    </div>
                                                </div>
                                            
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.php">
                                                                <img src="image/csb/smooth.jpg" alt="pro-img1" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.php">3/4” Smooth Tongue<br>and Groove</a></h3>
                                                    </div>
                                                </div>
                                            
                                                <div class="tab-product">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="product-style-3.php">
                                                                <img src="image/csb/treated.jpg" alt="pro-img1" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-caption">
                                                        <h3><a href="product-style-3.php">3/4” Treated Plywood</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                trending products end -->
                                <!-- big sale start
                                <div class="left-deal-bg" style="background-image: url(image/dealbanner1.1.jpg);">
                                    <div class="left-deal-c">
                                        <h2><span>HIGH STANDARDS</span></h2>
                                        <p>From Manufacturing to Delivery</p>
                                    </div>
                                </div>
                                big sale end -->
                                <!-- home brand start 
                                <div class="section1-tb-padding">
                                    <div class="left-section-title">
                                        <h4>Our <span> Difference</span></h4>
                                    </div>
                                    <div class="home3-brand owl-carousel owl-theme">
                                        <div class="items">
                                            <img src="image/csb/badgeicon_1.jpg" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="image/csb/badgeicon_2.jpg" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="image/csb/badgeicon_3.jpg" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="image/csb/badgeicon_4.jpg" class="img-fluid" alt="brand-image">
                                        </div>
                                        <div class="items">
                                            <img src="image/csb/badgeicon_5.jpg" class="img-fluid" alt="brand-image">
                                        </div>
                                    </div>
                                </div>
                                home brand end -->
                            </div>
                            <div class="right-column">
                                <!-- grid banner start -->
                                <div class="organic-food-fresh-banner">
                                    <div class="offer-banner">
                                        <a href="about-us.php" class="banner-hover">
                                            <img src="image/home3-banner.jpg" alt="offer-banner" class="img-fluid">
                                        </a>
                                        <div class="banner-content">
											<span style="color: #999;">Craftsmanship</span>
                                            <h2><span class="banner-discount">The Difference is our Quality</span></h2>
											<p>Dedicated to the old-fashioned precepts<br>of honesty, integrity, work ethic and quality.</p>
                                            <a href="#">About us</a>
                                        </div>
                                    </div>
                                    <div class="offer-banner">
                                        <a href="materials.php" class="banner-hover">
                                            <img src="image/home3-banner2.jpg" alt="offer-banner" class="img-fluid">
                                        </a>
                                        <div class="banner-content">
											<span style="color: #999;">Materials</span>
                                            <h2><span class="banner-discount">Choose what you need</span></h2>
											<p>Material choices for roof and siding types</p>
                                            <a href="#">More Information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- grid banner end -->
                                <!-- teb product start -->
                                <div class="pro-tab section1-t-padding">
                                    <div class="section-title3">
                                        <h2><span>Our Barns</span></h2>
                                    </div>
                                    <ul class="nav nav-tabs">
										<li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#cabins">Cabins</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#barns">Barns</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#utility">Utility</a>
                                        </li>
                                        
										<li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#garages">Garages</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#other">OTHER</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-pro-slider">
										<div class="tab-pane fade show  active" id="cabins">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-cabin.php">
                                                                        <img src="image/csb/cabin_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-cabin.php">CABIN</a></h3>
                                                                    <span class="new-price"><a href="shed-cabin.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-lofted-barn-cabin.php">
                                                                        <img src="image/csb/loftedcabin_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-lofted-barn-cabin.php">LOFTED CABIN</a></h3>
                                                                    <span class="new-price"><a href="shed-lofted-barn-cabin.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-deluxe-cabin.php">
                                                                        <img src="image/csb/pioneercabin_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-deluxe-cabin.php">DELUXE CABIN</a></h3>
                                                                    <span class="new-price"><a href="shed-deluxe-cabin.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-pioneer-cabins.php">
                                                                        <img src="image/csb/loftedpioneercabin_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-pioneer-cabins.php">DELUXE LOFTED CABIN</a></h3>
                                                                    <span class="new-price"><a href="shed-pioneer-cabins.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-pioneer-cabins.php">
                                                                        <img src="image/csb/Grass Pioneer Cabin.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-pioneer-cabins.php">PIONEER CABIN</a></h3>
                                                                    <span class="new-price"><a href="shed-pioneer-cabins.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-lofted-pioneer-cabins.php">
                                                                        <img src="image/csb/deluxeloftedcabin_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-lofted-pioneer-cabins.php">LOFTED PIONEER CABIN</a></h3>
                                                                    <span class="new-price"><a href="shed-lofted-pioneer-cabins.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade show" id="barns">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-barns.php">
                                                                        <img src="image/pro/pro-img-4.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-barns.php">BARNS</a></h3>
                                                                    <span class="new-price"><a href="shed-barns.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-lofted-barns.php">
                                                                        <img src="image/csb/loftedbarn_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-lofted-barns.php">LOFTED BARNS</a></h3>
                                                                    <span class="new-price"><a href="shed-lofted-barns.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-side-lofted-barns.php">
                                                                        <img src="image/csb/sideloftedbarn_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-side-lofted-barns.php">SIDE LOFTED BARNS</a></h3>
                                                                    <span class="new-price"><a href="shed-side-lofted-barns.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="utility">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-utility.php">
                                                                        <img src="image/csb/utility_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
                                                                    <h3><a href="shed-utility.php">UTILITY</a></h3>
                                                                    <span class="new-price"><a href="shed-utility.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-garden.php">
                                                                        <img src="image/csb/gardenshed_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-garden.php">GARDEN SHED</a></h3>
                                                                    <span class="new-price"><a href="shed-garden.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-cottage.php">
                                                                        <img src="image/csb/cottageshed_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-cottage.php">COTTAGE SHED</a></h3>
                                                                    <span class="new-price"><a href="shed-cottage.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-tool.php">
                                                                        <img src="image/csb/toolshed_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-tool.php">TOOL SHED</a></h3>
                                                                    <span class="new-price"><a href="shed-tool.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-sun-studios">
                                                                        <img src="image/csb/sunshed_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-sun-studios">SUN STUDIO</a></h3>
                                                                    <span class="new-price"><a href="shed-sun-studios">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
		
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
										<div class="tab-pane fade show" id="garages">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-garages.php">
                                                                        <img src="image/csb/garage_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-garages.php">GARAGE</a></h3>
                                                                    <span class="new-price"><a href="shed-garages.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-lofted-barn-garages.php">
                                                                        <img src="image/csb/loftedgarage_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-lofted-barn-garages.php">LOFTED GARAGE</a></h3>
                                                                    <span class="new-price"><a href="shed-lofted-barn-garages.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>

										<div class="tab-pane fade show" id="other">
                                            <div class="our-pro-tab swiper-container">
                                                <div class="swiper-wrapper">
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-cabanas.php">
                                                                        <img src="image/csb/cabana_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-cabanas.php">CABANA</a></h3>
                                                                    <span class="new-price"><a href="shed-cabanas.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-livestock-shelters.php">
                                                                        <img src="image/csb/livestock_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-livestock-shelters.php">LIVESTOCK SHELTER</a></h3>
                                                                    <span class="new-price"><a href="shed-livestock-shelters.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swiper-slide">
                                                        <div class="tab-product">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="shed-budget.php">
                                                                        <img src="image/csb/budget_1.jpg" alt="pro-img1" class="img-fluid">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-caption">
                                                                <div class="pro-price">
																<h3><a href="shed-budget.php">BUDGET SERIES</a></h3>
                                                                    <span class="new-price"><a href="shed-budget.php">View More &rsaquo;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-buttons">
                                                <div class="content-buttons">
                                                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                                                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                                                </div>
                                            </div>
                                        </div>
									</div>
                                </div>
                                <!-- teb product end -->
                                <!-- full banner start -->
                                <div class="full-banner section1-t-padding">
                                    <div class="banner-main">
                                        <a href="options.php" class="banner-hover">
                                            <img src="image/full-banner.jpg" class="img-fluid" alt="banner-image">
                                        </a>
                                        <div class="full-banner-conten">
                                            <span>A wide selection of interior and exterior options</span>
                                            <h3>Customize Your Shed</h3>
                                            <a href="options.php" class="btn btn-style3">VIEW OPTIONS</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- full banner end -->
                                <!-- full banner start -->
                                <div class="full-banner section1-t-padding">
                                    <div class="banner-main">
                                        <a href="product-style-3.php" class="banner-hover brochure">
                                            <img src="image/full-banner3.jpg" class="img-fluid" alt="banner-image">
                                        </a>
                                        <div class="full-banner-conten brochure-banner-content">
                                            <h3>Cotton State Barns</h3>
                                            <span>Enter your full name and email address to view or download our dealer brochure.</span>
                                            <form class="brochure-content">
                                                <input type="text" name="text" placeholder="Your Full Name">
                                                <input type="text" name="email" placeholder="Your Email Address">
                                            </form>
                                            <a href="#" class="btn btn-style3">DOWNLOAD BROCHURE</a>
                                            <a href="#" class="btn btn-style3 btn-extra-style">VIEW BROCHURE</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- full banner end -->
									
									
									
		
									
									
		<section class="section0-tb-padding">
            <div class="container">
                <div class="row">		
                    <!-- featured products start -->
                    <div class="featured-p section1-t-padding">
                        <div class="section-title3">
                            <h2><span style="color: #295129;">CUSTOMER REVIEWS</span></h2>
                        </div>
                        <div class="featured-products-slider owl-carousel owl-theme">
                            <div class="items">
                                <div class="caption">
                                    <h3>We got a 10X16 shed with split loft and two windows and double opening doors that was FAR superior quality and lower price than even the basic, barebones 10x16 shed at any of the other 7-8 local companies I went to view. It was even better that it had a metal roof and 5 year warranty.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                                <div class="items">
                                <div class="caption">
                                    <h3>They were 15-20% lower than the prices of the other shed companies’ basic models.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>From the beginning of the process to the end, the dealer was absolutely terrific to work with. We originally set up a rental agreement but even before delivery, we decided to buy it outright, and without any hassle or hidden charge/fees, the dealer told us how to take care of it and walked us through the process in a few minutes. This is the way business should be conducted. They are people and service centered.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>Free Delivery was just that.. and even though we had the shed placed 1/4 mile from the road. . . still free. And the shed was placed exactly (to the inch) where we wanted it. We couldn’t be happier with the process and love our new shed!</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>										
                            <div class="items">
                                <div class="caption">
                                    <h3>Got my lofted barn today. Highly recommend it. The guy that delivered it was very nice. Even gave me a recommendation on where to put it that made more sense. The seller was also very nice. explained the warranty to me.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>										
                            <div class="items">
                                <div class="caption">
                                    <h3>Dealer spent a lot of time with me customizing my building just the way I wanted it. They can do custom doors, move windows etc.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>Great customer service and very prompt response.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>Great people to deal with, with great prices, well built!</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>I purchased a cottage type shed. The process was easy ..they also delivered within a couple of days!!</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>I can’t say enough how much I love this shed. It's beautiful and well built and so glad I chose this one.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>Thank you so much you made my dreams come true with this beautiful cottage shed!! All my neighbors are asking where I got it. I’m sending them your way. Thank you so much.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="caption">
                                    <h3>They go the extra mile to get you what you want.</h3>
                                    <div class="pro-price">
                                        <span class="new-price">- Google Reviewer</span>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- featured products end -->	
                </div>
            </div>
          
        </section>
        <!-- end -->	
                                		
                                <!-- featured products start 
                                <div class="featured-p section1-t-padding">
									<div class="section-title3">
                                        <h2><span style="color: #295129;">HIGH STANDARDS</span><br>
                                       From Manufacturing to Delivery</h2>
                                    </div>
                                    
                                    <div class="featured-products-slider owl-carousel owl-theme">
                                        <div class="items">
                                             <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.php">
                                                        <img class="img-fluid" src="image/csb/sq_badgeicon_1.jpg" alt="pro-img1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                          <div class="items">
                                             <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.php">
                                                        <img class="img-fluid" src="image/csb/sq_badgeicon_2.jpg" alt="pro-img1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
										<div class="items">
                                             <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.php">
                                                        <img class="img-fluid" src="image/csb/sq_badgeicon_3.jpg" alt="pro-img1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
										<div class="items">
                                             <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.php">
                                                        <img class="img-fluid" src="image/csb/sq_badgeicon_4.jpg" alt="pro-img1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
										<div class="items">
                                             <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="product-style-3.php">
                                                        <img class="img-fluid" src="image/csb/sq_badgeicon_5.jpg" alt="pro-img1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
										
								

                                    </div>
                                </div>
                                 featured products end -->
							
					
									
					</div>
				</div>			
		</section>							

        <?php include 'footer.php'; ?>
        
        <!-- jquery -->
        <script src="js/modernizr-2.8.3.min.js"></script>
        <!-- jquery -->
        <script src="js/jquery-3.6.0.min.js"></script>
        <!-- bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- popper -->
        <script src="js/popper.min.js"></script>
        <!-- owl carousal -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/fontawesome.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <!-- custom -->
        <script src="js/custom.js"></script>

		<!-- Dealer Locator -->
		<script src="js/dealer-locater.js"></script>
    </body>
</html>