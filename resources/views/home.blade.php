<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from zwin.io/html/stooon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 15:02:03 GMT -->
@include('playout.head')

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="https://zwin.io/html/stooon/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search Popup end -->

    <!--sidebar menu start-->
    @include('playout.sidebar')
    <!--sidebar menu end-->

    <!-- navbar start -->
    @include('playout.navbar')
    <!-- navbar end -->

    <!-- banner start -->
    @include('playout.banner')
    <!-- banner end -->

    <!-- collection banner start  -->
    <div class="collection-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/collection/1.png')}}" alt="">
                            <div class="content">
                                <h3>WOMEN</h3>
                                <h6>Collection</h6>
                                <a href="#">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/collection/2.png')}}" alt="">
                            <div class="content">
                                <h3>MEN</h3>
                                <h6>Collection</h6>
                                <a href="#">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-style-01 margin-top-20">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/collection/3.png')}}" alt="">
                            <div class="content">
                                <h3>KIDS</h3>
                                <h6>Collection</h6>
                                <a href="#">view collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection area end  -->

    <!-- arrivals area start  -->
    <div class="arrivals-area margin-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>NEW ARRIVALS</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="product-style-01 margin-top-40">
                        <div class="thumb">
                            <div class="thumb-slider">
                                <a href="single-product.html"><img src="{{asset('clients/assets/img/arrival/1.png')}}" alt=""></a>
                                <a href="single-product.html"><img src="{{asset('clients/assets/img/arrival/1.png')}}" alt=""></a>
                            </div>
                            <ul class="cart-action">
                                <li><a href="#"><i class="icon-add-to-cat"></i></a></li>
                                <li><a href="#"><i class="icon-heart"></i></a></li>
                            </ul>
                        </div>
                        <div class="content text-center">
                            <div class="content-hover d-flex justify-content-between">
                                <ul class="product-color">
                                    <li><a href="#"><span class="blue"></span></a></li>
                                    <li><a href="#"><span class="red"></span></a></li>
                                    <li><a href="#"><span class="pest"></span></a></li>
                                    <li><a href="#"><span class="yellow"></span></a></li>
                                    <li><a href="#"><span class="ass"></span></a></li>
                                </ul>
                                <ul class="product-size">
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                </ul>
                            </div>
                            <div class="content-bottom">
                                <span class="brand">BRAND:GEEK</span>
                                <ul class="justify-content-center margin-bottom-20">
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                                <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                <div class="content-price d-flex align-self-center justify-content-center">
                                    <span class="new-price">$450.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="btn-wrapper text-center margin-top-55">
                        <a href="#" class="btn btn-more">View more +</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- arrivals area end  -->

    <!-- sale area start  -->
    <div class="sale-area padding-top-80">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <div class="sales-content" style="background: url('{{asset('clients/assets/img/others/sales.png')}}" no-repeat center center/cover;">
                        <h2>SPRING SALE</h2>
                        <h6>30% off on selected items</h6>
                        <div class="btn-wrapper">
                            <a href="#" class="btn btn-sales">SHOP THE SALE <i class="icon-arrow-buttom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sale area end  -->

    <!-- tranding area start  -->
    <div class="tranding-area margin-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>TRANDING NOW</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills tranding-tab">
                        <li class="mt-3"><a data-toggle="pill" href="#one" class="active">BEST SELLER</a></li>
                        <li class="mt-3"><a data-toggle="pill" href="#two">TOP RATE</a></li>
                        <li class="mt-3"><a data-toggle="pill" href="#three">TOP SALE</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade in show active" id="one">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/1.png')}}" alt="">
                                    <span class="out">SOLD OUT</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/2.png')}}" alt="">
                                    <span class="sale">SALE 13%</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">FPlaid Cotton Oxford Shirt</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/3.png')}}" alt="">
                                    <span class="sale">SALE 13%</span>
                                    <span class="new margin-top-35">NEW</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/4.png')}}" alt="">
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/5.png')}}" alt="">
                                    <span class="new">NEW</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Round neck sweater</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/6.png')}}" alt="">
                                    <span class="sale">SALE! 13%</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                    <div class="product-countdown clockdiv" data-countdown="2021/02/02">
                                    </div>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="two">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/4.png')}}" alt="">
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/5.png')}}" alt="">
                                    <span class="new">NEW</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Round neck sweater</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/6.png')}}" alt="">
                                    <span class="sale">SALE! 13%</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/1.png')}}" alt="">
                                    <span class="out">SOLD OUT</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/2.png')}}" alt="">
                                    <span class="sale">SALE 13%</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">FPlaid Cotton Oxford Shirt</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/3.png')}}" alt="">
                                    <span class="sale">SALE 13%</span>
                                    <span class="new margin-top-35">NEW</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="three">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/6.png')}}" alt="">
                                    <span class="sale">SALE! 13%</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/3.png')}}" alt="">
                                    <span class="sale">SALE 13%</span>
                                    <span class="new margin-top-35">NEW</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Two-Tone Sleeveless Dress</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/1.png')}}" alt="">
                                    <span class="out">SOLD OUT</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Faxon Canvas Low-Top Sneaker</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/2.png')}}" alt="">
                                    <span class="sale">SALE 13%</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">FPlaid Cotton Oxford Shirt</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/4.png')}}" alt="">
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Viscose-Cashmere Scarf</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-style-02 margin-top-40">
                                <div class="thumb">
                                    <img src="{{asset('clients/assets/img/tranding/5.png')}}" alt="">
                                    <span class="new">NEW</span>
                                    <ul class="cart-action-02">
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                        <li><a href="#"><i class="icon-quick-view"></i></a></li>
                                    </ul>
                                </div>
                                <div class="content text-left">
                                    <span class="brand">BRAND:GEEK</span>
                                    <ul class="justify-content-start margin-bottom-10">
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h6 class="title"><a href="#">Round neck sweater</a></h6>
                                    <div class="d-flex position-relative">
                                        <div class="content-hover-cart"><a href="#"><i class="icon-add-to-cat"></i> Add to cart</a></div>
                                        <div class="content-cart"><a href="#"><i class="icon-add-to-cat"></i></a></div>
                                        <div class="content-price d-flex flex-column align-self-center">
                                            <span class="old-price">$400.00</span>
                                            <span class="new-price">$450.00</span>
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
    <!-- tranding area end  -->

    <!-- collection section start  -->
    <div class="collection-section padding-top-70 padding-bottom-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center margin-bottom-40">
                        <h3>COLLECTION</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="collection-slider">
                        <div class="collection-item">
                            <div class="thumb">
                                <img src="{{asset('clients/assets/img/collection/4.png')}}" alt="">
                                <div class="thumb-content">
                                    <h2>FASHION CLOTHING</h2>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-white">SHOP NOW <i class="icon-arrow-buttom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-item">
                            <div class="thumb">
                                <img src="{{asset('clients/assets/img/collection/5.png')}}" alt="">
                                <div class="thumb-content">
                                    <h2>ACCESSORIES</h2>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-white">SHOP NOW <i class="icon-arrow-buttom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-item">
                            <div class="thumb">
                                <img src="{{asset('clients/assets/img/collection/4.png')}}" alt="">
                                <div class="thumb-content">
                                    <h2>FASHION CLOTHING</h2>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-white">SHOP NOW <i class="icon-arrow-buttom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-item">
                            <div class="thumb">
                                <img src="{{asset('clients/assets/img/collection/5.png')}}" alt="">
                                <div class="thumb-content">
                                    <h2>ACCESSORIES</h2>
                                    <div class="btn-wrapper">
                                        <a href="#" class="btn btn-white">SHOP NOW <i class="icon-arrow-buttom"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- collection section end  -->

    <!-- beauty area start  -->
    <div class="beauty-area padding-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#">
                        <div class="beauty-content align-items-center d-flex">
                            <div class="beauty-left">
                                <h2>BEAUTY awaits within</h2>
                            </div>
                            <div class="beauty-right">
                                <h2>Hats</h2>
                                <h4>get up to 20% off</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- beauty area end  -->

    <!-- article area start  -->
    <div class="article-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center margin-bottom-40">
                        <h3>LATEST ARTICLE</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="article-style-01">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/blog/1.png')}}" alt="">
                            <span class="tag">MODAL</span>
                        </div>
                        <div class="content">
                            <span class="date">June 24, 2020</span>
                            <h3><a href="#">Never putting your Cocktail down to leave</a></h3>
                            <p>It reopened this year following a refurb which aims to cement its place a surfer’s paradise. It now boasts two.</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="article-style-01">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/blog/2.png')}}" alt="">
                            <span class="tag">LIFESTYLE</span>
                        </div>
                        <div class="content">
                            <span class="date">June 24, 2020</span>
                            <h3><a href="#">7 Things You Can’t Wear After Labor Day Read</a></h3>
                            <p>Typography is the work of typesetters, compositors, typographers, graphic designers, art directors, manga</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="article-style-01">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/blog/3.png')}}" alt="">
                            <span class="tag">FASHION TRENDS</span>
                        </div>
                        <div class="content">
                            <span class="date">June 24, 2020</span>
                            <h3><a href="#">Never putting your Cocktail down to leave</a></h3>
                            <p>It reopened this year following a refurb which aims to cement its place a surfer’s paradise. It now boasts two.</p>
                            <div class="btn-wrapper">
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- article area end  -->

    <!-- brand-area start -->
    <div class="brand-area padding-top-30 padding-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand1.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand2.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand3.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand4.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand5.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand6.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand1.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand2.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand3.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand4.png')}}" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="{{asset('clients/assets/img/brand/brand5.png')}}" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

    <!-- contact area start  -->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-content text-center padding-top-80 padding-bottom-80 bg-image">
                        <h2>Keep Connected</h2>
                        <h6>Get updates by subscribe our weekly newsletter</h6>
                        <form>
                            <div class="form-row align-items-center justify-content-center">
                              <div class="col-10 col-sm-6">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email-subscribe"></i></div>
                                  </div>
                                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter Address">
                                  <div class="subscribe-text"> <a href="#">subscribe</a></div>
                                </div>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end  -->

    <!-- delivery area start  -->
    <div class="delivery-area padding-top-80">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-delivery text-center">
                        <i class="icon-delivery-car"></i>
                        <h6>FREE SHIPPING, RETURN</h6>
                        <p>Free Shipping On All US Orders</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-delivery text-center">
                        <i class="icon-money-back"></i>
                        <h6>MONEY BACK GUARANTEE</h6>
                        <p>30 Days Money Back Guarantee</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-delivery text-center">
                        <i class="icon-phone-support"></i>
                        <h6>1-800-333-44-55</h6>
                        <p>24/7 Days Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delivery area end  -->

    <!-- instagram start -->
    <div class="instagram-area margin-top-75">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="instagram-title margin-bottom-40">
                        <h4><span>@ <a href="#">FOLLOW</a></span> US ON INSTAGRAM</h4>
                        <h6>shop our instagram</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="instagram-slider">
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/instagram/1.png')}}" alt="">
                        </div>
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/instagram/2.png')}}" alt="">
                        </div>
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/instagram/3.png')}}" alt="">
                        </div>
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/instagram/4.png')}}" alt="">
                        </div>
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/instagram/5.png')}}" alt="">
                        </div>
                        <div class="thumb">
                            <img src="{{asset('clients/assets/img/instagram/6.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- instagram end -->

    <!-- footer area start -->
    <footer class="footer-area footer-style-1 padding-top-70 margin-top-70">
        <div class="footer-top padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Clearance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">OUR POLICY</h4>
                            <ul>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Shipping & Delivery</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget contact-widget">
                            <h4 class="widget-title">GET IN TOUCH</h4>
                            <ul class="contact_info_list">
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="icon-home-foother"></i>
                                    </div>
                                    <div class="details">
                                        <span>Davis Patrick<br>P.O. Box 147 2546 Sociosqu Rd. <br>Bethlehem Utah 02913</span>
                                    </div>
                                </li>
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="icon-email-subscribe"></i>
                                    </div>
                                    <div class="details">
                                        support@example.com
                                    </div>
                                </li>
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="icon-call-footer"></i>
                                    </div>
                                    <div class="details">
                                        <a href="tel:+496170961709">(939) 353-1107, (302) 259-2375</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="widget widget_nav_menu">
                            <h4 class="widget-title">FOLLOW US</h4>
                            <ul>
                                <li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                                <li><a href="#"><i class="icon-skype"></i> Twitter</a></li>
                                <li><a href="#"><i class="icon-instagram"></i> Instagram</a></li>
                                <li><a href="#"><i class="icon-pinterest"></i> Pinterest</a></li>
                                <li><a href="#"><i class="icon-youtube"></i> Youtube</a></li>
                                <li><a href="#"><i class="icon-skype"></i> Skype</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p>© Stoon 2020. Powered with <i class="fa fa-heart"></i> by <a href="http://zwin.io/" target="_blanc">Zwin</a>.</p>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="#"><img src="{{asset('clients/assets/img/payment/1.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('clients/assets/img/payment/2.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('clients/assets/img/payment/3.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('clients/assets/img/payment/4.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('clients/assets/img/payment/5.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('clients/assets/img/payment/6.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
    @include('playout.js')
    <!-- all plugins here -->
    
</body>

<!-- Mirrored from zwin.io/html/stooon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 15:02:03 GMT -->
</html>