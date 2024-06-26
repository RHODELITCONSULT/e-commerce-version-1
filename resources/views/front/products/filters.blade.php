<?php 
use App\Models\ProductsFilter; 
use App\Models\Category;
use App\Models\Rating;
// Get Categories and their Sub Categories
$categories = Category::getCategories();
$url = Route::getFacadeRoot()->current()->uri;
 $categoryDetails = Category::categoryDetails($url);
 // dd($categoryDetails['categoryDetails']['parentcategory']['category_name']);
?>

<style>
*{
    margin: 0;
    padding: 0;
}
.rating__check{
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rating__check:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rating__check:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rating__check:not(:checked) > label:before {
    content: '★ ';
}
.rating__check > input:checked ~ label {
    color: #ffc700;    
}
.rating__check:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rating__check > input:checked + label:hover,
.rating__check > input:checked + label:hover ~ label,
.rating__check > input:checked ~ label:hover,
.rating__check > input:checked ~ label:hover ~ label,
.rating__check > label:hover ~ input:checked ~ label {
    color: #c59b08;

}
</style>

<div class="shop-w-master">
    <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

        <span>FILTERS</span></h1>
    <div class="shop-w-master__sidebar">
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">CATEGORY</h1>

                    <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="s-category">
                    <ul class="shop-w__category-list gl-scroll">
                         @foreach($categories as $category)
                        <li class="has-list">
                            <a href="#">{{$category['category_name']}}</a>
                            <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                            @if(count($category['subcategories'])) 
                            <ul style="display:block">
                                 @foreach($category['subcategories'] as $subcategory)
                                <li class="has-list">
                                    <a @if(isset($categoryDetails['categoryDetails']['parentcategory']['category_name'])&&$categoryDetails['categoryDetails']['parentcategory']['category_name']==$subcategory['category_name']) style="color: #ff4500;" @elseif(isset($categoryDetails['categoryDetails']['category_name'])&&$categoryDetails['categoryDetails']['category_name']==$subcategory['category_name']) style="color: #ff4500;" @endif href="
                                    {{ url($subcategory['url']) }}">{{$subcategory['category_name']}}</a>
                                    <span class="js-shop-category-span fas @if(count($subcategory['subcategories'])) fa-plus @endif u-s-m-l-6"></span>
                                    @if(count($subcategory['subcategories'])) 
                                    <ul>
                                        @foreach($subcategory['subcategories'] as $subsubcategory)
                                        <li>
                                            <a @if(isset($categoryDetails['categoryDetails']['parentcategory']['category_name'])&&$categoryDetails['categoryDetails']['parentcategory']['category_name']==$subsubcategory['category_name']) style="color: #ff4500;" @elseif(isset($categoryDetails['categoryDetails']['category_name'])&&$categoryDetails['categoryDetails']['category_name']==$subsubcategory['category_name']) style="color: #ff4500;" @endif href="{{ url($subsubcategory['url']) }}">{{$subsubcategory['category_name']}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">RATING</h1>

                    <span class="fas fa-minus shop-w__toggle" data-target="#s-rating" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="rating">
                    <ul class="shop-w__list gl-scroll">
                        <li>
                            <div class="rating__check">

                                <input type="checkbox">
                                <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                    <span><label for="star5" title="tex" value="5" name="rating__check">5 stars</label></span>(20)</div>
                            </div>
                        </li>
                        <li>
                            <div class="rating__check">

                                <input type="checkbox">
                                <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                    <span><label for="star5" title="tex" value="4" name="rating__check">4 stars</label></span>(20)</div>
                            </div>
                        </li>
                        <li>
                            <div class="rating__check">

                                <input type="checkbox">
                                <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                    <span><label for="star3" title="tex" value="3" name="rating__check">3 stars</label></span>(20)</div>
                            </div>
                        </li>
                        <li>
                            <div class="rating__check">

                                <input type="checkbox">
                                <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                   <span><label for="star2" title="tex" value="2" name="rating__check">2 stars</label></span>(2)</div>
                            </div>
                         </li>
                        <li>
                            <div class="rating__check">

                                <input type="checkbox">
                                <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                 <span><label for="star1" title="tex" value="1" name="rating__check">1 stars</label></span>(2)</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">SIZE</h1>

                    <span class="fas fa-minus shop-w__toggle" data-target="#s-size" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="s-size">
                    <?php $getSizes = ProductsFilter::getSizes($categoryDetails['catIds']); ?>
                    <ul class="shop-w__list gl-scroll">
                        @foreach($getSizes as $key => $size)
                        <?php
                            if(isset($_GET['size'])&&!empty($_GET['size'])){
                                $sizes = explode('~',$_GET['size']);
                                if(!empty($sizes)&&in_array($size, $sizes)){
                                    $sizechecked = "checked";
                                }else{
                                    $sizechecked = "";
                                }
                            }else{
                                $sizechecked = "";
                            }
                        ?>
                        <li>
                            <!--====== Check Box ======-->
                            <div class="check-box">
                                <input type="checkbox" id="size{{$key}}" name="size" value="{{$size}}" class="filterAjax" {{$sizechecked}}>
                                <div class="check-box__state check-box__state--primary">
                                    <label class="check-box__label" for="size{{$key}}">{{$size}}</label>
                                </div>
                            </div>
                            <!--====== End - Check Box ======-->
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">BRAND</h1>

                    <span class="fas fa-minus shop-w__toggle" data-target="#s-brand" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="s-brand">
                    <?php $getBrands = ProductsFilter::getBrands($categoryDetails['catIds']); ?>
                    <ul class="shop-w__list gl-scroll">
                        @foreach($getBrands as $key => $brand)
                        <?php
                            if(isset($_GET['brand'])&&!empty($_GET['brand'])){
                                $brands = explode('~',$_GET['brand']);
                                if(!empty($brand)&&in_array($brand['id'], $brands)){
                                    $brandchecked = "checked";
                                }else{
                                    $brandchecked = "";
                                }
                            }else{
                                $brandchecked = "";
                            }
                        ?>
                        <li>
                            <!--====== Check Box ======-->
                            <div class="check-box">
                                <input type="checkbox" id="brand{{$key}}" name="brand" value="{{$brand['id']}}" class="filterAjax" {{$brandchecked}}>
                                <div class="check-box__state check-box__state--primary">
                                    <label class="check-box__label" for="brand{{$key}}">{{$brand['brand_name']}}</label>
                                </div>
                            </div>
                            <!--====== End - Check Box ======-->
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">PRICE</h1>

                    <span class="fas fa-minus shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="s-price">
                    <form class="shop-w__form-p">
                    <?php $getPrices =  array('0-1000','1001-2000','2001-5000','5001-10000','10001-100000') ?>
                    <ul class="shop-w__list gl-scroll">
                        @foreach($getPrices as $key => $price)
                        <?php
                            if(isset($_GET['price'])&&!empty($_GET['price'])){
                                $prices = explode('~',$_GET['price']);
                                if(!empty($price)&&in_array($price, $prices)){
                                    $pricechecked = "checked";
                                }else{
                                    $pricechecked = "";
                                }
                            }else{
                                $pricechecked = "";
                            }
                        ?>
                        <li>
                            <!--====== Check Box ======-->
                            <div class="check-box">
                                <input type="checkbox" id="price{{$key}}" name="price" value="{{$price}}" class="filterAjax" {{$pricechecked}}>
                                <div class="check-box__state check-box__state--primary">
                                    <label class="check-box__label" for="price{{$key}}">{{$price}}</label>
                                </div>
                            </div>
                            <!--====== End - Check Box ======-->
                        </li>
                        @endforeach
                    </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">COLOR</h1>
                    <span class="fas fa-minus shop-w__toggle" data-target="#s-color" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="s-color">
                    <?php $getColors = ProductsFilter::getColors($categoryDetails['catIds']);
                    ?>
                    <ul class="shop-w__list gl-scroll">
                        @foreach($getColors as $key => $color)
                        <?php
                            if(isset($_GET['color'])&&!empty($_GET['color'])){
                                $colors = explode('~',$_GET['color']);
                                if(!empty($color)&&in_array($color, $colors)){
                                    $colorchecked = "checked";
                                }else{
                                    $colorchecked = "";
                                }
                            }else{
                                $colorchecked = "";
                            }
                        ?>
                        <li>
                            <div class="color__check">
                                <input type="checkbox" id="color{{$key}}" name="color" value="{{$color}}" class="filterAjax" {{$colorchecked}}>
                                <label class="color__check-label" for="color{{$key}}" style="background-color: {{$color}}" title="{{$color}}"></label></div>{{$color}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <?php $getDynamicFilters = ProductsFilter::getDynamicFilters($categoryDetails['catIds']); 
        ?>
        @foreach($getDynamicFilters as $key => $filter)
        <div class="u-s-m-b-30">
            <div class="shop-w shop-w--style">
                <div class="shop-w__intro-wrap">
                    <h1 class="shop-w__h">{{ucwords($filter)}}</h1>

                    <span class="fas fa-minus shop-w__toggle" data-target="#s-filter{{$key}}" data-toggle="collapse"></span>
                </div>
                <div class="shop-w__wrap collapse show" id="s-filter{{$key}}">
                    <ul class="shop-w__list gl-scroll">
                        <?php $filterValues = ProductsFilter::seletedFilters($filter,$categoryDetails['catIds']); 
                        // dd($filterValues);
                        ?>  
                        @foreach($filterValues as $fkey => $filterValue)
                        @php $checkFilter = "" @endphp
                        @if(isset($_GET[$filter]))
                            @php $explodeFilters = explode('~',$_GET[$filter]) @endphp
                            @if(in_array($filterValue,$explodeFilters))
                                @php $checkFilter = "checked" @endphp
                            @endif
                        @endif
                        <li>

                            <!--====== Check Box ======-->
                            <div class="check-box">

                                <input type="checkbox" id="filter{{$fkey}}" name="{{$filter}}" value="{{$filterValue}}" class="filterAjax" {{$checkFilter}}>
                                <div class="check-box__state check-box__state--primary">

                                    <label class="check-box__label" for="filter{{$fkey}}">{{$filterValue}}</label></div>
                            </div>
                            <!--====== End - Check Box ======-->
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
