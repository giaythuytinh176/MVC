<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Checkout | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo-dark.png"><img src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo-dark@2x.png"><img src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Shopping Cart</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Blue Round-Neck Tshirt with a Button</a>
													<span class="top-cart-item-price d-block">$19.99</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Light Blue Denim Dress</a>
													<span class="top-cart-item-price d-block">$24.99</span>
												</div>
												<div class="top-cart-item-quantity">x 3</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$114.95</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
							</div><!-- #top-cart end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>Home</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="intro.html#section-niche"><div>Niche Demos</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="intro.html#section-onepage"><div>One-Page Demos</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-corporate.html"><div>Home - Corporate</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-corporate.html"><div>Corporate - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-2.html"><div>Corporate - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-3.html"><div>Corporate - Layout 3</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-corporate-4.html"><div>Corporate - Layout 4</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-portfolio.html"><div>Home - Portfolio</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio.html"><div>Portfolio - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-blog.html"><div>Home - Blog</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-blog.html"><div>Blog - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-2.html"><div>Blog - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-3.html"><div>Blog - Layout 3</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-shop.html"><div>Home - Shop</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-shop.html"><div>Shop - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-shop-2.html"><div>Shop - Layout 2</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-magazine.html"><div>Home - Magazine</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-magazine.html"><div>Magazine - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-magazine-2.html"><div>Magazine - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-magazine-3.html"><div>Magazine - Layout 3</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="landing.html"><div>Home - Landing Page</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="landing.html"><div>Landing Page - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-2.html"><div>Landing Page - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-3.html"><div>Landing Page - Layout 3</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-4.html"><div>Landing Page - Layout 4</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="landing-5.html"><div>Landing Page - Layout 5</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-image.html"><div>Full Screen - Image</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-fullscreen-video.html"><div>Full Screen - Video</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="index-onepage.html"><div>Home - One Page</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-onepage.html"><div>One Page - Default</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-onepage-2.html"><div>One Page - Submenu</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-onepage-3.html"><div>One Page - Dots Style</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div>Extras</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="index-wedding.html"><div>Wedding</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-restaurant.html"><div>Restaurant</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-events.html"><div>Events</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="index-parallax.html"><div>Parallax</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-app-showcase.html"><div>App Showcase</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="index-boxed.html"><div>Boxed Layout</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#"><div>Features</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="icon-stack"></i>Sliders</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="slider-revolution.html"><div>Revolution Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="rs-demos.html"><div>Premium Templates</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution.html"><div>Full Screen</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-fullwidth.html"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-canvas.html"><div>Canvas Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas.html"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-fade.html"><div>Fade Transition</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-video-event.html"><div>Custom Video Event</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-3.html"><div>3 Columns</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-4.html"><div>4 Columns</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-canvas-5.html"><div>5 Columns</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-flex.html"><div>Flex Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-flex.html"><div>Default Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-flex-thumbs.html"><div>with Thumbs</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="slider-owl.html"><div>Owl Slider</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-full.html"><div>Full Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl.html"><div>Boxed Width</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="slider-owl-videos.html"><div>Video Slider</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-parallax.html"><div>Static Media</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="static-parallax.html"><div>Static - Parallax</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-image.html"><div>Static - Image</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-html5-video.html"><div>Static - HTML5 Video</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="static-embed-video.html"><div>Static - Embedded Video</div></a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="#"><div><i class="icon-umbrella"></i>Headers</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="header-light.html"><div>Light Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-dark.html"><div>Dark Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-transparent.html"><div>Transparent</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-semi-transparent.html"><div>Semi Transparent</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent.html"><div>Light Version</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent-dark.html"><div>Dark Version</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-left.html"><div>Left Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-left.html"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open.html"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open-push.html"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-right.html"><div>Right Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-right.html"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open.html"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open-push.html"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-floating.html"><div>Floating Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-sticky.html"><div>Static Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="responsive-sticky.html"><div>Responsive Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="logo-changer.html"><div>Alternate Logos</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="header-light.html"><div>Default Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-2.html"><div>Alternate Layout</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-3.html"><div>Pill Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-4.html"><div>Border Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-5.html"><div>Large Icon Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="split-menu.html"><div>Split Layout</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="menu-6.html"><div>Scaling Border</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-subtitle.html"><div>Sub-Title Menu</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-7.html"><div>Extended Menu 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-8.html"><div>Extended Menu 2</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-9.html"><div>Extended Menu 3</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="menu-10.html"><div>Overlay Menu</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="mega-menu.html"><div><i class="icon-line-columns"></i>Mega Menu</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="mega-menu.html"><div>Widgetized</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-full.html"><div>Full-Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-tab.html"><div>Tabbed</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="mega-menu-side-tab.html"><div>Side-Tabs (onClick)</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="forms.html"><div><i class="icon-wpforms"></i>Forms</div></a>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Links</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Flickr Photostream</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Dribbble Shots</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Subscribers</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Posts List</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Twitter Feed</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Tabbed Widgets</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Carousel</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Social Icons</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Testimonials</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Quick Contact</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Tags Cloud</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Video Embeds</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="widgets.html"><div>Raw HTML</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col-5">
														<li class="menu-item">
															<a class="menu-link" href="page.html"><div>Left Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-right.html"><div>Right Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-center.html"><div>Center Align</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-dark.html"><div>Dark Style</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-pattern.html"><div>BG Pattern</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col-7">
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax.html"><div>Parallax - Default</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-parallax-header.html"><div>Parallax - Transparent</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-video.html"><div>HTML5 Video</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-nobg.html"><div>No Background</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="page-title-mini.html"><div>Mini Version</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-overlay.html"><div>Left Overlay</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-left-push.html"><div>Left Push</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-right-overlay.html"><div>Right Overlay</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel.html"><div>Right Push</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="side-panel-light.html"><div>Light Background</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="modal-onload.html"><div>Default Layout</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-iframe.html"><div>Video iFrame</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-subscribe.html"><div>Subscription Form</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-common-height.html"><div>Common Height</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="modal-onload-cookie.html"><div>Cookies Enabled</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item mega-menu mega-menu-small">
											<a class="menu-link" href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>
											<div class="mega-menu-content">
												<div class="row mx-0">
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="sticky-footer.html"><div>Sticky</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="#footer" data-scrollto="#footer"><div>Layout 1</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-2.html#footer"><div>Layout 2</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-3.html#footer"><div>Layout 3</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-4.html#footer"><div>Layout 4</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-5.html#footer"><div>Layout 5</div></a>
														</li>
													</ul>
													<ul class="sub-menu-container mega-menu-column col">
														<li class="menu-item">
															<a class="menu-link" href="footer-6.html#footer"><div>Layout 6</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="footer-7.html#footer"><div>Layout 7</div></a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Pages</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Introductory</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="about.html"><div>About Us</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="about.html"><div>Main Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="about-2.html"><div>Alternate Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="about-me.html"><div>About Me</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="team.html"><div>Team Members</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="gdpr.html"><div>GDPR Compliance</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="gdpr.html"><div>Default</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="gdpr-small.html"><div>Small</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="jobs.html"><div>Careers</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="profile.html"><div>User Profile</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Utility &amp; Specials</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="services.html"><div><i class="icon-star-of-life"></i>Services Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="services.html"><div>Layout 1</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="services-2.html"><div>Layout 2</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="services-3.html"><div>Layout 3</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#"><div><i class="icon-calendar3"></i>Events</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="events-list.html"><div>Events List</div></a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="events-list.html"><div>Right Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-left-sidebar.html"><div>Left Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-both-sidebar.html"><div>Both Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-fullwidth.html"><div>Full Width</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="events-list-parallax.html"><div>Parallax List</div></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="event-single.html"><div>Single Event</div></a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-right-sidebar.html"><div>Right Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-left-sidebar.html"><div>Left Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-both-sidebar.html"><div>Both Sidebar</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single.html"><div>Full Width</div></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="event-single-full-width-image.html"><div>Single Event - Full</div></a>
																		<ul class="sub-menu-container mega-menu-dropdown">
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-image.html"><div>Parallax Image</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-map.html"><div>Google Map</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-slider.html"><div>Slider Gallery</div></a>
																			</li>
																			<li class="menu-item">
																				<a class="menu-link" href="event-single-full-width-video.html"><div>HTML5 Video</div></a>
																			</li>
																		</ul>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="events-calendar.html"><div>Full Width Calendar</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="contact.html"><div><i class="icon-envelope"></i>Contact Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="contact.html">Main Layout</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-2.html">Grid Layout</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-3.html">Right Sidebar</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-4.html">Both Sidebars</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-5.html">Modal Form</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-6.html">Form Overlay</a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="contact-7.html">Form Overlay Mini</a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="faqs.html"><div><i class="icon-question-circle"></i>FAQs Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="faqs.html"><div>Layout 1</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-2.html"><div>Layout 2</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-3.html"><div>Layout 3</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="faqs-4.html"><div>Layout 4</div></a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Layouts &amp; PageNavs</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="full-width.html"><div>Full Width</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="full-width.html"><div>Default Width</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="full-width-wide.html"><div>Wide Width</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#"><div>Sidebars</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="right-sidebar.html"><div>Right Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="left-sidebar.html"><div>Left Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-sidebar.html"><div>Both Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-right-sidebar.html"><div>Both Right Sidebar</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="both-left-sidebar.html"><div>Both Left Sidebar</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="page-submenu.html"><div>Page Submenu</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="side-navigation.html"><div>Side Navigation</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Miscellaneous</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="login-register.html"><div>Login/Register</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="login-register.html"><div>Default Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-register-2.html"><div>Tabbed Login</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-register-3.html"><div>Login Accordion</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-1.html"><div>Dark BG Login</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="login-2.html"><div>Image BG Login</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="coming-soon.html"><div>Coming Soon</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon.html"><div>Default Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon-2.html"><div>Parallax Image</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="coming-soon-3.html"><div>HTML5 Video</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="404.html"><div>404 Pages</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="404.html"><div>Default Layout</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="404-2.html"><div>Parallax Image</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="404-3.html"><div>HTML5 Video</div></a>
																	</li>
																</ul>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="#"><div>Extras</div></a>
																<ul class="sub-menu-container mega-menu-dropdown">
																	<li class="menu-item">
																		<a class="menu-link" href="blank-page.html"><div>Blank Page</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="maintenance.html"><div>Maintenance Page</div></a>
																	</li>
																	<li class="menu-item">
																		<a class="menu-link" href="sitemap.html"><div>Sitemap</div></a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Portfolio</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Grids</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-1.html"><div>1 Column</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2.html"><div>2 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-5.html"><div>5 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-6.html"><div>6 Columns</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Masonry</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2-masonry.html"><div>2 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3-masonry.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-masonry.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-5-masonry.html"><div>5 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-6-masonry.html"><div>6 Columns</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Loading Styles</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio.html"><div>jQuery Filter</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-jpagination.html"><div>jQuery Pagination</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-ajax.html"><div>AJAX In Page</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-filter-styles.html"><div>Filter Styles</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Single Project</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-extended.html"><div>Extended Item</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Layouts</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="portfolio-nomargin.html"><div>Default</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="portfolio-parallax.html"><div>Parallax</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Blog</div></a>
									<div class="mega-menu-content mega-menu-style-2">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Default</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-both-sidebar.html"><div>Both Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-full-width.html"><div>Full Width</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Timeline</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-timeline.html"><div>Full Width</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Masonry</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-3.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-2.html"><div>2 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry-full.html"><div>100% Width</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Grid</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-grid.html"><div>4 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-grid-3.html"><div>3 Columns</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-grid-2.html"><div>2 Columns</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Small Thumbs</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small.html"><div>Right Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-full-width.html"><div>Full Width</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-small-alt.html"><div>Alternate Layout</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Item Splitting</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-grid.html"><div>Pagination</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-masonry.html"><div>Infinite Scroll</div></a>
															</li>
														</ul>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col-lg-3">
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Single</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-single.html"><div>Default Layout</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-full.html"><div>Full Width</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-small.html"><div>Small Image</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a>
															</li>
														</ul>
													</li>
													<li class="menu-item mega-menu-title">
														<a class="menu-link" href="#"><div>Comments Module</div></a>
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="blog-single-small.html#comments"><div>Disqus Comments</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="shop.html"><div>Shop</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="shop.html"><div>4 Columns</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-3.html"><div>3 Columns</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-3.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-2.html"><div>2 Columns</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-1.html"><div>1 Columns</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-1.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-category-parallax.html"><div>Categories - Parallax</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-combination-filter.html"><div>Combination Filter</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="shop-single.html"><div>Single Product</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="shop-single.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-color.html"><div>Color Options</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-sticky.html"><div>Sticky Aside</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="shop-single-list.html"><div>Feature List</div></a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="cart.html"><div>Cart</div></a>
										</li>
										<li class="menu-item">
											<a class="menu-link" href="checkout.html"><div>Checkout</div></a>
										</li>
									</ul>
								</li>
								<li class="menu-item mega-menu">
									<a class="menu-link" href="#"><div>Shortcodes</div></a>
									<div class="mega-menu-content">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="animations.html"><div><i class="icon-magic"></i>Animations</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="clients.html"><div><i class="icon-apple"></i>Clients</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="counters.html"><div><i class="icon-time"></i>Counters</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="read-more.html"><div><i class="icon-ellipsis-h"></i>Read More</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="gradients.html"><div><i class="icon-tint"></i>Gradients</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="item-overlays.html"><div><i class="icon-line-marquee-plus"></i>Item Overlays</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="form-elements.html"><div><i class="icon-edit"></i>Form Elements</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="lists-cards.html"><div><i class="icon-th-list"></i>Lists &amp; Cards</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="shape-dividers.html"><div><i class="icon-shapes"></i>Shape Dividers</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="hover-animations.html"><div><i class="icon-hand-pointer"></i>Hover Animations</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a>
													</li>
												</ul>
												<ul class="sub-menu-container mega-menu-column col">
													<li class="menu-item">
														<a class="menu-link" href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="tables.html"><div><i class="icon-table"></i>Tables</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="lazy-loading.html"><div><i class="icon-line-loader"></i>Lazy Loading</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a>
													</li>
													<li class="menu-item">
														<a class="menu-link" href="flip-cards.html"><div><i class="icon-refresh"></i>Flip Cards</div></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Checkout</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Shop</a></li>
					<li class="breadcrumb-item active" aria-current="page">Checkout</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row col-mb-30 gutter-50 mb-4">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									Returning customer? <a href="<?php echo \MVC\controllers\UrlControllers::url("shop/login/checkout") ?>">Click here to login</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									Have a coupon? <a href="login-register.html">Click here to enter your code</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row col-mb-50 gutter-50">
						<div class="col-lg-6">
							<h3>Billing Address</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

							<form id="billing-form" name="billing-form" class="row mb-0" action="#" method="post">

								<div class="col-md-6 form-group">
									<label for="billing-form-name">Name:</label>
									<input type="text" id="billing-form-name" name="billing-form-name" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="billing-form-lname">Last Name:</label>
									<input type="text" id="billing-form-lname" name="billing-form-lname" value="" class="sm-form-control" />
								</div>

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<label for="billing-form-companyname">Company Name:</label>
									<input type="text" id="billing-form-companyname" name="billing-form-companyname" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="billing-form-address">Address:</label>
									<input type="text" id="billing-form-address" name="billing-form-address" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<input type="text" id="billing-form-address2" name="billing-form-adress" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="billing-form-city">City / Town</label>
									<input type="text" id="billing-form-city" name="billing-form-city" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="billing-form-email">Email Address:</label>
									<input type="email" id="billing-form-email" name="billing-form-email" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="billing-form-phone">Phone:</label>
									<input type="text" id="billing-form-phone" name="billing-form-phone" value="" class="sm-form-control" />
								</div>

							</form>
						</div>

						<div class="col-lg-6">
							<h3>Shipping Address</h3>

							<form id="shipping-form" name="shipping-form" class="row mb-0" action="#" method="post">

								<div class="col-md-6 form-group">
									<label for="shipping-form-name">Name:</label>
									<input type="text" id="shipping-form-name" name="shipping-form-name" value="" class="sm-form-control" />
								</div>

								<div class="col-md-6 form-group">
									<label for="shipping-form-lname">Last Name:</label>
									<input type="text" id="shipping-form-lname" name="shipping-form-lname" value="" class="sm-form-control" />
								</div>

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<label for="shipping-form-companyname">Company Name:</label>
									<input type="text" id="shipping-form-companyname" name="shipping-form-companyname" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="shipping-form-address">Address:</label>
									<input type="text" id="shipping-form-address" name="shipping-form-address" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<input type="text" id="shipping-form-address2" name="shipping-form-adress" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="shipping-form-city">City / Town</label>
									<input type="text" id="shipping-form-city" name="shipping-form-city" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="shipping-form-message">Notes <small>*</small></label>
									<textarea class="sm-form-control" id="shipping-form-message" name="shipping-form-message" rows="6" cols="30"></textarea>
								</div>

							</form>
						</div>

						<div class="w-100"></div>

						<div class="col-lg-6">
							<h4>Your Orders</h4>

							<div class="table-responsive">
								<table class="table cart">
									<thead>
										<tr>
											<th class="cart-product-thumbnail">&nbsp;</th>
											<th class="cart-product-name">Product</th>
											<th class="cart-product-quantity">Quantity</th>
											<th class="cart-product-subtotal">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">Pink Printed Dress</a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													1x2
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">$39.98</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/thumbs/small/shoes-2.jpg" alt="Checked Canvas Shoes"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">Checked Canvas Shoes</a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													1x1
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">$24.99</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-thumbnail">
												<a href="#"><img width="64" height="64" src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/images/shop/thumbs/small/tshirt-2.jpg" alt="Pink Printed Dress"></a>
											</td>

											<td class="cart-product-name">
												<a href="#">Blue Men Tshirt</a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													1x3
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount">$41.97</span>
											</td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>

						<div class="col-lg-6">
							<h4>Cart Totals</h4>

							<div class="table-responsive">
								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="border-top-0 cart-product-name">
												<strong>Cart Subtotal</strong>
											</td>

											<td class="border-top-0 cart-product-name">
												<span class="amount">$106.94</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Shipping</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">Free Delivery</span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Total</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount color lead"><strong>$106.94</strong></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="accordion clearfix">
								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
										Direct Bank Transfer
									</div>
								</div>
								<div class="accordion-content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
										Cheque Payment
									</div>
								</div>
								<div class="accordion-content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-line-minus"></i>
										<i class="accordion-open icon-line-check"></i>
									</div>
									<div class="accordion-title">
										Paypal
									</div>
								</div>
								<div class="accordion-content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>
							</div>
							<a href="#" class="button button-3d float-right">Place Order</a>
						</div>
					</div>
				</div>
			</div>
        </section><!-- #content end -->

        <?php require_once "./src/views/pages/index/footer.php"; ?>

    </div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/js/jquery.js"></script>
	<script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?php echo \MVC\controllers\UrlControllers::url("") ?>/src/views/pages/index/js/functions.js"></script>

</body>
</html>