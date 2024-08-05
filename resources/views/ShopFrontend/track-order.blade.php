@extends('ShopFrontend.Layouts.layout')

@section('title')
    Home
@endsection

@section('body_classes')
    cms-index-index index-opt-3
@endsection
@section('main')
    <div id="content" class="container site-content sidebar-full">
        <nav class="woocommerce-breadcrumb"><a href="https://kuteshop.kutethemes.net">Home</a><span
                class="delimiter"></span>Order Tracking</nav>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <article id="post-106" class="post-106 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <form action="https://kuteshop.kutethemes.net/order-tracking/" method="post"
                                class="woocommerce-form woocommerce-form-track-order track_order">
                                <p>To track your order please enter your Order ID in the box below and press the "Track"
                                    button. This was given to you on your receipt and in the confirmation email you should
                                    have received.</p>
                                <p class="form-row form-row-first"><label for="orderid">Order ID</label> <input
                                        class="input-text" type="text" name="orderid" id="orderid" value=""
                                        placeholder="Found in your order confirmation email."></p>
                                <p class="form-row form-row-last"><label for="order_email">Billing email</label> <input
                                        class="input-text" type="text" name="order_email" id="order_email" value=""
                                        placeholder="Email you used during checkout."></p>
                                <div class="clear"></div>
                                <p class="form-row"><button type="submit" class="button" name="track"
                                        value="Track">Track</button></p>
                                <input type="hidden" id="woocommerce-order-tracking-nonce"
                                    name="woocommerce-order-tracking-nonce" value="392e3a3e9f"><input type="hidden"
                                    name="_wp_http_referer" value="/order-tracking/?demo=8">
                            </form>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
@endsection
