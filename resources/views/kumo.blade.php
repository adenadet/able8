<!DOCTYPE html>
<html lang="zxx">
<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">		
        <title>La Able Fashion Collection</title>
		 
        <!-- Custom CSS -->
        <link href="{{('kumo/css/styles.css" rel="stylesheet">
    </head>
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
			@include('partials.kumo.top')
			@include('partials.kumo.header')
			@include('partials.kumo.nav')
			<div class="clearfix"></div>
            <router-view></router-view>
            <vue-progressbar/>
			<div class="home-slider margin-bottom-0">

				<!-- Slide -->
				<div data-background-image="assets/img/banner-29.png" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									<div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="theme-cl fs-sm ft-ragular mb-0">Watch Collection</h5>
											<h1 class="mb-1 ft-bold lg-heading">New Sale<br>Watch Collections</h1>
											<span class="trending">There's nothing like trend</span>
										</div>

										<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div>
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Slide -->
				<div data-background-image="assets/img/banner-30.png" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									<div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="theme-cl fs-sm ft-ragular mb-0">50% Off Sale</h5>
											<h1 class="mb-1 ft-bold lg-heading">Modern Style<br>Watch Collections</h1>
											<span class="trending">There's nothing like trend</span>
										</div>

										<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div>
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div data-background-image="assets/img/banner-24.png" class="item">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-slider-container">

									<!-- Slide Title -->
									<div class="home-slider-desc">
										<div class="home-slider-title mb-4">
											<h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
											<h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
											<span class="trending">There's nothing like trend</span>
										</div>

										<a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
									</div>
									<!-- Slide Title / End -->

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ======================= Product List ======================== -->
			<section class="middle">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Trendy Products</h2>
								<h3 class="ft-bold pt-3">Our Trending Products</h3>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center rows-products">			
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/14.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Mobiles</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore iPhone 12</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/15.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Headphones</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore Headphone</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/17.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Mobiles</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Ziome iPhone 11</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
								<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/18.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Mobiles</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Pillos Android Phone</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/19.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Camera</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Phot Video Camera</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/20.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Headphone</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">New Croft Headphone</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/21.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">TV/LCD</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">32 Inch Sony TV</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single -->
						<div class="col-xl-3 col-lg-4 col-md-6 col-6">
							<div class="product_grid card b-0">
								<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
								<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
								<div class="card-body p-0">
									<div class="shop_thumb position-relative">
										<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/22.png" alt="..."></a>
										<div class="product-left-hover-overlay">
											<ul class="left-over-buttons">
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
												<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
									<div class="text-left">
										<div class="text-left">
											<div class="elso_titl"><span class="small">Headphone</span></div>
											<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Xiomi 13 Headphone</a></h5>
											<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="position-relative text-center">
								<a href="shop-style-1.html" class="btn stretched-link borders">Explore More<i class="lni lni-arrow-right ml-2"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= Product List ======================== -->
			
			<!-- ======================= Tag Wrap Start ============================ -->
			<section class="bg-cover" style="background:url(assets/img/bg-3.jpg) no-repeat;">
				<div class="ht-60"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="tags_explore text-center">
								<h2 class="mb-0 text-white ft-bold">Big Sale Up To 70% Off</h2>
								<p class="text-light fs-lg mb-4">Exclussive Offers For Limited Time</p><p>
								<a href="#" class="btn btn-lg bg-white px-5 text-dark ft-medium">Explore Your Order</a>
							</p></div>
						</div>
					</div>
				</div>
				<div class="ht-60"></div>
			</section>
			<!-- ======================= Tag Wrap Start ============================ -->
			
			<!-- ======================= Good Deals Start ============================ -->
			<section class="space">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Good Deals</h2>
								<h3 class="ft-bold pt-3">Deals of The Day</h3>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="slide_items">
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/9.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">Mobiles</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore iPhone 12</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
										<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/10.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">Headphones</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore Headphone</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/11.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">Mobiles</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Ziome iPhone 11</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
										<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/4.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">Mobiles</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Pillos Android Phone</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
										<div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/5.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">Camera</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Phot Video Camera</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/6.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">Headphone</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">New Croft Headphone</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- single Item -->
								<div class="single_itesm">
									<div class="product_grid card b-0">
										<div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
										<div class="card-body p-0">
											<div class="shop_thumb position-relative">
												<a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{('kumo/img/shop/7.png" alt="..."></a>
												<div class="product-left-hover-overlay">
													<ul class="left-over-buttons">
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
														<li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
											<div class="text-left">
												<div class="text-left">
													<div class="elso_titl"><span class="small">TV/LCD</span></div>
													<h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">32 Inch Sony TV</a></h5>
													<div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
													</div>
													<div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
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
			<!-- ======================= Good Deals Start ============================ -->
			
			<!-- ======================= Customer Features ======================== -->
			<section class="px-0 py-3 br-top">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shopping-basket"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Free Shipping</h5>
									<span class="text-muted">Capped at $10 per order</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="far fa-credit-card"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">Secure Payments</h5>
									<span class="text-muted">Up to 6 months installments</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-shield-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">15-Days Returns</h5>
									<span class="text-muted">Shop with fully confidence</span>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
							<div class="d-flex align-items-center justify-content-start py-2">
								<div class="d_ico">
									<i class="fas fa-headphones-alt"></i>
								</div>
								<div class="d_capt">
									<h5 class="mb-0">24x7 Fully Support</h5>
									<span class="text-muted">Get friendly support</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= Customer Features ======================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<img src="{{('kumo/img/logo-light.png" class="img-footer small mb-2" alt="" />
									
									<div class="address mt-3">
										3298 Grant Street Longview, TX<br>United Kingdom 75601	
									</div>
									<div class="address mt-3">
										1-202-555-0106<br>help@shopper.com
									</div>
									<div class="address mt-3">
										<ul class="list-inline">
											<li class="list-inline-item"><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-youtube"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Supports</h4>
									<ul class="footer-menu">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">About Page</a></li>
										<li><a href="#">Size Guide</a></li>
										<li><a href="#">Shipping & Returns</a></li>
										<li><a href="#">FAQ's Page</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Shop</h4>
									<ul class="footer-menu">
										<li><a href="#">Men's Shopping</a></li>
										<li><a href="#">Women's Shopping</a></li>
										<li><a href="#">Kids's Shopping</a></li>
										<li><a href="#">Furniture</a></li>
										<li><a href="#">Discounts</a></li>
									</ul>
								</div>
							</div>
					
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Company</h4>
									<ul class="footer-menu">
										<li><a href="#">About</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
								<div class="footer_widget">
									<h4 class="widget_title">Subscribe</h4>
									<p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Email Address">
											<div class="input-group-append">
												<button type="button" class="input-group-text b-0 text-light"><i class="lni lni-arrow-right"></i></button>
											</div>
										</div>
									</div>
									<div class="address mt-3">
										<h5 class="fs-sm text-light">Secure Payments</h5>
										<div class="scr_payment"><img src="{{('kumo/img/card.png" class="img-fluid" alt="" /></div>
									</div>
								</div>
							</div>
								
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2021 Kumo. Designd By <a href="https://themezhub.com/">ThemezHub</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			<!-- Product View Modal -->
			<div class="modal fade lg-modal" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickviewmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="quickviewmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body">
							<div class="quick_view_wrap">
					
								<div class="quick_view_thmb">
									<div class="quick_view_slide">
										<div class="single_view_slide"><img src="{{('kumo/img/product/1.jpg" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="{{('kumo/img/product/2.jpg" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="{{('kumo/img/product/3.jpg" class="img-fluid" alt="" /></div>
										<div class="single_view_slide"><img src="{{('kumo/img/product/4.jpg" class="img-fluid" alt="" /></div>
									</div>
								</div>
								
								<div class="quick_view_capt">
									<div class="prd_details">
										
										<div class="prt_01 mb-1"><span class="text-light bg-info rounded px-2 py-1">Dresses</span></div>
										<div class="prt_02 mb-2">
											<h2 class="ft-bold mb-1">Women Striped Shirt Dress</h2>
											<div class="text-left">
												<div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="small">(412 Reviews)</span>
												</div>
												<div class="elis_rty"><span class="ft-medium text-muted line-through fs-md mr-2">$199</span><span class="ft-bold theme-cl fs-lg mr-2">$110</span><span class="ft-regular text-danger bg-light-danger py-1 px-2 fs-sm">Out of Stock</span></div>
											</div>
										</div>
										
										<div class="prt_03 mb-3">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
										</div>
										
										<div class="prt_04 mb-2">
											<p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>
											<div class="text-left">
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="white8">
													<label class="form-option-label rounded-circle" for="white8"><span class="form-option-color rounded-circle blc7"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="blue8">
													<label class="form-option-label rounded-circle" for="blue8"><span class="form-option-color rounded-circle blc2"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="yellow8">
													<label class="form-option-label rounded-circle" for="yellow8"><span class="form-option-color rounded-circle blc5"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="pink8">
													<label class="form-option-label rounded-circle" for="pink8"><span class="form-option-color rounded-circle blc3"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="red">
													<label class="form-option-label rounded-circle" for="red"><span class="form-option-color rounded-circle blc4"></span></label>
												</div>
												<div class="form-check form-option form-check-inline mb-1">
													<input class="form-check-input" type="radio" name="color8" id="green">
													<label class="form-option-label rounded-circle" for="green"><span class="form-option-color rounded-circle blc6"></span></label>
												</div>
											</div>
										</div>
										
										<div class="prt_04 mb-4">
											<p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
											<div class="text-left pb-0 pt-2">
												<div class="form-check size-option form-option form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="28" checked="">
													<label class="form-option-label" for="28">28</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="30">
													<label class="form-option-label" for="30">30</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="32">
													<label class="form-option-label" for="32">32</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="34">
													<label class="form-option-label" for="34">34</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="36">
													<label class="form-option-label" for="36">36</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="38">
													<label class="form-option-label" for="38">38</label>
												</div>
												<div class="form-check form-option size-option  form-check-inline mb-2">
													<input class="form-check-input" type="radio" name="size" id="40">
													<label class="form-option-label" for="40">40</label>
												</div>
											</div>
										</div>
										
										<div class="prt_05 mb-4">
											<div class="form-row mb-7">
												<div class="col-12 col-lg-auto">
													<!-- Quantity -->
													<select class="mb-2 custom-select">
													  <option value="1" selected="">1</option>
													  <option value="2">2</option>
													  <option value="3">3</option>
													  <option value="4">4</option>
													  <option value="5">5</option>
													</select>
												</div>
												<div class="col-12 col-lg">
													<!-- Submit -->
													<button type="submit" class="btn btn-block custom-height bg-dark mb-2">
														<i class="lni lni-shopping-basket mr-2"></i>Add to Cart 
													</button>
												</div>
												<div class="col-12 col-lg-auto">
													<!-- Wishlist -->
													<button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
														<i class="lni lni-heart mr-2"></i>Wishlist
													</button>
												</div>
										  </div>
										</div>
										
										<div class="prt_06">
											<p class="mb-0 d-flex align-items-center">
											  <span class="mr-4">Share:</span>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
												<i class="fab fa-twitter position-absolute"></i>
											  </a>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
												<i class="fab fa-facebook-f position-absolute"></i>
											  </a>
											  <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
												<i class="fab fa-pinterest-p position-absolute"></i>
											  </a>
											</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="loginmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Login</h2>
							</div>
							
							<form>				
								<div class="form-group">
									<label>User Name</label>
									<input type="text" class="form-control" placeholder="Username*">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Password*">
								</div>
								
								<div class="form-group">
									<div class="d-flex align-items-center justify-content-between">
										<div class="flex-1">
											<input id="dd" class="checkbox-custom" name="dd" type="checkbox">
											<label for="dd" class="checkbox-custom-label">Remember Me</label>
										</div>	
										<div class="eltio_k2">
											<a href="#">Lost Your Password?</a>
										</div>	
									</div>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width bg-dark text-light fs-md ft-medium">Login</button>
								</div>
								
								<div class="form-group text-center mb-0">
									<p class="extra">Not a member?<a href="#et-register-wrap" class="text-dark"> Register</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Search -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
						<button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
					</div>
						
					<div class="cart_action px-3 py-4">
						<form class="form m-0 p-0">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Product Keyword.." />
							</div>
							
							<div class="form-group">
								<select class="custom-select">
								  <option value="1" selected="">Choose Category</option>
								  <option value="2">Men's Store</option>
								  <option value="3">Women's Store</option>
								  <option value="4">Kid's Fashion</option>
								  <option value="5">Inner Wear</option>
								</select>
							</div>
							
							<div class="form-group mb-0">
								<button type="button" class="btn d-block full-width btn-dark">Search Product</button>
							</div>
						</form>
					</div>
					
					<div class="d-flex align-items-center justify-content-center br-top br-bottom py-2 px-3">
						<h4 class="cart_heading fs-md mb-0">Hot Categories</h4>
					</div>
						
					<div class="cart_action px-3 py-3">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{('kumo/img/tshirt.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">T-Shirts</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{('kumo/img/pant.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Pants</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{('kumo/img/fashion.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Women's</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{('kumo/img/sneakers.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Shoes</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{('kumo/img/television.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-4 mb-3">
								<div class="cats_side_wrap text-center">
									<div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-3 circle mb-2 gray"><a href="javascript:void(0);" class="d-block"><img src="{{('kumo/img/accessories.png" class="img-fluid" width="40" alt="" /></a></div></div>
									<div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Wishlist -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Wishlist">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Saved Products</h4>
						<button onclick="closeWishlist()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{('kumo/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{('kumo/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{('kumo/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
						</div>
						
						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$417</h3>
						</div>
						
						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark">Move To Cart</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Cart -->
			<div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
				<div class="rightMenu-scroll">
					<div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
						<h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
						<button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
					</div>
					<div class="right-ch-sideBar">
						
						<div class="cart_select_items py-2">
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{('kumo/img/product/4.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Women Striped Shirt Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{('kumo/img/product/7.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Floral Print Jumpsuit</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">36</span>, <span class="text-dark small">Red</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$129</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
							<!-- Single Item -->
							<div class="d-flex align-items-center justify-content-between px-3 py-3">
								<div class="cart_single d-flex align-items-center">
									<div class="cart_selected_single_thumb">
										<a href="#"><img src="{{('kumo/img/product/8.jpg" width="60" class="img-fluid" alt="" /></a>
									</div>
									<div class="cart_single_caption pl-2">
										<h4 class="product_title fs-sm ft-medium mb-0 lh-1">Girls Solid A-Line Dress</h4>
										<p class="mb-2"><span class="text-dark ft-medium small">30</span>, <span class="text-dark small">Blue</span></p>
										<h4 class="fs-md ft-medium mb-0 lh-1">$100</h4>
									</div>
								</div>
								<div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
							</div>
							
						</div>
						
						<div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
							<h6 class="mb-0">Subtotal</h6>
							<h3 class="mb-0 ft-medium">$1023</h3>
						</div>
						
						<div class="cart_action px-3 py-3">
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
							</div>
							<div class="form-group">
								<button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{('kumo/js/jquery.min.js"></script>
		<script src="{{('kumo/js/popper.min.js"></script>
		<script src="{{('kumo/js/bootstrap.min.js"></script>
		<script src="{{('kumo/js/ion.rangeSlider.min.js"></script>
		<script src="{{('kumo/js/slick.js"></script>
		<script src="{{('kumo/js/slider-bg.js"></script>
		<script src="{{('kumo/js/lightbox.js"></script> 
		<script src="{{('kumo/js/smoothproducts.js"></script>
		<script src="{{('kumo/js/snackbar.min.js"></script>
		<script src="{{('kumo/js/jQuery.style.switcher.js"></script>
		<script src="{{('kumo/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->	

		<script>
			function openWishlist() {
				document.getElementById("Wishlist").style.display = "block";
			}
			function closeWishlist() {
				document.getElementById("Wishlist").style.display = "none";
			}
		</script>
		
		<script>
			function openCart() {
				document.getElementById("Cart").style.display = "block";
			}
			function closeCart() {
				document.getElementById("Cart").style.display = "none";
			}
		</script>

		<script>
			function openSearch() {
				document.getElementById("Search").style.display = "block";
			}
			function closeSearch() {
				document.getElementById("Search").style.display = "none";
			}
		</script>		
	</body>
</html>