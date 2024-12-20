<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zoop Retails Store</title>
    @include('lib.includes.head')
</head>
<body>
    <div class="site-content">
        @include('lib.includes.preloader')
        @include('lib.includes.header')
        <section id="homescreen1-deatils-page">
            <div class="homescreen1-deatils-page-full">
                <div class="homescreen-first-sec mt-32">
                    <div class="container">
                        <div class="homescreen-first-wrapper">
                            <h1 class="home1-txt1">Hey, Jesica</h1>
                            <p class="home1-txt2">Find your best products at your finger</p>
                        </div>
                    </div>
                </div>
                <div class="homescreen-second-sec mt-32">
                    <div class="homescreen-second-wrapper">
                        <div class="container">
                            <div class="homescreen-second-wrapper-top">
                                <div class="categories-first">
                                    <h2 class="home1-txt3">Categories</h2>
                                    <h3 class="d-none">Hidden</h3>
                                </div>
                                <div class="view-all-second">
                                    <a href="category-page.html">
                                        <p class="view-all-txt">View all<span><img
                                                    src="assets/images/icons/view-all-icon.svg"
                                                    alt="right-arrow"></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="homescreen-second-wrapper-bottom mt-16">
                            <div class="homescreen-second-wrapper-slider">
                                <div class="category-slide redirect-clothes">
                                    <img src="assets/images/homescreen-1/category-1.png" alt="category-img">
                                    <div class="category-slide-content">
                                        <h4>Clothes</h4>
                                        <h5>1856 Items</h5>
                                    </div>
                                </div>
                                <div class="category-slide redirect-electronic">
                                    <img src="assets/images/homescreen-1/category-2.png" alt="category-img">
                                    <div class="category-slide-content">
                                        <h4>Electronics</h4>
                                        <h5>845 Items</h5>
                                    </div>
                                </div>
                                <div class="category-slide redirect-clothes">
                                    <img src="assets/images/homescreen-1/category-3.png" alt="category-img">
                                    <div class="category-slide-content">
                                        <h4>Cosmetics</h4>
                                        <h5>286 Items</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homescreen-third-sec mt-32">
                    <div class="container">
                        <div class="homescreen-third-wrapper">
                            <h3>Spring Discounts Up To 30% Off</h3>
                            <p>Get a discount for every course order! Only valid for today!</p>
                            <div class="home1-shop-now-btn mt-32">
                                <a href="offer-screen.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homescreen-fourth-sec mt-32">
                    <div class="homescreen-fourth-wrapper">
                        <div class="container">
                            <div class="homescreen-second-wrapper-top">
                                <div class="categories-first">
                                    <h2 class="home1-txt3">Best Sellers</h2>
                                </div>
                                <div class="view-all-second">
                                    <a href="best-seller-screen.html">
                                        <p class="view-all-txt">View all<span><img
                                                    src="assets/images/icons/view-all-icon.svg"
                                                    alt="right-arrow"></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="homescreen-fourth-wrapper-bottom mt-16">
                            <div class="homescreen-fourth-wrapper-slider">
                                <div class="seller-slide redirect-clothes">
                                    <div class="seller-slide-top-content">
                                        <img src="assets/images/homescreen-1/seller-1.png" alt="seller-img">
                                        <div class="home-page-favourite">
                                            <a href="javascript:void(0);" class="item-bookmark active ">
                                                <img src="assets/images/icons/unfill-heart.svg" alt="unfill-heart">
                                            </a>
                                        </div>
                                        <div class="seller-txt-sec">
                                            <p class="sale-txt">Sale</p>
                                        </div>
                                    </div>
                                    <div class="seller-slide-bottom-content">
                                        <h3 class="seller-name">Shor summer dress</h3>
                                        <div class="seller-bottom-price">
                                            <div class="seller-bottom-price1">
                                                <span class="seller-price-txt1">$680.00</span>
                                                <span class="seller-price-txt2">$800.00</span>
                                            </div>
                                            <div class="seller-bottom-price1">
                                                <span class="seller-star"><img src="assets/images/icons/orange-star.svg"
                                                        alt="star-img"></span>
                                                <span class="seller-price-txt3">5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="seller-slide redirect-electronic">
                                    <div class="seller-slide-top-content">
                                        <img src="assets/images/homescreen-1/seller-2.png" alt="seller-img">
                                        <div class="home-page-favourite">
                                            <a href="javascript:void(0);" class="item-bookmark">
                                                <img src="assets/images/icons/unfill-heart.svg" alt="unfill-heart">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="seller-slide-bottom-content">
                                        <h3 class="seller-name">Bluetooth Speakers</h3>
                                        <div class="seller-bottom-price">
                                            <div class="seller-bottom-price1">
                                                <span class="seller-price-txt1">$80.00</span>
                                            </div>
                                            <div class="seller-bottom-price1">
                                                <span class="seller-star"><img src="assets/images/icons/orange-star.svg"
                                                        alt="star-img"></span>
                                                <span class="seller-price-txt3">5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homescreen-fifth-sec mt-32">
                    <div class="homescreen-fifth-wrapper">
                        <div class="container">
                            <div class="homescreen-second-wrapper-top">
                                <div class="categories-first">
                                    <h2 class="home1-txt3">Choose Brands</h2>
                                </div>
                                <div class="view-all-second">
                                    <a href="choose-brand.html">
                                        <p class="view-all-txt">View all<span><img
                                                    src="assets/images/icons/view-all-icon.svg"
                                                    alt="right-arrow"></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="homescreen-fifth-wrapper-bottom mt-16">
                            <div class="homescreen-fifth-wrapper-slider">

                                <div class="brand-slide">
                                    <div class="brands-img">
                                        <img src="assets/images/homescreen-1/brand-1.png" alt="brand-img">
                                    </div>
                                    <div class="brands-content">
                                        <p>Nike</p>
                                    </div>
                                </div>
                                <div class="brand-slide">
                                    <div class="brands-img">
                                        <img src="assets/images/homescreen-1/brand-2.png" alt="seller-img">
                                    </div>
                                    <div class="brands-content">
                                        <p>Samsung</p>
                                    </div>
                                </div>
                                <div class="brand-slide">
                                    <div class="brands-img">
                                        <img src="assets/images/homescreen-1/brand-3.png" alt="brand-img">
                                    </div>
                                    <div class="brands-content">
                                        <p>Intel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homescreen-sixth-sec mt-32">
                    <div class="homescreen-sixth-wrapper">
                        <div class="container">
                            <div class="homescreen-second-wrapper-top">
                                <div class="categories-first">
                                    <h2 class="home1-txt3">Featured Products</h2>
                                </div>
                                <div class="view-all-second">
                                    <a href="single-electronics.html">
                                        <p class="view-all-txt">View all<span><img
                                                    src="assets/images/icons/view-all-icon.svg"
                                                    alt="right-arrow"></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="homescreen-sixth-wrapper-bottom mt-16">
                            <div class="homescreen-sixth-wrapper-slider">
                                <div class="featured-slide">
                                    <div class="featured-slide-top redirect-electronic">
                                        <img src="assets/images/homescreen-1/featured-1.png" alt="featured-img">
                                        <div class="home-page-featured-favourite">
                                            <a href="javascript:void(0);" class="item-bookmark" tabindex="-1">
                                                <img src="assets/images/icons/unfill-heart.svg" alt="unfill-heart">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="seller-slide-bottom-content  redirect-electronic">
                                        <h3 class="featured-name">Samsung Galaxy A14 5G (8 GB RAM, 128 GB RO</h3>
                                        <div class="seller-bottom-price">
                                            <div class="seller-bottom-price1">
                                                <span class="seller-price-txt1">$3500.00</span>
                                            </div>
                                            <div class="seller-bottom-price1">
                                                <span class="seller-star"><img src="assets/images/icons/orange-star.svg"
                                                        alt="star-img"></span>
                                                <span class="seller-price-txt3">4.6</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-slide">
                                    <div class="featured-slide-top redirect-electronic">
                                        <img src="assets/images/homescreen-1/featured-2.png" alt="featured-img">
                                        <div class="home-page-featured-favourite">
                                            <a href="javascript:void(0);" class="item-bookmark" tabindex="-1">
                                                <img src="assets/images/icons/unfill-heart.svg" alt="unfill-heart">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="seller-slide-bottom-content redirect-electronic">
                                        <h3 class="featured-name">Full Body Mini Massager Gun (15 Mins Auto Off </h3>
                                        <div class="seller-bottom-price">
                                            <div class="seller-bottom-price1">
                                                <span class="seller-price-txt1">$90.00</span>
                                            </div>
                                            <div class="seller-bottom-price1">
                                                <span class="seller-star"><img src="assets/images/icons/orange-star.svg"
                                                        alt="star-img"></span>
                                                <span class="seller-price-txt3">5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-slide">
                                    <div class="featured-slide-top redirect-electronic ">
                                        <img src="assets/images/homescreen-1/featured-3.png" alt="featured-img">
                                        <div class="home-page-featured-favourite">
                                            <a href="javascript:void(0);" class="item-bookmark" tabindex="-1">
                                                <img src="assets/images/icons/unfill-heart.svg" alt="unfill-heart">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="seller-slide-bottom-content redirect-electronic">
                                        <h3 class="featured-name">NIVEA Sun Lotion, SPF 50, with UVA & UVB</h3>
                                        <div class="seller-bottom-price">
                                            <div class="seller-bottom-price1">
                                                <span class="seller-price-txt1">$50.00</span>
                                            </div>
                                            <div class="seller-bottom-price1">
                                                <span class="seller-star"><img src="assets/images/icons/orange-star.svg"
                                                        alt="star-img"></span>
                                                <span class="seller-price-txt3">4.6</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homescreen-seventh-sec mt-32">
                    <div class="homescreen-seventh-wrapper">
                        <div id="carouselExampleIndicators" class="carousel slide carousel slide-shop-now2"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active show-now2-custom-btn" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    class="show-now2-custom-btn" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    class="show-now2-custom-btn" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="shop-now2-sec">
                                        <div class="container">
                                            <div class="homescreen-seventh-wrapper">
                                                <h3>20% Off on Jackets This Season</h3>
                                                <p>Get a discount for every course order!Only valid for today!</p>
                                                <div class="home1-shop-now-btn mt-32">
                                                    <a href="offer-screen.html">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="shop-now2-sec">
                                        <div class="container">
                                            <div class="homescreen-seventh-wrapper">
                                                <h3>20% Off on Jackets This Season</h3>
                                                <p>Get a discount for every course order!Only valid for today!</p>
                                                <div class="home1-shop-now-btn mt-32">
                                                    <a href="offer-screen.html">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="shop-now2-sec">
                                        <div class="container">
                                            <div class="homescreen-seventh-wrapper">
                                                <h3>20% Off on Jackets This Season</h3>
                                                <p>Get a discount for every course order!Only valid for today!</p>
                                                <div class="home1-shop-now-btn mt-32">
                                                    <a href="offer-screen.html">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homescreen-eight-sec mt-32">
                    <div class="homescreen-eight-wrapper">
                        <div class="container">
                            <div class="homescreen-second-wrapper-top">
                                <div class="categories-first">
                                    <h2 class="home1-txt3">New Arrivals</h2>
                                </div>
                                <div class="view-all-second">
                                    <a href="arrivals.html">
                                        <p class="view-all-txt">View all<span><img
                                                    src="assets/images/icons/view-all-icon.svg"
                                                    alt="right-arrow"></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="homescreen-eight-wrapper-bottom mt-16">
                            <div class="homescreen-eight-bottom-full">
                                <ul class="nav nav-pills mb-3" id="homepage1-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active custom-home1-tab-btn" id="pills-all-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab"
                                            aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link custom-home1-tab-btn" id="pills-clothes-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-clothes" type="button"
                                            role="tab" aria-selected="false">Clothes</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link custom-home1-tab-btn" id="pills-electronics-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-electronics" type="button"
                                            role="tab" aria-selected="false">Electronics</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link custom-home1-tab-btn" id="pills-cosmetics-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-cosmetics" type="button"
                                            role="tab" aria-selected="false">Cosmetics</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link custom-home1-tab-btn" id="pills-fitness-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-fitness" type="button"
                                            role="tab" aria-selected="false">Fitness</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" tabindex="0">
                                        <div class="container">
                                            <div class="homepage1-tab-details">
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-1.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Fire-Boltt Phoenix Smart Watch
                                                                with Bluetooth Calling...</p>
                                                            <h3 class="tab-home1-txt2">$150.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-2.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">All-in-One PC 12th Gen Intel Core
                                                                i5-1235U 24-inch(60.5 cm) FHD An</p>
                                                            <h3 class="tab-home1-txt2">$850.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-3.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Western Dresses for Women | Short
                                                                A-Line Dress for Girls | Maxi </p>
                                                            <h3 class="tab-home1-txt2">$80.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-4.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Girl's Alloy Rose Gold Plated Dual
                                                                Heart Pendant for mom with</p>
                                                            <h3 class="tab-home1-txt2">$450.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-5.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Baby Gift Pack Series,Pack of 1
                                                                set,white Baby Gift Pack Series, </p>
                                                            <h3 class="tab-home1-txt2">$65.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-clothes" role="tabpanel" tabindex="0">
                                        <div class="container">
                                            <div class="homepage1-tab-details">
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-3.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Western Dresses for Women | Short
                                                                A-Line Dress for Girls | Maxi </p>
                                                            <h3 class="tab-home1-txt2">$80.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-electronics" role="tabpanel" tabindex="0">
                                        <div class="container">
                                            <div class="homepage1-tab-details">
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-1.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Fire-Boltt Phoenix Smart Watch
                                                                with Bluetooth Calling...</p>
                                                            <h3 class="tab-home1-txt2">$150.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-cosmetics" role="tabpanel" tabindex="0">
                                        <div class="container">
                                            <div class="homepage1-tab-details">
                                                <div class="homepage1-tab-details-wrapper">
                                                    <div class="home1-tab-img">
                                                        <img src="assets/images/homescreen-1/arrivals-4.png"
                                                            alt="watch-img">
                                                    </div>
                                                    <div class="home1-tab-details">
                                                        <div class="home1-tab-details-full">
                                                            <p class="tab-home1-txt1">Girl's Alloy Rose Gold Plated Dual
                                                                Heart Pendant for mom with</p>
                                                            <h3 class="tab-home1-txt2">$450.00</h3>
                                                            <div class="orange-star-tab">
                                                                <span>
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <mask style="mask-type:alpha"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="18" height="18">
                                                                            <rect width="18" height="18" fill="white" />
                                                                        </mask>
                                                                        <g mask="url(#mask0_330_6287)">
                                                                            <path
                                                                                d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                                fill="#FF4C3B" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span class="tab-home1-txt3">4.8</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home1-tab-favourite">
                                                        <div class="home-page-arrival-favourite">
                                                            <a href="javascript:void(0);" class="item-bookmark"
                                                                tabindex="-1">
                                                                <img src="assets/images/icons/unfill-heart.svg"
                                                                    alt="unfill-heart">
                                                            </a>
                                                        </div>
                                                        <div class="plus-bnt-home1">
                                                            <a href="javascript:void(0)">
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6097)">
                                                                        <path d="M9 3.75V14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.75 9H14.25" stroke="white"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-fitness" role="tabpanel" tabindex="0">
                                        <div class="container">
                                            <div class="homepage1-tab-details-wrapper">
                                                <div class="home1-tab-img">
                                                    <img src="assets/images/homescreen-1/arrivals-5.png"
                                                        alt="watch-img">
                                                </div>
                                                <div class="home1-tab-details">
                                                    <div class="home1-tab-details-full">
                                                        <p class="tab-home1-txt1">Baby Gift Pack Series,Pack of 1
                                                            set,white Baby Gift Pack Series, </p>
                                                        <h3 class="tab-home1-txt2">$65.00</h3>
                                                        <div class="orange-star-tab">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <mask style="mask-type:alpha"
                                                                        maskUnits="userSpaceOnUse" x="0" y="0"
                                                                        width="18" height="18">
                                                                        <rect width="18" height="18" fill="white" />
                                                                    </mask>
                                                                    <g mask="url(#mask0_330_6287)">
                                                                        <path
                                                                            d="M8.46199 2.58999C8.63485 2.23978 8.72128 2.06468 8.83862 2.00874C8.94071 1.96006 9.05932 1.96006 9.1614 2.00874C9.27874 2.06468 9.36517 2.23978 9.53804 2.58999L11.178 5.91246C11.2291 6.01585 11.2546 6.06754 11.2919 6.10768C11.3249 6.14322 11.3645 6.17201 11.4085 6.19247C11.4582 6.21557 11.5152 6.22391 11.6293 6.24058L15.2977 6.77678C15.684 6.83324 15.8772 6.86148 15.9666 6.95583C16.0444 7.03792 16.0809 7.15072 16.0661 7.26283C16.0491 7.39168 15.9093 7.52788 15.6296 7.80029L12.9761 10.3848C12.8934 10.4654 12.852 10.5057 12.8253 10.5536C12.8017 10.596 12.7865 10.6427 12.7807 10.6909C12.7741 10.7453 12.7838 10.8022 12.8034 10.9161L13.4295 14.5666C13.4955 14.9516 13.5285 15.1441 13.4665 15.2584C13.4125 15.3578 13.3165 15.4275 13.2053 15.4481C13.0775 15.4718 12.9046 15.3809 12.5588 15.1991L9.27928 13.4744C9.1771 13.4206 9.12601 13.3938 9.07218 13.3832C9.02452 13.3739 8.9755 13.3739 8.92784 13.3832C8.87402 13.3938 8.82293 13.4206 8.72074 13.4744L5.44119 15.1991C5.09544 15.3809 4.92256 15.4718 4.79473 15.4481C4.68351 15.4275 4.58754 15.3578 4.53355 15.2584C4.4715 15.1441 4.50452 14.9516 4.57056 14.5666L5.19666 10.9161C5.21618 10.8022 5.22594 10.7453 5.21934 10.6909C5.21349 10.6427 5.19833 10.596 5.1747 10.5536C5.14802 10.5057 5.10666 10.4654 5.02394 10.3848L2.37042 7.80029C2.09075 7.52788 1.95091 7.39168 1.93389 7.26283C1.91909 7.15072 1.95567 7.03792 2.03344 6.95583C2.12283 6.86148 2.31598 6.83324 2.70228 6.77678L6.37073 6.24058C6.48482 6.22391 6.54186 6.21557 6.59154 6.19247C6.63552 6.17201 6.67512 6.14322 6.70814 6.10768C6.74543 6.06754 6.77095 6.01585 6.82198 5.91246L8.46199 2.58999Z"
                                                                            fill="#FF4C3B" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <span class="tab-home1-txt3">4.8</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="home1-tab-favourite">
                                                    <div class="home-page-arrival-favourite">
                                                        <a href="javascript:void(0);" class="item-bookmark"
                                                            tabindex="-1">
                                                            <img src="assets/images/icons/unfill-heart.svg"
                                                                alt="unfill-heart">
                                                        </a>
                                                    </div>
                                                    <div class="plus-bnt-home1">
                                                        <a href="javascript:void(0)">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                                    x="0" y="0" width="18" height="18">
                                                                    <rect width="18" height="18" fill="white" />
                                                                </mask>
                                                                <g mask="url(#mask0_330_6097)">
                                                                    <path d="M9 3.75V14.25" stroke="white"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path d="M3.75 9H14.25" stroke="white"
                                                                        stroke-width="2" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </g>
                                                            </svg>
                                                        </a>
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
            </div>
        </section>
        <div class="menu-sidebar details">
            <div class="offcanvas offcanvas-start custom-offcanvas-noti" id="offcanvasExample">
                <div class="offcanvas-header custom-header-offcanva">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="dropdown">
                        <div class="setting-page-full">
                            <div class="setting-page-wrapper">
                                <a href="homescreen-2.html">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_4844" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </mask>
                                                <g mask="url(#mask0_1_4844)">
                                                    <path
                                                        d="M8.12602 14C8.57006 15.7252 10.1362 17 12 17C13.8638 17 15.4299 15.7252 15.874 14M11.0177 2.764L4.23539 8.03912C3.78202 8.39175 3.55534 8.56806 3.39203 8.78886C3.24737 8.98444 3.1396 9.20478 3.07403 9.43905C3 9.70352 3 9.9907 3 10.5651V17.8C3 18.9201 3 19.4801 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4801 21 18.9201 21 17.8V10.5651C21 9.9907 21 9.70352 20.926 9.43905C20.8604 9.20478 20.7526 8.98444 20.608 8.78886C20.4447 8.56806 20.218 8.39175 19.7646 8.03913L12.9823 2.764C12.631 2.49075 12.4553 2.35412 12.2613 2.3016C12.0902 2.25526 11.9098 2.25526 11.7387 2.3016C11.5447 2.35412 11.369 2.49075 11.0177 2.764Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Homepage2</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="notification-option-screen.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_782" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_782)">
                                                    <path
                                                        d="M10 5C10 4.46957 10.2107 3.96086 10.5858 3.58579C10.9609 3.21071 11.4696 3 12 3C12.5304 3 13.0391 3.21071 13.4142 3.58579C13.7893 3.96086 14 4.46957 14 5C15.1484 5.54303 16.1274 6.38833 16.8321 7.4453C17.5367 8.50227 17.9404 9.73107 18 11V14C18.0753 14.6217 18.2954 15.2171 18.6428 15.7381C18.9902 16.2592 19.4551 16.6914 20 17H4C4.54494 16.6914 5.00981 16.2592 5.35719 15.7381C5.70457 15.2171 5.92474 14.6217 6 14V11C6.05956 9.73107 6.4633 8.50227 7.16795 7.4453C7.8726 6.38833 8.85159 5.54303 10 5"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M9 17V18C9 18.7956 9.31607 19.5587 9.87868 20.1213C10.4413 20.6839 11.2044 21 12 21C12.7956 21 13.5587 20.6839 14.1213 20.1213C14.6839 19.5587 15 18.7956 15 18V17"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Notification Options</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="language-screen.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_908" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_908)">
                                                    <path d="M3 7V5H16V7" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 5V19" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 19H8" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15 13V12H21V13" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M18 12V19" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 19H19" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Language</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="currency-screen.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_895" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_895)">
                                                    <path
                                                        d="M16.7 8C16.501 7.43524 16.1374 6.94297 15.6563 6.58654C15.1751 6.23011 14.5983 6.02583 14 6H10C9.20435 6 8.44129 6.31607 7.87868 6.87868C7.31607 7.44129 7 8.20435 7 9C7 9.79565 7.31607 10.5587 7.87868 11.1213C8.44129 11.6839 9.20435 12 10 12H14C14.7956 12 15.5587 12.3161 16.1213 12.8787C16.6839 13.4413 17 14.2044 17 15C17 15.7956 16.6839 16.5587 16.1213 17.1213C15.5587 17.6839 14.7956 18 14 18H10C9.40175 17.9742 8.82491 17.7699 8.34373 17.4135C7.86255 17.057 7.49905 16.5648 7.3 16"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12 3V6M12 18V21" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Currency</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="about-us-screen.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_881" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_881)">
                                                    <path
                                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12 8H12.01" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M11 12H12V16H13" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>About Us</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="privacy-screen.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_867" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_867)">
                                                    <path
                                                        d="M17 11H7C5.89543 11 5 11.8954 5 13V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V13C19 11.8954 18.1046 11 17 11Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M8 11V7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7V11"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Privacy Policy</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="faq-section.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_853" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_853)">
                                                    <path
                                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M12 17V17.01" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M12 13.5C11.9816 13.1754 12.0692 12.8535 12.2495 12.583C12.4299 12.3125 12.6933 12.1079 13 12C13.3759 11.8563 13.7132 11.6272 13.9856 11.331C14.2579 11.0347 14.4577 10.6792 14.5693 10.2926C14.6809 9.90595 14.7013 9.49869 14.6287 9.10286C14.5562 8.70704 14.3928 8.33345 14.1513 8.01151C13.9099 7.68958 13.597 7.42808 13.2373 7.24762C12.8776 7.06715 12.4809 6.97264 12.0785 6.97152C11.6761 6.97041 11.2789 7.06272 10.9182 7.24118C10.5576 7.41965 10.2432 7.67941 10 8"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>FAQs</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="feedback.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_840" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_840)">
                                                    <path
                                                        d="M4 20H8L18.5 9.5C19.0304 8.96956 19.3284 8.25014 19.3284 7.5C19.3284 6.74985 19.0304 6.03043 18.5 5.5C17.9696 4.96956 17.2501 4.67157 16.5 4.67157C15.7499 4.67157 15.0304 4.96956 14.5 5.5L4 16V20Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M13.5 6.5L17.5 10.5" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Send Feedback</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <a href="contact-us.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_822" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_822)">
                                                    <path
                                                        d="M4 3H6C6.26522 3 6.51957 3.10536 6.70711 3.29289C6.89464 3.48043 7 3.73478 7 4V6C7 6.26522 6.89464 6.51957 6.70711 6.70711C6.51957 6.89464 6.26522 7 6 7H4C3.73478 7 3.48043 6.89464 3.29289 6.70711C3.10536 6.51957 3 6.26522 3 6V4C3 3.73478 3.10536 3.48043 3.29289 3.29289C3.48043 3.10536 3.73478 3 4 3Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M18 3H20C20.2652 3 20.5196 3.10536 20.7071 3.29289C20.8946 3.48043 21 3.73478 21 4V6C21 6.26522 20.8946 6.51957 20.7071 6.70711C20.5196 6.89464 20.2652 7 20 7H18C17.7348 7 17.4804 6.89464 17.2929 6.70711C17.1054 6.51957 17 6.26522 17 6V4C17 3.73478 17.1054 3.48043 17.2929 3.29289C17.4804 3.10536 17.7348 3 18 3Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11 3H13C13.2652 3 13.5196 3.10536 13.7071 3.29289C13.8946 3.48043 14 3.73478 14 4V6C14 6.26522 13.8946 6.51957 13.7071 6.70711C13.5196 6.89464 13.2652 7 13 7H11C10.7348 7 10.4804 6.89464 10.2929 6.70711C10.1054 6.51957 10 6.26522 10 6V4C10 3.73478 10.1054 3.48043 10.2929 3.29289C10.4804 3.10536 10.7348 3 11 3Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M4 10H6C6.26522 10 6.51957 10.1054 6.70711 10.2929C6.89464 10.4804 7 10.7348 7 11V13C7 13.2652 6.89464 13.5196 6.70711 13.7071C6.51957 13.8946 6.26522 14 6 14H4C3.73478 14 3.48043 13.8946 3.29289 13.7071C3.10536 13.5196 3 13.2652 3 13V11C3 10.7348 3.10536 10.4804 3.29289 10.2929C3.48043 10.1054 3.73478 10 4 10Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M18 10H20C20.2652 10 20.5196 10.1054 20.7071 10.2929C20.8946 10.4804 21 10.7348 21 11V13C21 13.2652 20.8946 13.5196 20.7071 13.7071C20.5196 13.8946 20.2652 14 20 14H18C17.7348 14 17.4804 13.8946 17.2929 13.7071C17.1054 13.5196 17 13.2652 17 13V11C17 10.7348 17.1054 10.4804 17.2929 10.2929C17.4804 10.1054 17.7348 10 18 10Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11 10H13C13.2652 10 13.5196 10.1054 13.7071 10.2929C13.8946 10.4804 14 10.7348 14 11V13C14 13.2652 13.8946 13.5196 13.7071 13.7071C13.5196 13.8946 13.2652 14 13 14H11C10.7348 14 10.4804 13.8946 10.2929 13.7071C10.1054 13.5196 10 13.2652 10 13V11C10 10.7348 10.1054 10.4804 10.2929 10.2929C10.4804 10.1054 10.7348 10 11 10Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M11 17H13C13.2652 17 13.5196 17.1054 13.7071 17.2929C13.8946 17.4804 14 17.7348 14 18V20C14 20.2652 13.8946 20.5196 13.7071 20.7071C13.5196 20.8946 13.2652 21 13 21H11C10.7348 21 10.4804 20.8946 10.2929 20.7071C10.1054 20.5196 10 20.2652 10 20V18C10 17.7348 10.1054 17.4804 10.2929 17.2929C10.4804 17.1054 10.7348 17 11 17Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Contact Us</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="setting-border mt-8"></div>
                                </a>
                                <div class="setting-deatils theme-change mt-8">
                                    <div class="setting-icon ">
                                        <div class="dz-icon theme-btn bg-pink light">
                                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g></g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M11.57,2.3c2.38-0.59,4.68-0.27,6.63,0.64c0.35,0.16,0.41,0.64,0.1,0.86C15.7,5.6,14,8.6,14,12s1.7,6.4,4.3,8.2 c0.32,0.22,0.26,0.7-0.09,0.86C16.93,21.66,15.5,22,14,22c-6.05,0-10.85-5.38-9.87-11.6C4.74,6.48,7.72,3.24,11.57,2.3z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <svg class="light" xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <rect fill="none" height="24" width="24"></rect>
                                                <path
                                                    d="M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0 c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2 c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1 C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06 c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41 l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41 c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36 c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="icon-name ">
                                        <p>Dark Mode</p>
                                    </div>
                                    <div class="icon-back-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                width="24" height="24">
                                                <rect width="24" height="24" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_330_777)">
                                                <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="setting-border mt-8"></div>
                                <a href="invite-friend.html" class="mt-8">
                                    <div class="setting-deatils">
                                        <div class="setting-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_330_795" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_795)">
                                                    <path
                                                        d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M3 21V19C3 17.9391 3.42143 16.9217 4.17157 16.1716C4.92172 15.4214 5.93913 15 7 15H11C12.0609 15 13.0783 15.4214 13.8284 16.1716C14.5786 16.9217 15 17.9391 15 19V21"
                                                        stroke="#FF4C3B" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M16 11H22M19 8V14" stroke="#FF4C3B" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-name">
                                            <p>Invite Friends</p>
                                        </div>
                                        <div class="icon-back-btn">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                    width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_330_777)">
                                                    <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="setting-border mt-8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-overlay"></div>
        <div class="bottom-tabbar">
            <div class="bottom-tabbar-full">
                <nav>
                    <a href="homescreen-1.html" class="active">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_330_3221" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
                                <rect width="18" height="18" fill="white" />
                            </mask>
                            <g mask="url(#mask0_330_3221)">
                                <path
                                    d="M6.09451 10.5C6.42755 11.7939 7.60212 12.75 9 12.75C10.3979 12.75 11.5725 11.7939 11.9055 10.5M8.26327 2.073L3.17654 6.02934C2.83652 6.29381 2.6665 6.42604 2.54402 6.59164C2.43552 6.73833 2.3547 6.90359 2.30552 7.07929C2.25 7.27764 2.25 7.49302 2.25 7.92379V13.35C2.25 14.1901 2.25 14.6101 2.41349 14.931C2.5573 15.2132 2.78677 15.4427 3.06901 15.5865C3.38988 15.75 3.80992 15.75 4.65 15.75H13.35C14.1901 15.75 14.6101 15.75 14.931 15.5865C15.2132 15.4427 15.4427 15.2132 15.5865 14.931C15.75 14.6101 15.75 14.1901 15.75 13.35V7.92379C15.75 7.49302 15.75 7.27764 15.6945 7.07929C15.6453 6.90359 15.5645 6.73833 15.456 6.59164C15.3335 6.42604 15.1635 6.29381 14.8235 6.02934L9.73673 2.073C9.47324 1.86806 9.34149 1.76559 9.19601 1.7262C9.06765 1.69145 8.93235 1.69145 8.80399 1.7262C8.65851 1.76559 8.52677 1.86806 8.26327 2.073Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span>
                            Home
                        </span>
                    </a>
                    <a href="search-screen.html">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_330_5977" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
                                <rect width="18" height="18" fill="white" />
                            </mask>
                            <g mask="url(#mask0_330_5977)">
                                <path
                                    d="M7.5 12.75C10.3995 12.75 12.75 10.3995 12.75 7.5C12.75 4.60051 10.3995 2.25 7.5 2.25C4.60051 2.25 2.25 4.60051 2.25 7.5C2.25 10.3995 4.60051 12.75 7.5 12.75Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15.75 15.75L11.25 11.25" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span>
                            Search
                        </span>
                    </a>
                    <a href="empty-cart.html">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_330_5464" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
                                <rect width="18" height="18" fill="white" />
                            </mask>
                            <g mask="url(#mask0_330_5464)">
                                <path
                                    d="M3 14C3 14.3978 3.15804 14.7794 3.43934 15.0607C3.72064 15.342 4.10218 15.5 4.5 15.5C4.89782 15.5 5.27936 15.342 5.56066 15.0607C5.84196 14.7794 6 14.3978 6 14C6 13.6022 5.84196 13.2206 5.56066 12.9393C5.27936 12.658 4.89782 12.5 4.5 12.5C4.10218 12.5 3.72064 12.658 3.43934 12.9393C3.15804 13.2206 3 13.6022 3 14Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M11.25 14C11.25 14.3978 11.408 14.7794 11.6893 15.0607C11.9706 15.342 12.3522 15.5 12.75 15.5C13.1478 15.5 13.5294 15.342 13.8107 15.0607C14.092 14.7794 14.25 14.3978 14.25 14C14.25 13.6022 14.092 13.2206 13.8107 12.9393C13.5294 12.658 13.1478 12.5 12.75 12.5C12.3522 12.5 11.9706 12.658 11.6893 12.9393C11.408 13.2206 11.25 13.6022 11.25 14Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.75 12.5H4.5V2H3" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M4.5 3.5L15 4.25L14.25 9.5H4.5" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span>
                            Cart(2)
                        </span>
                    </a>
                    <a href="wishlist-screen.html">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_330_5965" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
                                <rect width="18" height="18" fill="white" />
                            </mask>
                            <g mask="url(#mask0_330_5965)">
                                <path
                                    d="M14.3847 9.43755L8.75975 15.0086L3.13475 9.43755C2.76373 9.07652 2.47148 8.64257 2.27641 8.16303C2.08134 7.6835 1.98767 7.16877 2.0013 6.65126C2.01493 6.13374 2.13557 5.62466 2.35562 5.15606C2.57566 4.68746 2.89035 4.2695 3.27986 3.92849C3.66938 3.58748 4.12528 3.33082 4.61886 3.17467C5.11244 3.01851 5.633 2.96624 6.14777 3.02116C6.66255 3.07607 7.16037 3.23697 7.6099 3.49374C8.05944 3.7505 8.45093 4.09756 8.75975 4.51306C9.0699 4.10057 9.46185 3.75655 9.91107 3.50251C10.3603 3.24847 10.8571 3.08989 11.3704 3.0367C11.8838 2.9835 12.4026 3.03683 12.8943 3.19335C13.3861 3.34987 13.8403 3.60621 14.2284 3.94633C14.6166 4.28645 14.9303 4.70302 15.1501 5.16997C15.3698 5.63693 15.4908 6.14422 15.5055 6.66009C15.5202 7.17596 15.4282 7.6893 15.2353 8.16799C15.0425 8.64669 14.7529 9.08042 14.3847 9.44206"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span>
                            Wishlist
                        </span>
                    </a>
                    <a href="account-screen.html">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_330_5961" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="18" height="18">
                                <rect width="18" height="18" fill="white" />
                            </mask>
                            <g mask="url(#mask0_330_5961)">
                                <path
                                    d="M15 15.75C15 14.7033 15 14.18 14.8708 13.7541C14.58 12.7953 13.8297 12.045 12.8709 11.7542C12.445 11.625 11.9217 11.625 10.875 11.625H7.125C6.07833 11.625 5.55499 11.625 5.12914 11.7542C4.17034 12.045 3.42003 12.7953 3.12918 13.7541C3 14.18 3 14.7033 3 15.75M12.375 5.625C12.375 7.48896 10.864 9 9 9C7.13604 9 5.625 7.48896 5.625 5.625C5.625 3.76104 7.13604 2.25 9 2.25C10.864 2.25 12.375 3.76104 12.375 5.625Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <span>
                            Account
                        </span>
                    </a>
                </nav>
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom addtohome-popup theme-offcanvas" tabindex="-1" id="offcanvas"
            aria-modal="true" role="dialog">
            <button type="button" class="btn-close text-reset popup-close-home" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            <div class="offcanvas-body small">
                <img class="logo-popup" src="assets/images/splash-screen/logo.png" alt="logo">
                <p class="title font-w600">Zoop Store</p>
                <p>Install Zoop Retail Store Multipurpose eCommerce Mobile App Template to your home screen for easy
                    access, just like any other app</p>
                <a href="javascript:void(0)" class="theme-btn install-app btn-inline addhome-btn" id="installApp">Add to
                    Home Screen</a>
            </div>
        </div>
    </div>
    @include('lib.includes.script-footer')
</body>
</html>
