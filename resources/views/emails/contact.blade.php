@extends('front.layout.layout')
@section('content')
<!--====== Main App ======-->
<div id="app">

    <!--====== Main Header ======-->
        <header class="header--style-1">
            <!--====== Nav 1 ======-->
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">
                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">
                        <!--====== Main Logo ======-->
                        <a class="main-logo" href="index.html">
                        <img src="images/logo/logo-1.png" alt=""></a>
                        <!--====== End - Main Logo ======-->
                        <!--====== Search Form ======-->
                        <form class="main-form">
                            <label for="main-search"></label>
                            <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search" placeholder="Search">
                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                        </form>
                        <!--====== End - Search Form ======-->
                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">
                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>
                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>
                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">
                                        <a><i class="far fa-user-circle"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>
                                                <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>
                                                <span>Account</span></a>
                                            </li>
                                            <li>
                                                <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>
                                                <span>Signup</span></a>
                                            </li>
                                            <li>
                                                <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>
                                                <span>Signin</span></a>
                                            </li>
                                            <li>
                                                <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>
                                                <span>Signout</span></a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">
                                        <a href="tel:+0900000000"><i class="fas fa-phone-volume"></i></a>
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">
                                        <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->
            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">
                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">
                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation1">
                            <!-- <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button> -->
                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>
                                <!--====== List ======-->
                                <ul class="ah-list">
                                    <li class="has-dropdown">
                                        <!-- <span class="mega-text">M</span> -->
                                        <!--====== Mega Menu ======-->
                                        <span class="js-menu-toggle"></span>
                                        <div class="mega-menu">
                                            <div class="mega-menu-wrap">
                                                <div class="mega-menu-list">
                                                    <ul>
                                                        <li class="js-active">
                                                            <a href="shop-side-version-2.html"><i class="fas fa-tv u-s-m-r-6"></i>
                                                            <span>Electronics</span></a>
                                                            <span class="js-menu-toggle js-toggle-mark"></span>
                                                        </li>
                                                        <li>
                                                            <a href="shop-side-version-2.html"><i class="fas fa-female u-s-m-r-6"></i>
                                                            <span>Women's Clothing</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="shop-side-version-2.html"><i class="fas fa-male u-s-m-r-6"></i>
                                                            <span>Men's Clothing</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><i class="fas fa-utensils u-s-m-r-6"></i>
                                                            <span>Food & Supplies</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><i class="fas fa-couch u-s-m-r-6"></i>
                                                            <span>Furniture & Decor</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><i class="fas fa-football-ball u-s-m-r-6"></i>
                                                            <span>Sports & Game</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><i class="fas fa-heartbeat u-s-m-r-6"></i>
                                                            <span>Beauty & Health</span></a>
                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--====== Electronics ======-->
                                                <div class="mega-menu-content js-active">
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">3D PRINTER & SUPPLIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">3d Printer</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">3d Printing Pen</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">3d Printing Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">3d Printer Module Board</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">HOME AUDIO & VIDEO</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">TV Boxes</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">TC Receiver & Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Display Dongle</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Home Theater System</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">MEDIA PLAYERS</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Earphones</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Mp3 Players</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Speakers & Radios</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Microphones</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">VIDEO GAME ACCESSORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Nintendo Video Games Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Sony Video Games Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Xbox Video Games Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">SECURITY & PROTECTION</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Security Cameras</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Alarm System</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Security Gadgets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">CCTV Security & Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">PHOTOGRAPHY & CAMERA</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Digital Cameras</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Sport Camera & Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Camera Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Lenses & Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">ARDUINO COMPATIBLE</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Raspberry Pi & Orange Pi</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Module Board</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Smart Robot</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Board Kits</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">DSLR Camera</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Nikon Cameras</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Canon Camera</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Sony Camera</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">DSLR Lenses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">NECESSARY ACCESSORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Flash Cards</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Memory Cards</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Flash Pins</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Compact Discs</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Electronics ======-->
                                                <!--====== Women ======-->
                                                <div class="mega-menu-content">
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">HOT CATEGORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Dresses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Blouses & Shirts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">T-shirts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Rompers</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">INTIMATES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Bras</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Brief Sets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Bustiers & Corsets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Panties</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">WEDDING & EVENTS</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Wedding Dresses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Evening Dresses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Prom Dresses</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Flower Dresses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">BOTTOMS</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Skirts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Shorts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Leggings</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Jeans</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">OUTWEAR</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Blazers</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Basics Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Trench</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Leather & Suede</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">JACKETS</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Denim Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Trucker Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Windbreaker Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Leather Jackets</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">ACCESSORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Tech Accessories</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Headwear</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Baseball Caps</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">OTHER ACCESSORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Bags</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Wallets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Watches</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Sunglasses</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Women ======-->
                                                <!--====== Men ======-->
                                                <div class="mega-menu-content">
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">HOT SALE</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">T-Shirts</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Tank Tops</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Polo</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Shirts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">OUTWEAR</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Hoodies</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Trench</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Parkas</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Sweaters</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">BOTTOMS</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Casual Pants</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Cargo Pants</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Jeans</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Shorts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">UNDERWEAR</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Boxers</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Briefs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Robes</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Socks</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">JACKETS</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Denim Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Trucker Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Windbreaker Jackets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Leather Jackets</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">SUNGLASSES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Pilot</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Wayfarer</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Square</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Round</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">ACCESSORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Eyewear Frames</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Scarves</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Hats</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Belts</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">
                                                                    <a href="shop-side-version-2.html">OTHER ACCESSORIES</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Bags</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Wallets</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Watches</a>
                                                                </li>
                                                                <li>
                                                                    <a href="shop-side-version-2.html">Tech Accessories</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">
                                                                <a class="u-d-block" href="shop-side-version-2.html">
                                                                <img class="u-img-fluid u-d-block" src="images/banners/sitemaker-slider-banner-1.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Men ======-->
                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                            </div>
                                        </div>
                                        <!--====== End - Mega Menu ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">
                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>
                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>
                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>
                                        <a href="shop-side-version-2.html">NEW ARRIVALS</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a>CLOTHING<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a href="listing.html">Men<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:118px">
                                                    <li>
                                                        <a href="listing.html">T-shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Jeans</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Shorts</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a href="listing.html">Women<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>
                                                        <a href="listing.html">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Shorts</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a href="listing.html">Kids<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:118px">
                                                    <li>
                                                        <a href="listing.html">T-shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Shorts</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li>
                                                <a href="listing.html">Dummy</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown">
                                        <a>ELECTRONICS<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a href="listing.html">Mobiles<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:118px">
                                                    <li>
                                                        <a href="listing.html">Smartphones</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Accessories</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">
                                                <a href="listing.html">Laptops<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>
                                                <!--====== Dropdown ======-->
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>
                                                        <a href="listing.html">Laptops</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="listing.html">Accessories</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown">
                                        <a>APPLIANCES<i class="fas fa-angle-down u-s-m-l-6"></i></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>
                                                <a href="listing.html">Air Conditioners</a>
                                            </li>
                                            <li>
                                                <a href="listing.html">Refrigerators</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>
                                        <a href="listing.html">FEATURED PRODUCTS</a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">
                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop" type="button"></button>
                            <span class="total-item-round">2</span>
                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">
                                <span class="ah-close">✕ Close</span>
                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li>
                                        <a href="index.html"><i class="fas fa-home u-c-brand"></i></a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>
                                        <span class="total-item-round">3</span></a>
                                        <!--====== Dropdown ======-->
                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">
                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">
                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="product-detail.html">
                                                            <img class="u-img-fluid" src="images/product/sitemakers-tshirt.png" alt=""></a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category">
                                                            <a href="shop-side-version-2.html">Brand Name</a></span>
                                                            <span class="mini-product__name">
                                                            <a href="product-detail.html">Product Name</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">₹900</span>
                                                        </div>
                                                    </div>
                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->
                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="product-detail.html">
                                                            <img class="u-img-fluid" src="images/product/sitemakers-tshirt.png" alt=""></a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category">
                                                            <a href="shop-side-version-2.html">Brand Name</a></span>
                                                            <span class="mini-product__name">
                                                            <a href="product-detail.html">Product Name</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">₹900</span>
                                                        </div>
                                                    </div>
                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->
                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">
                                                            <a class="mini-product__link" href="product-detail.html">
                                                            <img class="u-img-fluid" src="images/product/sitemakers-tshirt.png" alt=""></a>
                                                        </div>
                                                        <div class="mini-product__info-wrapper">
                                                            <span class="mini-product__category">
                                                            <a href="shop-side-version-2.html">Brand Name</a></span>
                                                            <span class="mini-product__name">
                                                            <a href="product-detail.html">Product Name</a></span>
                                                            <span class="mini-product__quantity">1 x</span>
                                                            <span class="mini-product__price">₹900</span>
                                                        </div>
                                                    </div>
                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->
                                            </div>
                                            <!--====== End - Mini Product Container ======-->
                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">
                                                    <span class="subtotal-text">SUBTOTAL</span>
                                                    <span class="subtotal-value">₹2700</span>
                                                </div>
                                                <div class="mini-action">
                                                    <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO CHECKOUT</a>
                                                    <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">VIEW CART</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->


    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">

                                    <a href="index.html">Home</a></li>
                                <li class="is-marked">

                                    <a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->



        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="contact-o u-h-100">
                                <div class="contact-o__wrap">
                                    <div class="contact-o__icon"><i class="fas fa-phone-volume"></i></div>

                                    <span class="contact-o__info-text-1">LET'S HAVE A CALL</span>

                                    <span class="contact-o__info-text-2">(+0) 900 000 000</span>

                                    <span class="contact-o__info-text-2">(+0) 900 800 700</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="contact-o u-h-100">
                                <div class="contact-o__wrap">
                                    <div class="contact-o__icon"><i class="fas fa-map-marker-alt"></i></div>

                                    <span class="contact-o__info-text-1">OUR LOCATION</span>

                                    <span class="contact-o__info-text-2">1234, TEST ADDRESS, NEW DELHI</span>

                                    <span class="contact-o__info-text-2">DELHI, INDIA</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="contact-o u-h-100">
                                <div class="contact-o__wrap">
                                    <div class="contact-o__icon"><i class="far fa-clock"></i></div>

                                    <span class="contact-o__info-text-1">WORK TIME</span>

                                    <span class="contact-o__info-text-2">5 Days a Week</span>

                                    <span class="contact-o__info-text-2">From 9 AM to 7 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->


        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-area u-h-100">
                                <div class="contact-area__heading">
                                    <h2>Get In Touch</h2>
                                </div>
                                <form class="contact-f" method="post" action="index.html">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 u-h-100">
                                            <div class="u-s-m-b-30">

                                                <label for="c-name"></label>

                                                <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-name" placeholder="Name (Required)" required></div>
                                            <div class="u-s-m-b-30">

                                                <label for="c-email"></label>

                                                <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-email" placeholder="Email (Required)" required></div>
                                            <div class="u-s-m-b-30">

                                                <label for="c-subject"></label>

                                                <input class="input-text input-text--border-radius input-text--primary-style" type="text" id="c-subject" placeholder="Subject (Required)" required></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 u-h-100">
                                            <div class="u-s-m-b-30">

                                                <label for="c-message"></label><textarea class="text-area text-area--border-radius text-area--primary-style" id="c-message" placeholder="Compose a Message (Required)" required></textarea></div>
                                        </div>
                                        <div class="col-lg-12">

                                            <button class="btn btn--e-brand-b-2" type="submit">Send Message</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->
    </div>
    <!--====== End - App Content ======-->


    <!--====== Main Footer ======-->
    <footer>
        <div class="outer-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="outer-footer__content u-s-m-b-40">
                            <span class="outer-footer__content-title">Contact Us</span>
                            <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>
                                <span>SITEMAKERS.IN</span>
                            </div>
                            <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>
                                <span>(+91) 900 000 000</span>
                            </div>
                            <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>
                                <span>contact@sitemakers.in</span>
                            </div>
                            <div class="outer-footer__social">
                                <ul>
                                    <li>
                                        <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">
                                    <span class="outer-footer__content-title">Account</span>
                                    <div class="outer-footer__list-wrap">
                                        <ul>
                                            <li>
                                                <a href="account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="orders.html">My Orders</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">My Cart</a>
                                            </li>
                                            <li>
                                                <a href="{{route("wishlists")}}">My Wishlist</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">
                                    <div class="outer-footer__list-wrap">
                                        <span class="outer-footer__content-title">Company</span>
                                        <ul>
                                            <li>
                                                <a href="about.html">About us</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact us</a>
                                            </li>
                                            <li>
                                                <a href="faq.html">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="terms-conditions.html">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="privacy-policy.html">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="outer-footer__content">
                            <span class="outer-footer__content-title">Join our Newsletter</span>
                            <form class="newsletter">
                                <div class="newsletter__group">
                                    <label for="newsletter"></label>
                                    <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">
                                    <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                                </div>
                                <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="lower-footer__content">
                            <div class="lower-footer__copyright">
                                <span>Copyright © 2023</span>
                                <a href="index.html">SiteMakers.in</a>
                                <span>All Right Reserved</span>
                            </div>
                            <div class="lower-footer__payment">
                                <ul>
                                    <li><i class="fab fa-cc-stripe"></i></li>
                                    <li><i class="fab fa-cc-paypal"></i></li>
                                    <li><i class="fab fa-cc-mastercard"></i></li>
                                    <li><i class="fab fa-cc-visa"></i></li>
                                    <li><i class="fab fa-cc-discover"></i></li>
                                    <li><i class="fab fa-cc-amex"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--====== End - Main App ======-->
@endsection
