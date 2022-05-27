<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home - Clouds to You</title>
    <?php require 'includes/site/head.php'; ?>
</head>

<body class="home bg-grey">
    <div class="page-wrapper">
        <?php require 'includes/site/header.php'; ?>
        <!-- End of Header -->
        <!-- Start of Main -->
        <main class="main">
            <div class="container pb-2">
                <div class="intro-section mb-2">
                    <div class="row">
                        <div class="intro-slide-wrapper col-lg-9">
                            <div class="swiper-container swiper-theme animation-slider pg-inner pg-xxl-hide pg-show pg-white nav-xxl-show nav-hide" data-swiper-options="{
                                'spaceBetween': 0,
                                'slidesPerView': 1
                            }">
                                <div class="swiper-wrapper gutter-no row cols-1">
                                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm text-center" style="background-image: url(assets/images/demos/demo11/slides/slide-1.jpg); background-color: #5B98B7;">
                                        <div class="banner-content y-50">
                                            <h3 class="banner-title text-capitalize text-white font-secondary font-weight-normal ls-0 slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.2s'}">
                                                Clouds to You
                                            </h3>
                                            <h4 class="banner-subtitle text-uppercase text-white font-weight-normal ls-0 slide-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                                We are your
                                            </h4>
                                            <span class="font-weight-bolder text-uppercase text-white slide-animate d-block ls-normal" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                                e-cigarette/vape store
                                            </span>
                                            <a href="shop.php" class="btn btn-white btn-outline btn-rounded btn-icon-right br-xs slide-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.6s'}">
                                                Browse Products<i class="w-icon-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End of Intro Slide 1 -->

                                </div>
                                <div class="swiper-pagination"></div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>
                        <div class="intro-banner-wrapper col-lg-3 mt-4">
                            <div class="banner banner-fixed intro-banner col-lg-12 col-sm-6 br-sm mb-4">
                                <figure>
                                    <img src="assets/images/demos/demo11/banner/banner-1.jpg" alt="Category Banner" width="680" height="180" style="background-color: #E4E7EC;" />
                                </figure>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-capitalize text-default font-secondary font-weight-normal">Products</h4>
                                    <h3 class="banner-title text-dark text-uppercase ls-25">liquids and Accessories</h3>
                                    <a href="shop.php" class="btn btn-dark btn-link btn-underline btn-icon-right">
                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- End of Intro Banner -->
                            <div class="banner banner-fixed intro-banner col-lg-12 col-sm-6 intro-banner2 mb-4 br-sm">
                                <figure>
                                    <img src="assets/images/demos/demo11/banner/banner-2.jpg" alt="Category Banner" width="680" height="180" style="background-color: #33363B;" />
                                </figure>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-capitalize font-secondary font-weight-normal">Products</h4>
                                    <h3 class="banner-title text-white text-uppercase ls-25">Devices and Desposables</h3>
                                    <a href="shop.php" class="btn btn-white btn-link btn-underline btn-icon-right">
                                        Shop Now<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- End of Intro Banner -->
                        </div>
                    </div>
                </div>
                <!-- End of Intro-section -->

                <div class="swiper-container swiper-theme icon-box-wrapper br-sm bg-white" data-swiper-options="{
                    'loop': true,
                    'spaceBetween': 10,
                    'autoplay': false,
                    'autoplayTimeout': 4000,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">We do deliveries</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Returns are accepted</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Customer Support</h4>
                            <p class="text-default">Call or email us<z/p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box Wrapper -->

                <div class="banner banner-big-sale appear-animate d-flex pl-3 pr-3 br-sm mb-8" style="background-image: url(assets/images/demos/demo11/banner/full.jpg);
                    background-color: #383839;">
                    <div class="banner-content align-items-center d-flex flex-wrap">
                        <h4 class="banner-price-info text-secondary text-uppercase lh-1">
                            UP TO 60% Off
                        </h4>
                        <h4 class="banner-subtitle text-uppercase text-white font-weight-bold">Big Sale Up </h4>
                        <h3 class="banner-title text-uppercase text-white font-weight-bold ml-2 mr-9">In Store.</h3>

                    </div>
                </div>
                <!-- End of Banner Big Sale-->

                <div class="title-link-wrapper title-deals appear-animate after-none">
                    <h2 class="title">Deals Of The Day</h2>
                    <div class=" ont-size-sm  align-items-center mr-auto mt-2 mb-1 br-xs d-flex">

                    </div>
                    <a href="#" class="ml-0 mb-0">More Products<i class="w-icon-long-arrow-right"></i></a>
                </div>

                <div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-6" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        }
                    }
                    }">
                    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2" id = "lowest_price">
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo11/products/1-1-1.jpg" alt="Product" width="300" height="337">
                                        <img src="assets/images/demos/demo11/products/1-1-1.jpg" alt="Product" width="300" height="337">
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Nasty  Liquid</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$40.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo11/products/1-1-2.jpg" alt="Product" width="300" height="337">
                                        <img src="assets/images/demos/demo11/products/1-1-2.jpg" alt="Product" width="300" height="337">
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Nasty Liquid</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$40.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo11/products/1-2-1.jpg" alt="Product" width="300" height="337">
                                        <img src="assets/images/demos/demo11/products/1-2-1.jpg" alt="Product" width="300" height="337">
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Nasty Liquid</a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$40.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo11/products/1-2-2.jpg" alt="Product" width="300" height="337">
                                        <img src="assets/images/demos/demo11/products/1-2-2.jpg" alt="Product" width="300" height="337">
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Smok </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$40.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/demos/demo11/products/1-3-1.jpg" alt="Product" width="300" height="337">
                                        <img src="assets/images/demos/demo11/products/1-3-1.jpg" alt="Product" width="300" height="337">
                                    </a>
                                    <div class="product-action-horizontal">
                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h4 class="product-name"><a href="product-default.html">Smok </a></h4>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                    </div>
                                    <div class="product-price">
                                        <ins class="new-price">$40.00</ins>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Prodcut Deals Wrapper -->

                <div class="swiper-container swiper-theme category-banner-wrapper pg-inner appear-animate pb-2 mb-10" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        }
                    } }">
                    <div class="swiper-wrapper row cols-md-3 cols-sm-2 cols-1">
                        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mt-2">
                            <figure>
                                <img src="assets/images/demos/demo11/banner/banner-3.jpg" alt="Category Banner" width="680" height="180" style="background-color: #565960;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-white text-capitalize font-secondary font-weight-normal mb-1">Shop for</h4>
                                <h4 class="banner-price-info text-white text-uppercase font-weight-bold mb-3 ls-25"> Desposables </h4>
                                <a href="shop.php" class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mt-2">
                            <figure>
                                <img src="assets/images/demos/demo11/banner/banner-4.jpg" alt="Category Banner" width="680" height="180" style="background-color: #E3E7EA;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-dark text-capitalize font-secondary font-weight-normal mb-1">Shop for</h4>
                                <h3 class="banner-title text-dark text-uppercase ls-25"> Liquids</h3>
                                <a href="shop.php" class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mt-2">
                            <figure>
                                <img src="assets/images/demos/demo11/banner/banner-5.jpg" alt="Category Banner" width="680" height="180" style="background-color: #423A37;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-white text-capitalize font-secondary font-weight-normal mb-1">Shop for</h4>
                                <h3 class="banner-title text-white text-uppercase ls-25">Devices</h3>
                                <a href="shop.php" class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title-link-wrapper title-recent mb-6 after-none appear-animate">
                    <h2 class="title mb-0 ls-normal appear-animate pb-1">Popular Products</h2>
                </div>

                <div class="swiper-container swiper-theme recent-view shadow-swiper appear-animate mb-8 pb-2" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 5
                            },
                            '992': {
                                'slidesPerView': 6
                            },
                            '1200': {
                                'slidesPerView': 8,
                                'dots': false
                            }
                        }
                    }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2" id="popular_products_container"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- End of Container -->

        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->

        <?php require 'includes/site/footer.php'; ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->

    <?php require 'includes/site/bottom_page.php'; ?>
    <!-- js: for populating products -->
    <script src="assets/js/populate_product.js"></script>
    <?php
    // for lowest price products
    $column = 'product_price';
    $order_by = 'ASC';
    $variable_name = 'lowest_price_products';
    $global_transaction ->filter_list_products($column, $order_by, $variable_name);

    // for popular products
    $column = 'views';
    $order_by = 'DESC';
    $variable_name = 'popular_products';
    $global_transaction ->filter_list_products($column, $order_by, $variable_name);
     ?>

     <script>  
     
        $(document).ready(()=>{

            // lowest price products
            populate_products_on_div('lowest_price', lowest_price_products, 4);
            // populate popular products
            populate_product_small_div('popular_products_container', popular_products, 8);
            });
     </script>

</body>


</html>