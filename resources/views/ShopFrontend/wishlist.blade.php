@extends('ShopFrontend.Layouts.layout')

@section('title')
    Wishlist
@endsection

@section('body_classes')
    catalog-category-view catalog-view_op1 page-wishlist
@endsection
@section('main')
        <!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li><a href="#">My account    </a></li>
                    <li class="active">My wishlist</li>
                </ol><!-- Block  Breadcrumb-->

                <div class="row">

                    <!-- Main Content -->
                    <div class="col-md-9 col-md-push-3  col-main">
                        <h2 class="page-heading">
                            <span class="page-heading-title2">My wishlist</span>
                        </h2>

                        <div class="box-border box-wishlist">
                            <h2>New wishlist</h2>
                            <label >Name</label>
                            <input type="text" class="form-control input">
                            <button class="button">Save</button>
                        </div>

                        <table class="table table-bordered table-wishlist">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Viewed</th>
                                    <th>Created</th>
                                    <th>Derect link</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>My wishlist</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>2015-06-18</td>
                                    <td>View</td>
                                    <td class="text-center"><a href="#"><i class="fa fa-close"></i></a></td>
                                </tr>
                            </tbody>
                        </table>

                        <ul class="row list-wishlist">
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist1.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist2.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist3.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist4.png')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <button class="button button-sm">Save</button>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist5.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist6.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist7.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-img">
                                    <a href="#"><img alt="Product" src="{{asset('shopAssets/images/media/detail/wishlist8.jpg')}}"></a>
                                </div>
                                <h5 class="product-name">
                                    <a href="#">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>
                                </h5>
                                <div class="qty">
                                    <label>Quantity</label>
                                    <input type="text" class="form-control input input-sm">
                                </div>
                                <div class="priority">
                                    <label>Priority</label>
                                    <select class="form-control input iput-sm">
                                        <option>Medium</option>
                                    </select>
                                </div>
                                <div class="button-action">
                                    <button class="button button-sm">Save</button>
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </div>
                            </li>
                        </ul>

                    </div><!-- Main Content -->
                    
                    <!-- Sidebar -->
                    <div class="col-md-3 col-md-pull-9  col-sidebar">

                        <!-- Block  bestseller products-->
                        <div class="block-sidebar block-sidebar-products">
                            <div class="block-title">
                                <strong>BEST SALES</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true"
                                data-responsive='{
                                "0":{"items":1},
                                "420":{"items":1},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                    <div class="item">
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/detail/best1.jpg')}}"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Man’s Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
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
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/detail/best2.jpg')}}"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Woman Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
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
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/detail/best3.jpg')}}"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Plus Size Rock Star Skirt</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/detail/best1.jpg')}}"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Man’s Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
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
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/detail/best2.jpg')}}"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Woman Within Plus Size Flared</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
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
                                        <div class="product-item product-item-opt-1">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/detail/best3.jpg')}}"></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="">Plus Size Rock Star Skirt</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
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
                                    </div>
                                </div>
                            </div>
                        </div><!-- Block  bestseller products-->

                        <!-- block slide top -->
                        <div class="block-sidebar block-banner-sidebar">
                            <div class="owl-carousel" 
                                data-nav="false" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item1" >
                                   <img src="{{asset('shopAssets/images/media/banner-sidebar1.jpg')}}" alt="images">
                                </div>
                                <div class="item item2" >
                                   <img src="{{asset('shopAssets/images/media/banner-sidebar1.jpg')}}" alt="images">
                                </div>
                                <div class="item item3" >
                                   <img src="{{asset('shopAssets/images/media/banner-sidebar1.jpg')}}" alt="images">
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
                                            <a class="product-item-img" href=""><img alt="product name" src="{{asset('shopAssets/images/media/floor5-1.jpg')}}"></a>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">Security Camera Size Flared</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
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
                                    <a href="" class="btn all-products">All products <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
                                <div class="owl-carousel" 
                                    data-nav="false" 
                                    data-dots="true" 
                                    data-margin="0" 
                                    data-items='1' 
                                    data-autoplayTimeout="700" 
                                    data-autoplay="true" 
                                    data-loop="true">
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="{{asset('shopAssets/images/media/avata.jpg')}}" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="{{asset('shopAssets/images/media/avata.jpg')}}" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                    <div class="item " >
                                       <strong class="name">Roverto & Maria</strong>
                                       <div class="avata">
                                            <img src="{{asset('shopAssets/images/media/avata.jpg')}}" alt="avata">
                                       </div>
                                       <div class="des">
                                        "Your product needs to improve more. To suit the needs and update your image up"
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- block slide top -->


                    </div><!-- Sidebar -->

                    
                    
                </div>
            </div>


		</main><!-- end MAIN -->
@endsection

@section('script')
    <!-- Custom scripts -->
    <script>
        $(document).ready(function() {
            // Function to fetch and display products
            function fetchProducts(page = 1) {

                // Apply skeleton loading structure
                for (let i = 0; i < 9; i++) { // Assuming 9 products per page
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
                        page: page
                    },
                    success: function(response) {
                        console.log(response);
                        $('#product-listing').empty();
                        $('#product-listing').removeClass('blur-effect');
                        $.each(response.data, function(index, product) {
                            var percentageDiscount = Math.round(((product.old_price - product
                                .new_price) / product.old_price) * 100);
                            var productHtml = `
                        <li class="col-sm-4 product-item">
                            <div class="product-item-opt-1">
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a href="${product.slug}" class="product-item-img"><img src="https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg')}}"
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
                                        <strong class="product-item-name"><a href="${product.slug}">${product.title}</a></strong>
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

            // Initial call to fetch products
            fetchProducts();

            // Pagination click event handler
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).data('page'); // Get the page number from the clicked link
                fetchProducts(page);
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
