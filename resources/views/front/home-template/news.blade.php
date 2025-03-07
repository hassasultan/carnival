<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title" style="padding-top: 0px;">
                    <h4 class="subtitle color-blue-2 underline">news</h4>
                    <h2>latest news</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-xs-12 col-sm-4">
                    <div class="s_news-entry ">
                        <a href="{{ route('front.blog.detail', $blog->slug) }}" class="blogs-hover">
                            <img class="s_news-img img-full img-responsive"
                                src="{{ asset('blog_images/' . $blog->image) }}" alt="blog" style="height: 200px; object-fit: cover;">
                            <h4 class="s_news-title">{{ $blog->title }}</h4>
                            <div class="tour-info-line clearfix">
                                <div class="tour-info fl">
                                    <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                        alt="">
                                    <span
                                        class="font-style-2 color-dark-2">{{ $blog->created_at->format('d/m/Y') }}</span>
                                </div>
                                <div class="tour-info fl">
                                    <img src="https://carnivalguide.co/travel/img/calendar_icon_grey.png"
                                        alt="">
                                    <span class="font-style-2 color-dark-2">By
                                        {{ $blog->user->first_name . ' ' . $blog->user->last_name }}</span>
                                </div>
                                <div class="tour-info fl">
                                    <img src="https://carnivalguide.co/travel/img/comment_icon_grey.png"
                                        alt="">
                                    <span class="font-style-2 color-dark-2">10 comments</span>
                                </div>
                            </div>
                        </a>
                        {{-- <div class="s_news-text color-grey-3">{!! $blog->description !!}</div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
