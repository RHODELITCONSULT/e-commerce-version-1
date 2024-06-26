<?php 
use App\Models\Category;
// Get Categories and their Sub Categories
$categories = Category::getCategories();
?>
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
        
    </div>
</div>
