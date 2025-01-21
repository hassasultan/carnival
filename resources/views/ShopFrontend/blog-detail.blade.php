@extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection
@section('main')
    <div id="content" class="container site-content sidebar-left style-standard post-page">
        <nav class="woocommerce-breadcrumb"><a href="https://kuteshop.kutethemes.net">Home</a><span class="delimiter"></span><a
                href="https://kuteshop.kutethemes.net/category/sunglasses/?demo=21">{{ $blog->category->title }}</a><span
                class="delimiter"></span>{{ $blog->title }}</nav>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-4495"
                    class="post-item post-single post-4495 post type-post status-publish format-standard has-post-thumbnail hentry category-sunglasses tag-sunglasses">
                    <div class="post-inner">
                        <div class="cat-list category post_cat">
                            <div class="inner"><a href="https://kuteshop.kutethemes.net/category/sunglasses/?demo=21"
                                    rel="tag">{{ $blog->category->title }}</a></div>
                        </div>
                        <h1 class="post-title"><a
                                href="https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21">
                                {{ $blog->title }}
                            </a></h1>
                        <div class="post-metas">
                            <div class="post-meta post-author">
                                <a class="author" href="https://kuteshop.kutethemes.net/author/admin/?demo=21">
                                    <span class="icon"></span> {{ $blog->user->first_name . ' ' . $blog->user->last_name }} </a>
                            </div>
                            <div class="post-meta post-comment">
                                <a href="https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21#comments"
                                    class="comment">
                                    {{-- <span class="icon"></span> (0) </a> --}}
                            </div>
                            <div class="post-meta post-share-button">
                                <a href="javascript:void(0)" class="toggle">
                                    <span class="icon"></span> </a>
                                <div class="ovic-share-socials">
                                    <div class="inner">
                                        <a class="facebook"
                                            href="https://www.facebook.com/sharer.php?u=https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21"
                                            onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                            <span class="icon fa fa-facebook"></span>
                                            <span class="text">Facebook</span>
                                        </a>
                                        <a class="twitter"
                                            href="https://twitter.com/share?url=https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21&amp;text=Smart%20kitchen%20appliances%20are%20currently%20used%20by%20many%20families.%20Smart%20kitchen%20appliances%20will%20not%20only%20bring%20a%20luxurious%20beauty%20to%20the%20kitchen,%20but%20it%20will%20also%20create%20unexpected%20amenities%20and%20utilities%20for%20you%20to%20use,%20especially,%20it%20also%20saves%20a%20lot%20of%20space%20for%20It’s%20your%20small%20kitchen.%20Built-in%20hood%20is%20a%20slim%20and%20modern%20%5B…%5D"
                                            onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                            <span class="icon fa fa-twitter"></span>
                                            <span class="text">Twitter</span>
                                        </a>
                                        <a class="pinterest"
                                            href="https://pinterest.com/pin/create/button/?url=https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21&amp;description=Smart%20kitchen%20appliances%20are%20currently%20used%20by%20many%20families.%20Smart%20kitchen%20appliances%20will%20not%20only%20bring%20a%20luxurious%20beauty%20to%20the%20kitchen,%20but%20it%20will%20also%20create%20unexpected%20amenities%20and%20utilities%20for%20you%20to%20use,%20especially,%20it%20also%20saves%20a%20lot%20of%20space%20for%20It’s%20your%20small%20kitchen.%20Built-in%20hood%20is%20a%20slim%20and%20modern%20%5B…%5D&amp;media={{ asset('storage/' . $blog->image) }}"
                                            onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                            <span class="icon fa fa-pinterest-square"></span>
                                            <span class="text">Pinterest</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumb">
                            <div class="post-meta post-date">
                                <a href="https://kuteshop.kutethemes.net/2023/02/22/?demo=21">
                                    {{ $blog->created_at->format('M d, Y') }}
                                </a>
                            </div>
                            <img width="1170" height="791"
                                src="{{ asset('storage/' . $blog->image) }}"
                                class="attachment-full size-full wp-post-image wp-post-image" alt=""
                                decoding="async"
                                srcset="{{ asset('storage/' . $blog->image) }} 1170w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-300x203.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-1024x692.jpg 1024w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-768x519.jpg 768w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-220x149.jpg 220w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-800x541.jpg 800w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-86x58.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-64x43.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2023/02/imgs-blog-Sunglasses3-370x250.jpg 370w"
                                sizes="(max-width: 1170px) 100vw, 1170px">
                        </div>
                        <div class="post-content">
                            <div data-elementor-type="wp-post" data-elementor-id="4495" class="elementor elementor-4495">
                                <div class="elementor-element elementor-element-ce5f4cb e-flex e-con-boxed none e-con e-parent e-lazyloaded"
                                    data-id="ce5f4cb" data-element_type="container">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-f66bbe8 none elementor-widget elementor-widget-text-editor"
                                            data-id="f66bbe8" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>
                                                    {!! $blog->description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="post-author-info">
                            <div class="avatar">
                                <a href="https://kuteshop.kutethemes.net/author/admin/?demo=21">
                                    <img alt=""
                                        src="https://secure.gravatar.com/avatar/863933273aac21506ab3aedab80ce4dc?s=100&amp;d=mm&amp;r=g"
                                        srcset="https://secure.gravatar.com/avatar/863933273aac21506ab3aedab80ce4dc?s=200&amp;d=mm&amp;r=g 2x"
                                        class="avatar avatar-100 photo" height="100" width="100" decoding="async">
                                </a>
                            </div>
                            <div class="content">
                                <p class="name">Admin</p>
                                <p class="desc">At habitant amet erat gravida lectus dapibus parturient per in praesent
                                    condimentum adipiscing gravida interdum rhoncus arcu condimentum dui scelerisque ipsum
                                    montes montes id a a.In tempor a a eu etiam per habitant dis condimentum.</p>
                                <a href="https://kuteshop.kutethemes.net/author/admin/?demo=21" class="button">
                                    View all posts by Admin </a>
                            </div>
                        </div> --}}
                        <div class="clear"></div>
                        <div class="cat-list post_tag"><span class="title">Tags:</span>
                            <div class="inner"><a href="https://kuteshop.kutethemes.net/tag/sunglasses/?demo=21"
                                    rel="tag">{{ $blog->category->title }}</a></div>
                        </div>
                        <div class="post-share">
                            <span class="title">Share this post:</span>
                            <div class="ovic-share-socials">
                                <div class="inner">
                                    <a class="facebook"
                                        href="https://www.facebook.com/sharer.php?u=https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21"
                                        onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                        <span class="icon fa fa-facebook"></span>
                                        <span class="text">Facebook</span>
                                    </a>
                                    <a class="twitter"
                                        href="https://twitter.com/share?url=https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21&amp;text=Smart%20kitchen%20appliances%20are%20currently%20used%20by%20many%20families.%20Smart%20kitchen%20appliances%20will%20not%20only%20bring%20a%20luxurious%20beauty%20to%20the%20kitchen,%20but%20it%20will%20also%20create%20unexpected%20amenities%20and%20utilities%20for%20you%20to%20use,%20especially,%20it%20also%20saves%20a%20lot%20of%20space%20for%20It’s%20your%20small%20kitchen.%20Built-in%20hood%20is%20a%20slim%20and%20modern%20%5B…%5D"
                                        onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                        <span class="icon fa fa-twitter"></span>
                                        <span class="text">Twitter</span>
                                    </a>
                                    <a class="pinterest"
                                        href="https://pinterest.com/pin/create/button/?url=https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21&amp;description=Smart%20kitchen%20appliances%20are%20currently%20used%20by%20many%20families.%20Smart%20kitchen%20appliances%20will%20not%20only%20bring%20a%20luxurious%20beauty%20to%20the%20kitchen,%20but%20it%20will%20also%20create%20unexpected%20amenities%20and%20utilities%20for%20you%20to%20use,%20especially,%20it%20also%20saves%20a%20lot%20of%20space%20for%20It’s%20your%20small%20kitchen.%20Built-in%20hood%20is%20a%20slim%20and%20modern%20%5B…%5D&amp;media={{ asset('storage/' . $blog->image) }}"
                                        onclick="window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;">
                                        <span class="icon fa fa-pinterest-square"></span>
                                        <span class="text">Pinterest</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <nav class="pagination-post">
                            <div class="inner">
                                <div class="item prev">
                                    <a class="link"
                                        href="https://kuteshop.kutethemes.net/eye-wear-tips-to-master-your-zoom-calls/?demo=21">
                                        <span class="icon"></span>
                                        <span class="content">
                                            <span class="text">Previous Post</span>
                                            <span class="title">Eye-wear Tips To Master Your Zoom Calls</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="post-related">
                        <h3 class="title">Related Posts</h3>
                        <div class="ovic-blog style-02  ">
                            <div class="content-post equal-container better-height owl-slick slick-initialized slick-slider"
                                data-slick="{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:0,&quot;arrows&quot;:true,&quot;infinite&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2}},{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}}]}">
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 578.667px; transform: translate3d(0px, 0px, 0px);">
                                        @foreach ($related_blogs as $row)
                                            <article
                                                class="blog-item style-02 format-standard post-4484 post type-post status-publish has-post-thumbnail hentry category-sunglasses tag-sunglasses slick-slide slick-current slick-active first-slick"
                                                data-slick-index="0" aria-hidden="false"
                                                style="margin-right: 0px; width: 289.333px;" tabindex="0">
                                                <div class="post-inner">
                                                    <div class="post-thumb">
                                                        <a href="{{ route('front.blog.detail', $row->slug) }}"
                                                            class="thumb-link effect background-zoom" tabindex="0">
                                                            <figure>
                                                                <img width="440" height="280"
                                                                    src="{{ asset('storage/' . $row->image) }}"
                                                                    class="attachment-440x280 size-440x280 wp-post-image"
                                                                    alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <div class="post-info">
                                                        <div class="cat-list category post_cat">
                                                            <div class="inner"><a
                                                                    href="javascript:void(0)"
                                                                    {{-- href="https://kuteshop.kutethemes.net/category/sunglasses/?demo=21" --}}
                                                                    rel="tag" tabindex="0">{{ $row->category->title }}</a></div>
                                                        </div>
                                                        <h1 class="post-title"><a
                                                                href="{{ route('front.blog.detail', $row->slug) }}"
                                                                tabindex="0">{{ $row->title }}</a></h1>
                                                    </div>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
        <aside id="secondary" class="widget-area widget-area" role="complementary" aria-label="Post Sidebar">
            <div class="sidebar-inner">
                <div id="search-3" class="widget widget_search">
                    <h2 class="widget-title"><span class="text">Search</span><span class="arrow"></span></h2>
                    <form role="search" method="get" class="search-form" action="https://kuteshop.kutethemes.net/">
                        <input type="search" id="search-form-66b0a5c1702d7" class="search-field" placeholder="Search…"
                            value="" name="s">
                        <button type="submit" class="search-submit">Search</button>
                    </form>
                </div>
                <div id="categories-3" class="widget widget_categories">
                    <h2 class="widget-title"><span class="text">Categories</span><span class="arrow"></span></h2>
                    <ul>
                        <li class="cat-item cat-item-1"><a
                                href="https://kuteshop.kutethemes.net/category/appliances/?demo=21">Appliances</a> (1)
                        </li>
                        <li class="cat-item cat-item-189"><a
                                href="https://kuteshop.kutethemes.net/category/fashion-bg/?demo=21">Fashion Bg</a> (4)
                        </li>
                        <li class="cat-item cat-item-190"><a
                                href="https://kuteshop.kutethemes.net/category/sport/?demo=21">Sport</a> (3)
                        </li>
                        <li class="cat-item cat-item-194"><a
                                href="https://kuteshop.kutethemes.net/category/sunglasses/?demo=21">Sunglasses</a> (3)
                        </li>
                    </ul>
                </div>
                <div id="ovic_blog-2" class="widget ovic-blog">
                    <h2 class="widget-title"><span class="text">Recent Posts</span><span class="arrow"></span></h2>
                    <div class="ovic-blog style-01">
                        <div class="content-post">
                            @foreach ($recent_blogs as $row)
                            <article
                                class="blog-item style-01 format-standard post-4495 post type-post status-publish has-post-thumbnail hentry category-sunglasses tag-sunglasses">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <a href="{{ route('front.blog.detail', $row->slug) }}"
                                            class="thumb-link effect background-zoom">
                                            <figure>
                                                <img width="90" height="57"
                                                    src="{{ asset('storage/' . $row->image) }}"
                                                    class="attachment-90x57 size-90x57 wp-post-image" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h1 class="post-title"><a
                                                href="{{ route('front.blog.detail', $row->slug) }}">
                                                {{ $row->title }}
                                            </a></h1>
                                        <div class="post-metas">
                                            <div class="post-meta post-date">
                                                <a href="https://kuteshop.kutethemes.net/2023/02/22/?demo=21">
                                                    {{ $blog->created_at->format('M d, Y') }}
                                                </a>
                                            </div>
                                            <div class="post-meta post-comment">
                                                <a href="https://kuteshop.kutethemes.net/how-to-choose-sunglasses-for-the-beach/?demo=21#comments"
                                                    class="comment">
                                                    <span class="icon"></span> (0) </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div id="tag_cloud-2" class="widget widget_tag_cloud">
                    <h2 class="widget-title"><span class="text">Popular Tags</span><span class="arrow"></span></h2>
                    <div class="tagcloud"><a href="https://kuteshop.kutethemes.net/tag/machine/?demo=21"
                            class="tag-cloud-link tag-link-359 tag-link-position-1" style="font-size: 8pt;"
                            aria-label="machine (1 item)">machine</a>
                        <a href="https://kuteshop.kutethemes.net/tag/market/?demo=21"
                            class="tag-cloud-link tag-link-155 tag-link-position-2" style="font-size: 8pt;"
                            aria-label="Market (1 item)">Market</a>
                        <a href="https://kuteshop.kutethemes.net/tag/sunglasses/?demo=21"
                            class="tag-cloud-link tag-link-309 tag-link-position-3" style="font-size: 22pt;"
                            aria-label="Sunglasses (2 items)">Sunglasses</a>
                    </div>
                </div>
                <div id="media_gallery-2" class="widget widget_media_gallery">
                    <h2 class="widget-title"><span class="text">Our Instagram</span><span class="arrow"></span></h2>
                    <div id="gallery-1" class="gallery galleryid-4495 gallery-columns-4 gallery-size-full">
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams2-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams3-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams4-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams5-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams6-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams7-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8.jpg"><img
                                        width="500" height="367"
                                        src="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8.jpg"
                                        class="attachment-full size-full wp-post-image" alt="" decoding="async"
                                        srcset="https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8.jpg 500w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8-300x220.jpg 300w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8-210x154.jpg 210w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8-86x63.jpg 86w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8-64x47.jpg 64w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8-88x65.jpg 88w, https://kuteshop.b-cdn.net/wp-content/uploads/2021/07/Instagrams8-84x62.jpg 84w"
                                        sizes="(max-width: 500px) 100vw, 500px"></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection
