@extends('ShopFrontend.Layouts.layout')

@section('title')
    Checkout
@endsection

@section('body_classes')
    catalog-product-view catalog-view_op1 page-order
@endsection
@section('main')
    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active"> Checkout</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2"> Checkout</span>
            </h2>

            <div class="page-content checkout-page">
                {{-- <h3 class="checkout-sep">1. Checkout Method</h3>
                <div class="box-border">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Checkout as a Guest or Register</h4>
                            <p>Register with us for future convenience:</p>
                            <ul>
                                <li><label><input name="radio1" type="radio">Checkout as Guest</label></li>
                                <li><label><input name="radio1" type="radio">Register</label></li>
                            </ul>
                            <br>
                            <h4>Register and save time!</h4>
                            <p>Register with us for future convenience:</p>
                            <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                            <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status
                            </p>
                            <button class="button">Continue</button>
                        </div>
                        <div class="col-sm-6">
                            <h4>Login</h4>
                            <p>Already registered? Please log in below:</p>
                            <label>Email address</label>
                            <input class="form-control input" type="text">
                            <label>Password</label>
                            <input class="form-control input" type="password">
                            <p><a href="#">Forgot your password?</a></p>
                            <button class="button">Login</button>
                        </div>

                    </div>
                </div> --}}
                <form id="place-order" method="POST">
                    @csrf
                    <h3 class="checkout-sep">1. Billing Infomations</h3>
                    <div class="box-border">
                        <ul>
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="first_name" class="required">First Name</label>
                                    <input class="input form-control" name="first_name" id="first_name" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="last_name" class="required">Last Name</label>
                                    <input name="last_name" class="input form-control" id="last_name" type="text">
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="company_name">Company Name</label>
                                    <input name="company_name" class="input form-control" id="company_name" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="email_address" class="required">Email Address</label>
                                    <input class="input form-control" name="email_address" id="email_address"
                                        type="text">
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-xs-12">

                                    <label for="address" class="required">Address</label>
                                    <input class="input form-control" name="address" id="address" type="text">

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="city" class="required">City</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                </div>

                                <div class="col-sm-6">
                                    <label class="required">State/Province</label>
                                    <select class="input form-control" name="state">
                                        <option value="Alabama">Alabama</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Kansas">Kansas</option>
                                    </select>
                                </div>
                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="postal_code" class="required">Zip/Postal Code</label>
                                    <input class="input form-control" name="postal_code" id="postal_code" type="text">
                                </div>

                                <div class="col-sm-6">
                                    <label class="required">Country</label>
                                    <select class="input form-control" name="country">
                                        <option value="USA">USA</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Canada">Canada</option>
                                    </select>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="telephone" class="required">Telephone</label>
                                    <input class="input form-control" name="telephone" id="telephone" type="text">
                                </div>

                                <div class="col-sm-6">
                                    <label for="fax">Fax</label>
                                    <input class="input form-control" name="fax" id="fax" type="text">
                                </div>

                            </li>

                            {{-- <li class="row">
                                <div class="col-sm-6">
                                    <label for="password" class="required">Password</label>
                                    <input class="input form-control" name="password" id="password" type="password">
                                </div>
    
                                <div class="col-sm-6">
                                    <label for="confirm" class="required">Confirm Password</label>
                                    <input class="input form-control" name="confirm" id="confirm" type="password">
                                </div>
                            </li> --}}
                            {{-- <li>
                                <button class="button">Continue</button>
                            </li> --}}
                        </ul>
                    </div>
                    <h3 class="checkout-sep">2. Shipping Information</h3>
                    <div class="box-border">
                        <ul>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="first_name_1" class="required">First Name</label>
                                    <input class="input form-control" name="first_name_1" id="first_name_1"
                                        type="text">

                                </div>

                                <div class="col-sm-6">

                                    <label for="last_name_1" class="required">Last Name</label>
                                    <input class="input form-control" name="last_name_1" id="last_name_1"
                                        type="text">

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="company_name_1">Company Name</label>
                                    <input class="input form-control" name="company_name_1" id="company_name_1"
                                        type="text">

                                </div>

                                <div class="col-sm-6">

                                    <label for="email_address_1" class="required">Email Address</label>
                                    <input class="input form-control" name="email_address_1" id="email_address_1"
                                        type="text">

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-xs-12">

                                    <label for="address_1" class="required">Address</label>
                                    <input class="input form-control" name="address_1" id="address_1" type="text">

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="city_1" class="required">City</label>
                                    <input class="input form-control" name="city_1" id="city_1" type="text">

                                </div>

                                <div class="col-sm-6">

                                    <label class="required">State/Province</label>

                                    <div class="custom_select">

                                        <select class="input form-control" name="state1">

                                            <option value="Alabama">Alabama</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Kansas">Kansas</option>

                                        </select>

                                    </div>

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="postal_code_1" class="required">Zip/Postal Code</label>
                                    <input class="input form-control" name="postal_code_1" id="postal_code_1"
                                        type="text">

                                </div>
                                <div class="col-sm-6">

                                    <label class="required">Country</label>

                                    <div class="custom_select">

                                        <select class="input form-control" name="country1">

                                            <option value="USA">USA</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Canada">Canada</option>

                                        </select>

                                    </div>

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="telephone_1" class="required">Telephone</label>
                                    <input class="input form-control" name="telephone_1" id="telephone_1"
                                        type="text">

                                </div>

                                <div class="col-sm-6">

                                    <label for="fax_1">Fax</label>
                                    <input class="input form-control" name="fax_1" id="fax_1" type="text">

                                </div>

                            </li>

                        </ul>
                        {{-- <button class="button">Continue</button> --}}
                    </div>
                    <h3 class="checkout-sep">3. Shipping Method</h3>
                    <div class="box-border">
                        <ul class="shipping_method">
                            <li>
                                <p class="subcaption bold">Free Shipping</p>
                                <label for="radio_button_3"><input checked="" name="shipping_price"
                                        id="radio_button_3" type="radio" value="0">Free $0</label>
                            </li>

                            <li>
                                <p class="subcaption bold">Free Shipping</p>
                                <label for="radio_button_4"><input name="radio_3" id="shipping_price" type="radio"
                                        value="5">
                                    Standard Shipping $5.00</label>
                            </li>
                        </ul>
                        {{-- <button class="button">Continue</button> --}}
                    </div>
                    <h3 class="checkout-sep">4. Payment Information</h3>
                    <div class="box-border">
                        <ul>
                            <li>
                                <label for="radio_button_5"><input checked="" name="payment_method"
                                        id="radio_button_5" type="radio" value="cash"> Check / Money order</label>
                            </li>

                            <li>

                                <label for="radio_button_6"><input name="payment_method" id="radio_button_6"
                                        value="card" type="radio"> Credit
                                    card (saved)</label>
                            </li>

                        </ul>
                        {{-- <button class="button">Continue</button> --}}
                    </div>
                    <div id="card-details" class="box-border" style="display: none;">
                        <div id="card-element"></div>
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <h3 class="checkout-sep">5. Order Review</h3>
                    <div class="box-border">
                        <div class="table-responsive">
                            <table class="table table-bordered  cart_summary">
                                <thead>
                                    <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Description</th>
                                        <th>Avail.</th>
                                        <th>Unit price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th class="action"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @if (count($cartItem) > 0)
                                        @foreach ($cartItem as $row)
                                            @php
                                                $total += $row->product->new_price * $row->quantity;
                                            @endphp
                                            <tr class="cart-row-{{ $row->id }}">
                                                <td class="cart_product">
                                                    <a href="#">
                                                        @if ($row->product->image != null && $row->product->image != '')
                                                            <img src="{{ asset('productImage/' . $row->product->image) }}"
                                                                alt="Product">
                                                        @else
                                                            <img src='https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg'
                                                                alt="Product">
                                                        @endif
                                                    </a>
                                                </td>
                                                <td class="cart_description">
                                                    <p class="product-name"><a
                                                            href="{{ route('front.vendor.products', $row->product->slug) }}">{{ $row->product->title }}
                                                        </a></p>
                                                    <small class="cart_ref">SKU : #123654999</small><br>
                                                    <small><a href="#">Color : Beige</a></small><br>
                                                    <small><a href="#">Size : S</a></small>
                                                </td>
                                                <td class="cart_avail"><span class="label label-success">
                                                        {{ $row->product->stock_condition }}</span></td>
                                                <td class="price" id="new-price-{{ $row->product_id }}"
                                                    data-val="{{ $row->product->new_price }}">
                                                    <span>{{ $row->product->new_price }} $</span>
                                                </td>
                                                <td class="qty">

                                                    <input minlength="1" maxlength="12" readonly name="qty1"
                                                        id="qty-{{ $row->product_id }}" value="{{ $row->quantity }}"
                                                        class="form-control input-sm" type="text">
                                                    <span data-field="qty1"
                                                        onclick="cartQuantity({{ $row->product_id }},'minus')"
                                                        data-type="minus" class="btn-number-checkout"><i
                                                            class="fa fa-caret-up"></i></span>
                                                    <span data-field="qty1" data-type="plus"
                                                        onclick="cartQuantity({{ $row->product_id }},'plus')"
                                                        class="btn-number-checkout"><i
                                                            class="fa fa-caret-down"></i></span>
                                                </td>
                                                <td class="price" id="ind-total-{{ $row->product_id }}">
                                                    @php
                                                        $new_price =
                                                            (int) $row->product->new_price * (int) $row->quantity;
                                                    @endphp
                                                    <span>{{ $new_price }} $</span>
                                                </td>
                                                <td class="action">
                                                    <a href="javascript:void(0);" class="delete-cart"
                                                        data-id="{{ $row->id }}">Delete item</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <strong>Cart has Empty</strong>
                                    @endif
                                    {{-- <tr>
                                        <td class="cart_product">
                                            <a href="#"><img
                                                    src="{{ asset('images/media/detail/product-100x122.jpg') }}"
                                                    alt="Product"></a>
                                        </td>
                                        <td class="cart_description">
                                            <p class="product-name"><a href="#">Frederique Constant </a></p>
                                            <small class="cart_ref">SKU : #123654999</small><br>
                                            <small><a href="#">Color : Beige</a></small><br>
                                            <small><a href="#">Size : S</a></small>
                                        </td>
                                        <td class="cart_avail"><span class="label label-success">In stock</span></td>
                                        <td class="price"><span>61,19 €</span></td>
                                        <td class="qty">
    
                                            <input minlength="1" maxlength="12" name="qty0" id="qty0"
                                                value="1" class="form-control input-sm" type="text">
                                            <span data-field="qty0" data-type="minus" class="btn-number"><i
                                                    class="fa fa-caret-up"></i></span>
                                            <span data-field="qty0" data-type="plus" class="btn-number"><i
                                                    class="fa fa-caret-down"></i></span>
                                        </td>
                                        <td class="price">
                                            <span>61,19 €</span>
                                        </td>
                                        <td class="action">
                                            <a href="#">Delete item</a>
                                        </td>
                                    </tr> --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" rowspan="2"></td>
                                        <td colspan="3">Total products (tax incl.)</td>
                                        <td colspan="2" class="net-total">{{ $total }} $</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>Total</strong></td>
                                        <td colspan="2" class="net-total" id="net-total"
                                            data-val="{{ $total }}"><strong>{{ $total }} $</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            @if (count($cartItem) > 0)
                                <button class="button pull-right place-order" type="submit">Place Order</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </main><!-- end MAIN -->
@endsection

@section('script')
    <!-- Custom scripts -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $(document).ready(function() {
            const stripe = Stripe("{{ env('STRIPE_KEY') }}"); // Your publishable key
            const elements = stripe.elements();
            const cardElement = elements.create('card');
            cardElement.mount('#card-element');

            $('#place-order').submit(function(event) {
                event.preventDefault();

                var paymentMethod = $('input[name="payment_method"]:checked').val();
                var form = $(this);

                // Validate required fields here (optional)

                if (paymentMethod === 'card') {
                    stripe.createToken(cardElement).then(function(result) {
                        if (result.error) {
                            $('#card-errors').text(result.error.message);
                        } else {
                            $('<input>').attr({
                                type: 'hidden',
                                name: 'stripeToken',
                                value: result.token.id
                            }).appendTo(form);

                            submitOrder(form);
                        }
                    });
                } else {
                    submitOrder(form);
                }
            });

            function submitOrder(form) {
                $.ajax({
                    url: '{{ route('orders.store') }}',
                    type: 'POST',
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        alert('Order placed successfully!');
                    },
                    error: function(xhr) {
                        alert('Failed to place order. Please try again later.');
                    }
                });
            }
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

            // Payment method toggle
            $('input[name="payment_method"]').on('change', function() {
                if ($(this).val() === 'card') {
                    $('#card-details').slideDown();
                } else {
                    $('#card-details').slideUp();
                }
            });

        })(jQuery);
    </script>
@endsection
