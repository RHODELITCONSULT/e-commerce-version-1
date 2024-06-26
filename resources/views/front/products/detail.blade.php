@extends('front.layout.layout')
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;

    }
</style>

<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!--====== Product Breadcrumb ======-->
                    <div class="pd-breadcrumb u-s-m-b-30">
                        <ul class="pd-breadcrumb__list">
                            <?php echo $categoryDetails['breadcrumbs']; ?>
                        </ul>
                    </div>
                    <!--====== End - Product Breadcrumb ======-->


                    <!--====== Product Detail Zoom ======-->
                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                @foreach($productDetails['images'] as $image)
                                <div class="pd-o-img-wrap" data-src="{{ asset('front/images/products/large/'.$image['image']) }}">
                                    <img class="u-img-fluid" src="{{ asset('front/images/products/large/'.$image['image']) }}" data-zoom-image="{{ asset('front/images/products/large/'.$image['image']) }}" alt="">
                                </div>
                                @endforeach
                            </div>

                            <span class="pd-text">Click for larger zoom</span>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    @foreach($productDetails['images'] as $image)
                                    <div>
                                        <img class="u-img-fluid" src="{{ asset('front/images/products/small/'.$image['image']) }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Product Detail Zoom ======-->
                </div>
                <div class="col-lg-7">

                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>
                            <div class="print-error-msg"></div>
                            <div class="print-success-msg"></div>
                            <span class="pd-detail__name">{{ $productDetails['product_name'] }}</span>
                        </div>
                        <div>
                            <div class="pd-detail__inline getAttributePrice">
                                <span class="pd-detail__price">GHC{{$productDetails['final_price']}}</span>
                                @if($productDetails['discount_type']!="")
                                <span class="pd-detail__discount">({{$productDetails['product_discount']}}% OFF)</span><del class="pd-detail__del">GHC{{$productDetails['product_price']}}</del>
                                @endif
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                    <span class="pd-detail__review u-s-m-l-4">

                                        <a data-click-scroll="#view-review">25 Reviews</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__stock">200 in stock</span>

                                    <span class="pd-detail__left">Only 2 left</span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__preview-desc">{{$productDetails['description']}}</span>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">
                                    <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>
                                        <a href="signin.html">Add to Wishlist</a>
                                    </span>
                                </div>
                            </div>

                            <div class="u-s-m-b-15">
                                <ul class="pd-social-list">
                                    <li>

                                        <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>

                                        <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="u-s-m-b-15">
                                <form name="addToCart" id="addToCart" class="pd-detail__form" action="javascript:;">
                                    <input type="hidden" name="product_id" value="{{ $productDetails['id'] }}">
                                    @if(count($groupProducts)>0)
                                    <div class="u-s-m-b-15">
                                        <span class="pd-detail__label u-s-m-b-8">Color:</span>
                                        <div class="pd-detail__color">
                                            @foreach($groupProducts as $product)
                                            <a href="{{ url('product/'.$product['id'])}}">
                                                <div class="color__radio">
                                                    <label class="color__radio-label" for="folly" style="background-color: {{$product['product_color']}}"></label>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Size:</span>
                                        <div class="pd-detail__size">
                                            @foreach($productDetails['attributes'] as $attribute)
                                            <div class="size__radio">
                                                <input type="radio" id="{{$attribute['size']}}" name="size" value="{{$attribute['size']}}" product-id="{{ $productDetails['id'] }}" class="getPrice" required>
                                                <label class="size__radio-label" for="{{$attribute['size']}}">{{$attribute['size']}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">

                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus fas fa-minus"></span>

                                                <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000" name="qty">

                                                <span class="input-counter__plus fas fa-plus"></span>
                                            </div>
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15">
                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Buyer Protection.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Full Refund if you don't receive your order.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as described.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>

        <!--====== Product Detail Tab ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pd-tab">
                            <div class="u-s-m-b-30">
                                <ul class="nav pd-tab__list">
                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#pd-desc">DESCRIPTION</a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link" data-toggle="tab" href="#pd-tag">VIDEO</a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link active" id="view-review" data-toggle="tab" href="#pd-rev">REVIEWS
                                            <span>(25)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">

                                <!--====== Tab 1 ======-->
                                <div class="tab-pane" id="pd-desc">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                            {{ $productDetails['description'] }}
                                        </div>
                                        <div class="u-s-m-b-30"><iframe src="https://www.youtube.com/embed/qKqSBm07KZk" allowfullscreen></iframe></div>
                                        <!-- <div class="u-s-m-b-30">
                                        <ul>
                                            <li><i class="fas fa-check u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div> -->
                                        <div class="u-s-m-b-15">
                                            <h4>PRODUCT INFORMATION</h4>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-table gl-scroll">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Brand</td>
                                                            <td>{{ $productDetails['brand']['brand_name']}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Code</td>
                                                            <td>{{ $productDetails['product_code']}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Color</td>
                                                            <td>{{ $productDetails['product_color']}}</td>
                                                        </tr>
                                                        @if(!empty($productDetails['fabric']))
                                                        <tr>
                                                            <td>Fabric</td>
                                                            <td>{{ $productDetails['fabric'] }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(!empty($productDetails['sleeve']))
                                                        <tr>
                                                            <td>Sleeve</td>
                                                            <td>{{ $productDetails['sleeve'] }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(!empty($productDetails['fit']))
                                                        <tr>
                                                            <td>Fit</td>
                                                            <td>{{ $productDetails['fit'] }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(!empty($productDetails['neck']))
                                                        <tr>
                                                            <td>Neck</td>
                                                            <td>{{ $productDetails['neck'] }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(!empty($productDetails['occasion']))
                                                        <tr>
                                                            <td>Occasion</td>
                                                            <td>{{ $productDetails['occasion'] }}</td>
                                                        </tr>
                                                        @endif
                                                        @if(!empty($productDetails['product_weight']))
                                                        <tr>
                                                            <td>Shipping Weight (Grams)</td>
                                                            <td>{{ $productDetails['product_weight'] }}</td>
                                                        </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!--====== End - Tab 1 ======-->


                                <!--====== Tab 2 ======-->
                                <div class="tab-pane" id="pd-tag">
                                    <div class="pd-tab__tag">
                                        <h2 class="u-s-m-b-15">PRODUCT VIDEO</h2>
                                        <div class="u-s-m-b-15">
                                            @if($productDetails['product_video'])
                                            <video width="400" controls>
                                                <source src="{{ url('front/videos/products'.$productDetails['product_video'])}}" type="video/mp4">
                                                Your browser does not support HTML video.
                                            </video>
                                            @else
                                            Product Video does not exists
                                            @endif
                                        </div>
                                        <span class="gl-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                    </div>
                                </div>
                                <!--====== End - Tab 2 ======-->


                                <!--====== Tab 3 ======-->
                                <div class="tab-pane fade show active" id="pd-rev">
                                    <div class="pd-tab__rev">
                                        <div class="u-s-m-b-30">

                                        </div>
                                        <div class="u-s-m-b-30">
                                            <form class="pd-tab__rev-f1">
                                                <div class="rev-f1__group">
                                                    <div class="u-s-m-b-15">

                                                    </div>
                                                    <!-- <div class="u-s-m-b-15">

                                                    <label for="sort-review"></label><select class="select-box select-box--primary-style" id="sort-review">
                                                        <option selected>Sort by: Best Rating</option>
                                                        <option>Sort by: Worst Rating</option>
                                                    </select></div>
                                            </div> -->



                                            </form>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <form class="pd-tab__rev-f2" method="POST" action="{{ url('add-rating') }}" name="formRating" id="formRating">@csrf()
                                                <input type="hidden" name="product_id" value="{{ $productDetails['id'] }}">
                                                <h2 class="u-s-m-b-15">Add a Review</h2>

                                                <span class="gl-text u-s-m-b-15">Your email address will not be published. Required fields are marked *</span>
                                                <div class="u-s-m-b-30">
                                                    <div class="rev-f2__table-wrap gl-scroll">
                                                        <table class="rev-f2__table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                                        <label for="star1" title="text">1 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star1.5" name="rating" value="1.5" />
                                                                        <label for="star1.5" title="text">1.5 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                                        <label for="star2" title="text">2 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star2.5" name="rating" value="2.5" />
                                                                        <label for="star2.5" title="text">2.5 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                                        <label for="star3" title="text">3 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star3.5" name="rating" value="3.5" />
                                                                        <label for="star3.5" title="text">3.5 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                                        <label for="star4" title="text">4 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star4.5" name="rating" value="4.5" />
                                                                        <label for="star4.5" title="text">4.5 stars</label>
                                                                    </th>
                                                                    <th>
                                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                                        <label for="star5" title="text">5 stars</label>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="rev-f2__group">
                                                    <div class="u-s-m-b-15">

                                                        <label class="gl-label" for="reviewer-text">YOUR REVIEW *</label><textarea name="review" class="text-area text-area--primary-style" id="reviewer-text" placeholder="Your Review" required=""></textarea>
                                                    </div>

                                                </div>
                                                <div>

                                                    <button type="submit" class="btn btn--e-brand-shadow" type="submit">SUBMIT REVIEW</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab 3 ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Product Detail Tab ======-->
        <div class="u-s-p-b-90">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">RELATED PRODUCTS</h1>

                                <span class="section__span u-c-grey">PRODUCTS THAT YOU WILL ALSO LIKE TO BUY</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="4">
                            @foreach($relatedProducts as $product)
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">
                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ url('product/'.$product['id'])}}">
                                            @if(isset($product['images'][0]['image'])&& !empty($product['images'][0]['image']))
                                            <img class="aspect__img" src="{{ asset('front/images/products/small/'.$product['images'][0]['image']) }}" alt="">
                                            @else
                                            <img class="aspect__img" src="{{ asset('front/images/product/sitemakers-tshirt.png') }}" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <span class="product-o__category">
                                        <a href="shop-side-version-2.html">{{ $product['brand']['brand_name'] }}e</a></span>
                                    <span class="product-o__name">
                                        <a href="{{ url('product/'.$product['id'])}}">{{ $product['brand']['brand_name'] }}</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <span class="product-o__review">(20)</span>
                                    </div>
                                    <span class="product-o__price">GHC{{$product['final_price']}}
                                        @if($product['discount_type']!="")
                                        <span class="product-o__discount">GHC{{$product['product_price']}}</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
        <!--====== End - Product Detail Tab ======-->
        <div class="u-s-p-b-90">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">CUSTOMER ALSO VIEWED</h1>

                                <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="4">
                            @foreach($recentlyViewedProducts as $product)
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">
                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ url('product/'.$product['id'])}}">
                                            @if(isset($product['images'][0]['image'])&& !empty($product['images'][0]['image']))
                                            <img class="aspect__img" src="{{ asset('front/images/products/small/'.$product['images'][0]['image']) }}" alt="">
                                            @else
                                            <img class="aspect__img" src="{{ asset('front/images/product/sitemakers-tshirt.png') }}" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <span class="product-o__category">
                                        <a href="shop-side-version-2.html">{{ $product['brand']['brand_name'] }}e</a></span>
                                    <span class="product-o__name">
                                        <a href="{{ url('product/'.$product['id'])}}">{{ $product['brand']['brand_name'] }}</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <span class="product-o__review">(20)</span>
                                    </div>
                                    <span class="product-o__price">GHC{{$product['final_price']}}
                                        @if($product['discount_type']!="")
                                        <span class="product-o__discount">GHC{{$product['product_price']}}</span>
                                        @endif
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->
    @endsection