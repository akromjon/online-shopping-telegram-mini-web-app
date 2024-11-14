<!DOCTYPE html>
<html lang="en">

<head>


    @include('components.head')
</head>

<body id="homepage">
    <!-- BEGIN PRELOADING -->
    <div class="preloading">
        <div class="wrap-preload">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!-- END PRELOADING -->
    <!-- HEADER -->
    <header id="header">
        <div class="nav-wrapper container">
            <div class="header-logo">
                <a href="product-list.html#" class="nav-logo"><i class="fab fa-envira"></i> GroMart</a>
            </div>
            <div class="header-menu-button">
                <a href="product-list.html#" data-activates="nav-mobile-category" class="button-collapse"
                    id="button-collapse-category">
                    <div class="cst-btn-menu">
                        <i class="fas fa-align-right"></i>
                    </div>
                </a>
            </div>
            <div class="header-icon-menu">
                <a href="product-list.html#" data-activates="nav-mobile-account" class="button-collapse"
                    id="button-collapse-account"><i class="far fa-user-circle"></i></a>
            </div>
            <div class="header-icon-menu cart-item-wrap">
                <a href="shopping-cart.html">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-item">4</span>
                </a>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- SIDE NAV-->
    <nav>
        <!-- SIDENAV CATEGORY-->
        <ul id="nav-mobile-category" class="side-nav">
            <li class="sidenav-logo">
                <i class="fa fa-leaf" aria-hidden="true"></i> GroMart
            </li>
            <li>
                <div class="search-wrapper ">
                    <input id="search"><i class="material-icons">search</i>
                    <div class="search-results"></div>
                </div>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i> Healthy food</a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-plus"></i>Vegetables <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i
                                            class="fas fa-angle-right"></i>Cabbage</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i
                                            class="fas fa-angle-right"></i>Corn</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i
                                            class="fas fa-angle-right"></i>Potato</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i
                                            class="fas fa-angle-right"></i>Carrot</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Fruits</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Breads</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Berries</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Herbs</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Meat & seafood</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Natural & organic</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Snacks</a>
            </li>
            <li>
                <a href="product-list.html"><i class="fas fa-plus"></i>Milk products</a>
            </li>
        </ul>
        <!-- END SIDENAV CATEGORY-->
        <!-- SIDENAV ACCOUNT-->
        <ul id="nav-mobile-account" class="side-nav">
            <li class="profile">
                <div class="li-profile-info">
                    <img src="/assets/img/profile.jpg" alt="profile">
                    <h2>Jane Doe</h2>
                    <div class="emailprofile">Janedoe@maildomain.com</div>
                    <div class="balance">
                        Balance : <span>$1200</span>
                    </div>
                </div>
                <div class="bg-profile-li" style="background-image: url(img/bg-profile.jpg);">
                </div>
            </li>
            <li>
                <a class="waves-effect waves-blue" href="homepage.html"><i class="fas fa-home"></i>Home</a>
            </li>
            <li>
                <a href="wish-list.html"><i class="fas fa-heart"></i>Wish list</a>
            </li>
            <li>
                <a href="gallery.html"><i class="fas fa-camera-retro"></i>Gallery</a>
            </li>
            <li>
                <a href="setting.html"><i class="fas fa-cog"></i>Setting</a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-columns"></i>Pages <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="homepage.html"><i
                                            class="fas fa-angle-right"></i>Home</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="setting.html"><i
                                            class="fas fa-angle-right"></i>Setting</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="404.html"><i
                                            class="fas fa-angle-right"></i>404</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="login.html"><i
                                            class="fas fa-angle-right"></i>Sign In</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="signup.html"><i
                                            class="fas fa-angle-right"></i>Sign Up</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="single-page.html"><i
                                            class="fas fa-angle-right"></i>Single page</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="gallery.html"><i
                                            class="fas fa-angle-right"></i>Gallery</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i
                                            class="fas fa-angle-right"></i>Product List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="wish-list.html"><i
                                            class="fas fa-angle-right"></i>Wish List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-page.html"><i
                                            class="fas fa-angle-right"></i>Product Detail</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="shopping-cart.html"><i
                                            class="fas fa-angle-right"></i>Shopping Cart</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="checkout.html"><i
                                            class="fas fa-angle-right"></i>Checkout</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="contact.html"><i
                                            class="fas fa-angle-right"></i>Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="contact.html"><i class="fas fa-envelope"></i>Contact Us</a>
            </li>
            <li>
                <a href="login.html"><i class="fas fa-sign-in-alt"></i>Sign in</a>
            </li>
            <li>
                <a href="404.html"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
            </li>
        </ul>
        <!-- END SIDENAV ACCOUNT-->
    </nav>
    <!-- END SIDENAV-->
    <!-- CONTENT -->
    <div id="page-content">
        <div class="section product-item">
            <div class="container">
                <div class="row row-title">
                    <div class="col s12">
                        <div class="section-title">
                            <span class="theme-secondary-color">OUR</span> PRODUCTS
                        </div>
                    </div>
                </div>
                <div class="row row-no-margin">
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/broccoli.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Broccoli</a></h5>
                                    <div class="item-info">Broccoli - 2~3 pcs</div>
                                    <div class="price">
                                        $5 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item">Only available 4 item</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/cabbage_PNG8821.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Cabbage</a></h5>
                                    <div class="item-info">Cabbage 1 pcs</div>
                                    <div class="price">
                                        $6 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item">Only available 4 item</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/carrot_PNG4978.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Carrot</a></h5>
                                    <div class="item-info">Fresh Carrot</div>
                                    <div class="price">$5</div>
                                    <div class="stock-item">Ready stock</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/corn_PNG5284.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Corn</a></h5>
                                    <div class="item-info">Corn - 2~5 pcs</div>
                                    <div class="price">
                                        $7 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item"></div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/pineapple_PNG2759.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Pinneapple</a></h5>
                                    <div class="item-info">Fruit ~ Pinneapple</div>
                                    <div class="price">
                                        $10 <span></span>
                                    </div>
                                    <div class="stock-item"></div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/blackberry_PNG46.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Blackberry</a></h5>
                                    <div class="item-info">Fresh Blackberry</div>
                                    <div class="price">
                                        $10 <span></span>
                                    </div>
                                    <div class="stock-item"></div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/potato_PNG7093.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Potato</a></h5>
                                    <div class="item-info">Potato - 2~5 pcs</div>
                                    <div class="price">
                                        $7 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item">Available</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/garlic_PNG12788.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Garlic</a></h5>
                                    <div class="item-info">Garlic</div>
                                    <div class="price">
                                        $7 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item">Available</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/cucumber.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Cucumber</a></h5>
                                    <div class="item-info">Cucumber 1 pcs</div>
                                    <div class="price">
                                        $7 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item"></div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/lemon_PNG25270.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Lemon</a></h5>
                                    <div class="item-info">Potato - 2~5 pcs</div>
                                    <div class="price">
                                        $8 <span>/1Kg</span>
                                    </div>
                                    <div class="stock-item">Available</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/mango_PNG9170.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Mango</a></h5>
                                    <div class="item-info">Fresh Mango</div>
                                    <div class="price">
                                        $4 <span></span>
                                    </div>
                                    <div class="stock-item"></div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/tomato_PNG12588.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Fresh Tomato</a></h5>
                                    <div class="item-info">Tomato - 2~5 pcs</div>
                                    <div class="price">
                                        $78 <span>/500 gram</span>
                                    </div>
                                    <div class="stock-item"></div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/pumpkin_PNG9379.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Pumpkin</a></h5>
                                    <div class="item-info">Pumpkin - 2~5 pcs</div>
                                    <div class="price">
                                        $6 <span>/1kg</span>
                                    </div>
                                    <div class="stock-item">Available</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                    <!-- Product item-->
                    <div>
                        <div class="col s6 m4 l3 col-produc">
                            <div class="box-product">
                                <div class="bp-top">
                                    <div class="product-list-img">
                                        <div class="pli-one">
                                            <div class="pli-two">
                                                <img src="/assets/img/kiwi_PNG4035.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <h5><a href="product-list.html">Kiwi Fruit</a></h5>
                                    <div class="item-info">Kiwi - 2~5 pcs</div>
                                    <div class="price">
                                        $7 <span></span>
                                    </div>
                                    <div class="stock-item">Available</div>
                                </div>
                                <div class="bp-bottom">
                                    <button class="btn button-add-cart">BUY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product item-->
                </div>
            </div>
        </div>
        <!-- PAGINATION -->
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul class="pagination">
                        <li class="disabled">
                            <a href="product-list.html#!"><i class="material-icons">chevron_left</i></a>
                        </li>
                        <li class="active">
                            <a href="product-list.html#!">1</a>
                        </li>
                        <li class="waves-effect">
                            <a href="product-list.html#!">2</a>
                        </li>
                        <li class="waves-effect">
                            <a href="product-list.html#!">3</a>
                        </li>
                        <li class="waves-effect">
                            <a href="product-list.html#!">4</a>
                        </li>
                        <li class="waves-effect">
                            <a href="product-list.html#!">5</a>
                        </li>
                        <li class="waves-effect">
                            <a href="product-list.html#!"><i class="material-icons">chevron_right</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGINATION -->
        <!-- SUBSCRIBE -->
        <div id="subscribe-page" class="section subscribe">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">SUBSCRIBE</div>
                        <p class="center">
                            Get Your Groceries delivered from local stores
                        <p>
                        <div class="mail-subscribe-box">
                            <input class="form-control" name="user-email" placeholder="Enter email address" value=""
                                type="email">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-subscribe" style="background-image: url(img/bg-profile.jpg);">
            </div>
        </div>
        <!-- END SUBSCRIBE -->
    </div>
    <!-- END CONTENT-->
    <!-- FOOTER  -->
    <footer id="footer">
        <div class="footer-info">
            <div class="container">
                <div class="col s12 center">
                    <i class="fas fa-map-marker-alt"></i> Karangwaru St, Yogyakarta, Indonesia<br>
                    <i class="fas fa-phone-square"></i> (+62)-000-123456 <br>
                    <i class="fas fa-envelope"></i> halo@gromarttheme.com
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-footer-icon">
                <div class="col s12">
                    <div class="footer-sosmed-icon ">
                        <div class="wrap-circle-sosmed ">
                            <a href="product-list.html#">
                                <div class="circle-sosmed">
                                    <i class="fab fa-instagram"></i>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-circle-sosmed ">
                            <a href="product-list.html#">
                                <div class="circle-sosmed">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-circle-sosmed ">
                            <a href="product-list.html#">
                                <div class="circle-sosmed">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-circle-sosmed ">
                            <a href="product-list.html#">
                                <div class="circle-sosmed">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row copyright">
                2018 <span>GroMart</span>, All rights reserved.
            </div>
        </div>
    </footer>
    @include('components.script')
</body>

</html>
