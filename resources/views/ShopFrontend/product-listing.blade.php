@extends('ShopFrontend.Layouts.layout')

@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li><a href="#">Product </a></li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">

                    <!-- images categori -->
                    <div class="category-view">
                        <div class="owl-carousel " data-nav="true" data-dots="false" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            <div class="item ">
                                <a href=""><img src="images/media/category-images1.jpg" alt="category-images"></a>
                            </div>
                            <div class="item ">
                                <a href=""><img src="images/media/category-images2.jpg" alt="category-images"></a>
                            </div>
                        </div>
                    </div><!-- images categori -->

                    <!-- link categori -->
                    <ul class="category-links">
                        <li class="current-cate"><a href="">All Products</a></li>
                        <li><a href="">Tops</a></li>
                        <li><a href="">Dresses</a></li>
                        <li><a href="">Bags & Shoes</a></li>
                        <li><a href="">Scaves</a></li>
                        <li><a href="">Pants</a></li>
                        <li><a href="">Blouses</a></li>
                    </ul><!-- link categori -->

                    <!-- Toolbar -->
                    {{-- <div class=" toolbar-products toolbar-top">

                        <div class="btn-filter-products">
                            <span>Filter</span>
                        </div>

                        <h1 class="cate-title">Products</h1>

                        <div class="modes">
                            <strong class="label">View as:</strong>
                            <strong class="modes-mode active mode-grid" title="Grid">
                                <span>grid</span>
                            </strong>
                            <a href="Category2.html" title="List" class="modes-mode mode-list">
                                <span>list</span>
                            </a>
                        </div><!-- View as -->

                        <div class="toolbar-option">

                            <div class="toolbar-sorter ">
                                <label class="label">Short by:</label>
                                <select class="sorter-options form-control">
                                    <option selected="selected" value="position">Position</option>
                                    <option value="name">Name</option>
                                    <option value="price">Price</option>
                                </select>
                                <a href="" class="sorter-action"></a>
                            </div><!-- Short by -->

                            <div class="toolbar-limiter">
                                <label class="label">
                                    <span>Show:</span>
                                </label>

                                <select class="limiter-options form-control">
                                    <option selected="selected" value="9">Show 18</option>
                                    <option value="15">Show 15</option>
                                    <option value="30">Show 30</option>
                                </select>

                            </div><!-- Show per page -->

                        </div>

                        <ul class="pagination">
                            <li class="action">
                                <a href="#">
                                    <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                </a>
                            </li>

                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li class="action">
                                <a href="#">
                                    <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>

                    </div> --}}

                    <div>
                        <form>
                            <input type="text" name="searchVal" fdprocessedid="3rmjh">
                            <button fdprocessedid="l2xg94" id="getSearchVal">Search</button>
                        </form>
                    </div>

                    <div class="catalog-view_op1">
                        <div class=" toolbar-products toolbar-top">

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>



                            <h1 class="cate-title">Products</h1>


                            <div class="modes">
                                <strong class="label">View as:</strong>
                                <strong class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->



                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label class="label">Short by:</label>
                                    <select class="sorter-options form-control">
                                        <option selected="selected" value="position">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label class="label">
                                        <span>Show:</span>
                                    </label>

                                    <select class="limiter-options form-control">
                                        <option selected="selected" value="9">Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>

                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- Toolbar -->

                    <!-- List Products -->
                    <div class="products  products-grid">
                        <ol class="product-items row product-listing" id="product-listing">

                        </ol><!-- list product -->
                    </div> <!-- List Products -->

                    <!-- Toolbar -->
                    <div class="catalog-view_op1">
                        <div class=" toolbar-products toolbar-bottom">

                            <div class="modes">
                                <strong class="label">View as:</strong>
                                <strong class="modes-mode active mode-grid" title="Grid">
                                    <span>grid</span>
                                </strong>
                                <a href="Category2.html" title="List" class="modes-mode mode-list">
                                    <span>list</span>
                                </a>
                            </div><!-- View as -->

                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label class="label">Short by:</label>
                                    <select class="sorter-options form-control" fdprocessedid="snu5j">
                                        <option selected="selected" value="position">Product name</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label class="label">
                                        <span>Show:</span>
                                    </label>

                                    <select class="limiter-options form-control" fdprocessedid="xex3ho">
                                        <option selected="selected" value="9"> Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>

                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">
                                <li class="action">
                                    <a href="#" data-page="0"><span><i aria-hidden="true"
                                                class="fa fa-angle-left"></i></span></a>
                                </li>

                                <li class="active">
                                    <a href="#" data-page="1">1</a>
                                </li>

                                <li class="">
                                    <a href="#" data-page="2">2</a>
                                </li>

                                <li class="">
                                    <a href="#" data-page="3">3</a>
                                </li>

                                <li class="">
                                    <a href="#" data-page="4">4</a>
                                </li>

                                <li class="action">
                                    <a href="#" data-page="2"><span><i aria-hidden="true"
                                                class="fa fa-angle-right"></i></span></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- Toolbar -->

                </div><!-- Main Content -->

                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9 col-sidebar">
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($cat1 as $row)
                                <div class="item">
                                    <img src="{{ asset($row->icon) }}" alt="{{ $row->alt_text }}" class="category">
                                    <input type="checkbox" class="category-checkbox" value="{{ $row->id }}"
                                        style="display:none;">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($cat2 as $row)
                                <div class="item">
                                    <img src="{{ asset($row->icon) }}" alt="{{ $row->alt_text }}" class="category">
                                    <input type="checkbox" class="category-checkbox" value="{{ $row->id }}"
                                        style="display:none;">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel owl-loaded owl-drag" data-nav="false" data-dots="true" data-margin="0"
                            data-items="1" data-autoplaytimeout="700" data-autoplay="true" data-loop="true">
                            @foreach ($cat3 as $row)
                                <div class="item">
                                    <img src="{{ asset($row->icon) }}" alt="{{ $row->alt_text }}" class="category">
                                    <input type="checkbox" class="category-checkbox" value="{{ $row->id }}"
                                        style="display:none;">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- block filter events -->
                    <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                        <div class="block-title">
                            <strong>FILTER SELECTION</strong>
                        </div>
                        <div class="block-content">
                            <!-- filter price -->
                            <div class="filter-options-item filter-options-price">
                                <div class="filter-options-title">Price</div>
                                <div class="filter-options-content">
                                    {{-- <div class="slider-range">

                                        <div id="slider-range"></div>

                                        <div class="action">
                                            <span class="price">
                                                <span>Range:</span>
                                                $<span id="amount-left"></span>
                                                -
                                                $<span id="amount-right"></span>
                                            </span>
                                        </div>
                                    </div> --}}
                                    <ol class="items">
                                        <li class="item">
                                            <label>
                                                <input type="checkbox" class="price-checkbox" data-min="20"
                                                    data-max="50">
                                                <span>$20 - $50 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox" class="price-checkbox" data-min="50"
                                                    data-max="100">
                                                <span>$50 - $100 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox" class="price-checkbox" data-min="100"
                                                    data-max="250">
                                                <span>$100 - $250 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- filter price -->

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">BRAND</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        @foreach ($brands as $brand)
                                            <li class="item">
                                                <label>
                                                    <input type="checkbox" class="brand-checkbox"
                                                        @if ($brand->title == $selected_brand) checked @endif
                                                        value="{{ $brand->id }}">
                                                    <span>{{ $brand->title }} <span
                                                            class="count">({{ $brand->products_count }})</span></span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">Product Condition</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" class="product_condition" value="New"><span>New
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" class="product_condition" value="Old"><span>Old
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" class="product_condition"
                                                    value="Other"><span>Other </span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">Sale</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" id="sale" value="true"><span>Sale </span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">Stock Condition</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" class="stock_condition" value="Low"><span>Low
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" class="stock_condition" value="In Stock"><span>In
                                                    Stock </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox" class="stock_condition"
                                                    value="Out of Stock"><span>Out of Stock </span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->
                        </div>
                    </div><!-- Filter -->

                </div>
                {{-- <div class="col-md-3 col-md-pull-9  col-sidebar">

                    <!-- Block  bestseller products-->
                    <div class="block-sidebar block-sidebar-categorie">
                        <div class="block-title">
                            <strong>PRODUCT TYPES</strong>
                        </div>
                        <div class="block-content">
                            <ul class="items">
                                <li class="parent">
                                    <a href="">Dress</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li>
                                            <a href="">subcategory 1</a>

                                        </li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Bags</a>
                                </li>
                                <li class="parent">
                                    <a href="">Cost &amp; Jackets</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Beauty</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Jewellery</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Nightwear</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="">Jumpers &amp; Cardigans</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                        <li><a href="">subcategory 1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Block  bestseller products-->

                    <!-- block filter products -->
                    <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                        <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
                        <div class="block-title">
                            <strong>FILTER SELECTION</strong>
                        </div>
                        <div class="block-content">

                            <!-- Filter Item  categori-->
                            <div class="filter-options-item filter-options-categori">
                                <div class="filter-options-title">Categories</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Tops <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Network & Computer <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Batteries & Chargers <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Dresses <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Knitted <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pants <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Best selling <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Headphone & Headset <span
                                                        class="count">(20)</span></span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item  categori-->

                            <!-- filter price -->
                            <div class="filter-options-item filter-options-price">
                                <div class="filter-options-title">Price</div>
                                <div class="filter-options-content">
                                    <div class="slider-range">

                                        <div id="slider-range"></div>

                                        <div class="action">
                                            <span class="price">
                                                <span>Range:</span>
                                                $<span id="amount-left"></span>
                                                -
                                                $<span id="amount-right"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>$20 - $50 <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>$50 - $100 <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>$100 - $250 <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>

                                    </ol>
                                </div>
                            </div><!-- filter price -->

                            <!-- filter brad-->
                            <div class="filter-options-item filter-options-brand">
                                <div class="filter-options-title">BRAND</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Channelo <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Mamypokon <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pamperson <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pradano <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>Pumano <span class="count">(20)</span>
                                                </span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>AME <span class="count">(20)</span> </span>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- filter color-->
                            <div class="filter-options-item filter-options-color">
                                <div class="filter-options-title">COLOR</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #fca53c;"></span>
                                                    <span class="count">(30)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #6b5a5c;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #000000;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #3063f2;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>

                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #f9334a;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>

                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #964b00;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #faebd7;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #e84c3d;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>
                                        <li class="item">
                                            <label>
                                                <input type="checkbox">
                                                <span>
                                                    <span class="img" style="background-color: #fccacd;"></span>
                                                    <span class="count">(20)</span>
                                                </span>

                                            </label>
                                        </li>

                                    </ol>
                                </div>
                            </div><!-- Filter Item -->

                            <!-- Filter Item  size-->
                            <div class="filter-options-item filter-options-size">
                                <div class="filter-options-title">SIZE</div>
                                <div class="filter-options-content">
                                    <ol class="items">
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>L <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>32 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>36 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>37 <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>X <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>XXL <span class="count">(20)</span></span>
                                            </label>
                                        </li>
                                        <li class="item ">
                                            <label>
                                                <input type="checkbox"><span>m <span class="count">(20)</span></span>
                                            </label>
                                        </li>

                                    </ol>
                                </div>
                            </div><!-- Filter Item  size-->

                        </div>
                    </div><!-- Filter -->

                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0" data-items='1'
                            data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                            <div class="item item1">
                                <img src="images/media/banner-sidebar1.jpg" alt="images">
                            </div>
                            <div class="item item2">
                                <img src="images/media/banner-sidebar1.jpg" alt="images">
                            </div>
                            <div class="item item3">
                                <img src="images/media/banner-sidebar1.jpg" alt="images">
                            </div>
                        </div>
                    </div><!-- block slide top -->

                    <!-- Block  bestseller products-->
                    <div class="block-sidebar block-sidebar-products">
                        <div class="block-title">
                            <strong>SPECIAL PRODUCTS</strong>
                        </div>
                        <div class="block-content">
                            <div class="product-item product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href=""><img alt="product name"
                                                src="images/media/floor5-1.jpg"></a>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="">{{ $products[0]->title }}</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">${{ $products[0]->new_price }}</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div title="70%" class="rating-result">
                                                        <span style="width:70%">
                                                            <span><span>70</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="" class="btn all-products">All products <i aria-hidden="true"
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Block  bestseller products-->

                    <!-- Block  tags-->
                    <div class="block-sidebar block-sidebar-tags">
                        <div class="block-title">
                            <strong>product tags</strong>
                        </div>
                        <div class="block-content">
                            <ul>
                                <li><a href="" class="lv2">actual</a></li>
                                <li><a href="" class="lv1">adorable</a></li>
                                <li><a href="" class="lv3">amaze</a></li>
                                <li><a href="" class="lv5">change</a></li>
                                <li><a href="" class="lv2">consider</a></li>
                                <li><a href="" class="lv1">delivery</a></li>
                                <li><a href="" class="lv1">Top</a></li>
                                <li><a href="" class="lv4">flexib</a></li>
                                <li><a href="" class="lv1">phenomenon </a></li>
                            </ul>
                        </div>
                    </div><!-- Block  tags-->

                    <!-- block slide top -->
                    <div class="block-sidebar block-sidebar-testimonials">
                        <div class="block-title">
                            <strong>Testimonials</strong>
                        </div>
                        <div class="block-content">
                            <div class="owl-carousel" data-nav="false" data-dots="true" data-margin="0" data-items='1'
                                data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
                                <div class="item ">
                                    <strong class="name">Roverto & Maria</strong>
                                    <div class="avata">
                                        <img src="images/media/avata.jpg" alt="avata">
                                    </div>
                                    <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </div>
                                <div class="item ">
                                    <strong class="name">Roverto & Maria</strong>
                                    <div class="avata">
                                        <img src="images/media/avata.jpg" alt="avata">
                                    </div>
                                    <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </div>
                                <div class="item ">
                                    <strong class="name">Roverto & Maria</strong>
                                    <div class="avata">
                                        <img src="images/media/avata.jpg" alt="avata">
                                    </div>
                                    <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- block slide top -->


                </div>
                <!-- Sidebar --> --}}
            </div>
        </div>

        @include('partials.brand_showcase')

        {{-- <!-- block  showcase-->
        <div class="block-showcase block-showcase-opt1 block-brand-tabs">
            <div class="container">
                <div class="block-title">
                    <span class="title">brand showcase</span>
                </div>
                <div class="block-content">
                    <ul class="nav-brand owl-carousel" data-nav="true" data-loop="true" data-dots="false"
                        data-margin="1"
                        data-responsive='{
                                "0":{"items":3},
                                "380":{"items":4},
                                "480":{"items":5},
                                "640":{"items":7},
                                "992":{"items":8}
                            }'>
                        <li class="active" data-tab="brand1-1">
                            <img src="https://carnivalguide.co/travel/images/digicelt.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-2">
                            <img src="https://carnivalguide.co/travel/images/flowt.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-3">
                            <img src="https://carnivalguide.co/travel/images/clarksct.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-4">
                            <img src="https://carnivalguide.co/travel/images/caribt.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-5">
                            <img src="https://carnivalguide.co/travel/images/hugginst.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-6">
                            <img src="https://carnivalguide.co/travel/images/glenlgt.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-7">
                            <img src="https://carnivalguide.co/travel/images/intert.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-8">
                            <img src="https://carnivalguide.co/travel/images/cococolat.jpg" alt="img">
                        </li>
                        <li data-tab="brand1-9">
                            <img src="https://carnivalguide.co/travel/images/clarksct.jpg" alt="img">
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active  " role="tabpanel" id="brand1-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/digicel.jpg" alt="logo"
                                            class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 1)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product image"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " role="tabpanel" id="brand1-2">
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/flowt2.jpg" alt="logo"
                                            class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 2)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " role="tabpanel" id="brand1-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 3)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " role="tabpanel" id="brand1-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 4)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " role="tabpanel" id="brand1-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 5)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="brand1-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 6)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " role="tabpanel" id="brand1-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 7)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " role="tabpanel" id="brand1-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 8)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  " role="tabpanel" id="brand1-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-title">
                                        <img src="https://carnivalguide.co/travel/images/media/index1/logo-showcase.jpg"
                                            alt="logo" class="logo-showcase">
                                        <div class="des">
                                            Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish
                                            women's bags. Discover our spring collection.
                                        </div>
                                        <div class="actions">
                                            <a href="" class="btn btn-default">shop this brand <i
                                                    aria-hidden="true" class="fa fa-caret-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-product">
                                        <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0"
                                            data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                            @foreach ($products->chunk(2) as $chunk)
                                                <div class="item">
                                                    @foreach ($chunk as $product)
                                                        @if ($product->brand_id == 9)
                                                            <div class="product-item  product-item-opt-1 ">
                                                                <div class="product-item-info">
                                                                    <div class="product-item-photo">
                                                                        <a class="product-item-img" href="{{ route('get.products.detail', $product->slug) }}">
                                                                            <img alt="product name"
                                                                                src="{{ $product->image_url }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-item-detail">
                                                                        <strong class="product-item-name">
                                                                            <a href="{{ route('get.products.detail', $product->slug) }}">{{ $product->name }}</a>
                                                                        </strong>
                                                                        <div class="clearfix">
                                                                            <div class="product-item-price">
                                                                                <span
                                                                                    class="price">${{ $product->price }}</span>
                                                                                @if ($product->old_price)
                                                                                    <span
                                                                                        class="old-price">${{ $product->old_price }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div class="product-reviews-summary">
                                                                                <div class="rating-summary">
                                                                                    <div title="{{ $product->rating }}%"
                                                                                        class="rating-result">
                                                                                        <span
                                                                                            style="width:{{ $product->rating }}%">
                                                                                            <span><span>{{ $product->rating }}</span>%
                                                                                                of <span>100</span></span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- block  showcase--> --}}

    </main><!-- end MAIN -->
@endsection

@section('script')
    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            function fetchProducts(page = 1, selectedCategories = [], priceRanges = [],
                selectedBrands = [], productCondition = [], stockCondition = [], sale = null, getSearchVal = '') {
                $('#product-listing').html('');

                // Apply skeleton loading structure
                for (let i = 0; i < 18; i++) { // Assuming 9 products per page
                    var skeletonHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="skeleton-item">
                                <div class="skeleton-content">
                                    <div class="skeleton-line" style="width: 80%;"></div>
                                    <div class="skeleton-line" style="width: 60%;"></div>
                                    <div class="skeleton-line" style="width: 70%;"></div>
                                </div>
                            </div>
                        </li>
                    `;
                    $('#product-listing').append(skeletonHtml);
                }
                $.ajax({
                    url: "{{ route('get.products.home') }}",
                    type: "GET",
                    data: {
                        page: page,
                        categories: selectedCategories,
                        // product_type: productType,
                        price_ranges: priceRanges,
                        brands: selectedBrands,
                        product_condition: productCondition,
                        stock_condition: stockCondition,
                        sale: sale,
                        getSearchVal: getSearchVal
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty();
                        $('#product-listing').removeClass('blur-effect');
                        $.each(response.data, function(index, product) {
                            var percentageDiscount = Math.round(((product.old_price - product
                                .new_price) / product.old_price) * 100);
                            var image = null;
                            console.log(product.image);
                            if (product.image != null && product.image != '') {
                                image = "{{ asset('productImage/') }}/" + product.image;
                            } else {
                                image =
                                    'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                            }
                            var productHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="{{ route('get.products.detail', '') }}/${product.slug}" class="product-item-img"><img style="width:200px;height:200px;" src="${image}"
                                                alt="${product.title}"></a>
                                        <div class="product-item-actions">
                                            <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                            <a href="#" class="btn btn-compare"><span>compare</span></a>
                                            <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                        </div>
                                        <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                        <span class="product-item-label label-price">${percentageDiscount}% <span>off</span></span>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="{{ route('get.products.detail', '') }}/${product.slug}">${product.title}</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$${product.new_price}</span>
                                                <span class="old-price">$${product.old_price}</span>
                                            </div>
                                            <div class="product-reviews-summary">
                                                <div class="rating-summary">
                                                    <div class="rating-result" title="${percentageDiscount}%">
                                                        <span style="width:${percentageDiscount}%">
                                                            <span><span>${percentageDiscount}</span>% of <span>100</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    `;
                            $('#product-listing').append(productHtml);
                        });

                        // Display pagination links
                        $('.pagination').empty();
                        pre = 0;
                        nxt = 0;
                        pre = response.current_page - 1;
                        var previousPageHtml = `
                            <li class="action">
                                <a href="#" data-page="${pre}"><span><i aria-hidden="true" class="fa fa-angle-left"></i></span></a>
                            </li>
                        `;
                        $('.pagination').append(previousPageHtml);
                        for (let i = 1; i <= response.last_page; i++) {
                            var activeClass = i === response.current_page ? 'active' : '';
                            var paginationHtml = `
                            <li class="${activeClass}">
                                <a href="#" data-page="${i}">${i}</a>
                            </li>
                        `;
                            $('.pagination').append(paginationHtml);
                        }
                        nxt = response.current_page + 1;
                        var nextPageHtml = `
                            <li class="action">
                                <a href="#" data-page="${nxt}"><span><i aria-hidden="true" class="fa fa-angle-right"></i></span></a>
                            </li>
                        `;
                        $('.pagination').append(nextPageHtml);

                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            function getSelectedCategories() {
                let selectedCategories = [];
                $('.category-checkbox:checked').each(function() {
                    selectedCategories.push($(this).val());
                });
                return selectedCategories;
            }

            function getSelectedPriceRanges() {
                let priceRanges = [];
                $('.price-checkbox:checked').each(function() {
                    let min = $(this).data('min');
                    let max = $(this).data('max');
                    priceRanges.push({
                        min: min,
                        max: max
                    });
                });
                return priceRanges;
            }

            function getSelectedBrands() {
                let selectedBrands = [];
                $('.brand-checkbox:checked').each(function() {
                    selectedBrands.push($(this).val());
                });
                return selectedBrands;
            }

            function getSelectedProductCondition() {
                let productCondition = [];
                $('.product_condition:checked').each(function() {
                    productCondition.push($(this).val());
                });
                return productCondition;
            }

            function getSelectedStockCondition() {
                let stockCondition = [];
                $('.stock_condition:checked').each(function() {
                    stockCondition.push($(this).val());
                });
                return stockCondition;
            }

            function getSaleStatus() {
                return $('#sale').is(':checked') ? 1 : null;
            }

            // Category filter
            $(document).on('click', '.category', function() {
                $(this).siblings('.category-checkbox').prop('checked', function(i, value) {
                    return !value;
                });

                let selectedCategories = getSelectedCategories();
                // let productType = $('.product_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            });

            // Price filter
            $(document).on('click', '.price-checkbox', function() {
                let selectedCategories = getSelectedCategories();
                // let productType = $('.product_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            });

            // Brand filter
            $(document).on('click', '.brand-checkbox', function() {
                let selectedCategories = getSelectedCategories();
                // let productType = $('.product_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            });

            // Event listeners for filter options
            $(document).on('click', '.product_condition', function() {
                let selectedCategories = getSelectedCategories();
                // let productType = $('.product_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            });

            $(document).on('click', '.stock_condition', function() {
                let selectedCategories = getSelectedCategories();
                // let productType = $('.product_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            });

            $(document).on('click', '#sale', function() {
                let selectedCategories = getSelectedCategories();
                // let productType = $('.product_type').is(':checked') ? 1 : null;
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            });

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                fetchProducts(page);
            });

            var checkBrand = '{{ $selected_brand }}';

            if (checkBrand != '') {
                let selectedCategories = getSelectedCategories();
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();
                fetchProducts(1, selectedCategories, priceRanges, selectedBrands,
                    productCondition, stockCondition, sale);
            } else {
                // Initial fetch
                fetchProducts();
            }

            $('#getSearchVal').on('click', function(e) {
                e.preventDefault(); // Prevent form submission

                let getSearchVal = $('input[name="searchVal"]').val(); // Get search input value

                let selectedCategories = getSelectedCategories();
                let priceRanges = getSelectedPriceRanges();
                let selectedBrands = getSelectedBrands();
                let productCondition = getSelectedProductCondition();
                let stockCondition = getSelectedStockCondition();
                let sale = getSaleStatus();

                fetchProducts(1, selectedCategories, priceRanges, selectedBrands, productCondition,
                    stockCondition, sale, getSearchVal);
            });

        });
    </script>

    <script>
        (function($) {

            "use strict";

            $(document).ready(function() {

                /*  [ Filter by price ]

                - - - - - - - - - - - - - - - - - - - - */

                $('#slider-range').slider({

                    range: true,

                    min: 0,

                    max: 500,

                    values: [0, 300],

                    slide: function(event, ui) {

                        $('#amount-left').text(ui.values[0]);
                        $('#amount-right').text(ui.values[1]);

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            });

        })(jQuery);
    </script>
@endsection
