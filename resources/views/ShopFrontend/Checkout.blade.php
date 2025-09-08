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
                                <label for="radio_button_5">
                                    <input checked name="payment_method" id="radio_button_5" type="radio"
                                        value="cash">
                                    Check / Money order
                                </label>
                            </li>
                            <li>
                                <label for="radio_button_6">
                                    <input name="payment_method" id="radio_button_6" value="card" type="radio">
                                    Credit card (saved)
                                </label>
                            </li>
                        </ul>

                        {{-- <ul>
                            <li>
                                <label for="radio_button_5"><input checked="" name="payment_method"
                                        id="radio_button_5" type="radio" value="cash"> Check / Money order</label>
                            </li>

                            <li>

                                <label for="radio_button_6"><input name="payment_method" id="radio_button_6"
                                        value="card" type="radio"> Credit
                                    card (saved)</label>
                            </li>

                        </ul> --}}
                        {{-- <button class="button">Continue</button> --}}
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

    <!-- Credit Card Modal -->
    <div class="modal fade" id="creditCardModal" tabindex="-1" role="dialog" aria-labelledby="creditCardModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="creditCardModalLabel">Enter Credit Card Details</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" id="cardNumber" class="form-control" placeholder="1234 1234 1234 1234">
                        <div class="invalid-feedback text-danger">Invalid card number</div>
                    </div>
                    <div class="form-group">
                        <label>Expiry (MM/YY)</label>
                        <input type="text" id="expiryDate" class="form-control" placeholder="MM/YY">
                        <div class="invalid-feedback text-danger">Invalid expiry</div>
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="text" id="cvv" class="form-control" placeholder="123">
                        <div class="invalid-feedback text-danger">Invalid CVV</div>
                    </div>

                    <div class="form-group">
                        <label>Card Information</label>
                        <div id="card-element" class="form-control" style="height: 40px; padding-top: 8px;"></div>
                        <div id="card-errors" class="text-danger" style="margin-top:8px;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" id="saveCardBtn" class="btn btn-primary">Save Card</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            /** =========================================
             * 1. Cart Quantity Update
             * ========================================= */
            window.cartQuantity = function(id, perform) {
                if (perform === 'plus') {
                    if (parseInt($('#qty-' + id).val()) < parseInt($('#qty-' + id).attr('maxlength'))) {
                        let newVal = parseInt($('#qty-' + id).val()) + 1;
                        $('#qty-' + id).val(newVal);
                        updateCartPrice(id, newVal, 'plus');
                    }
                }
                if (perform === 'minus') {
                    if (parseInt($('#qty-' + id).val()) > 1) {
                        let newVal = parseInt($('#qty-' + id).val()) - 1;
                        $('#qty-' + id).val(newVal);
                        updateCartPrice(id, newVal, 'minus');
                    }
                }
            };

            function updateCartPrice(id, qty, action) {
                let price = parseInt($('#new-price-' + id).attr('data-val'));
                $('#ind-total-' + id).html((price * qty) + '$');
                let total = parseInt($('#net-total').attr('data-val'));
                let net_total = action === 'plus' ? total + price : total - price;
                $('#net-total').attr('data-val', net_total);
                $('.net-total').html(net_total + '$');

                // Update cart via AJAX
                $.ajax({
                    type: 'GET',
                    url: '{{ route('add.to.cart') }}',
                    data: {
                        product_id: id,
                        quantity: qty,
                        type: 'product',
                    },
                    success: function(response) {
                        updateMiniCart(response);
                    },
                    error: function() {
                        alert('Error updating cart.');
                    }
                });
            }

            function updateMiniCart(cartItems) {
                let html = '';
                let total = 0;
                $.each(cartItems, function(index, cartItem) {
                    let image = cartItem.product.image ?
                        "{{ asset('productImage/') }}/" + cartItem.product.image :
                        'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg';
                    html += `
                    <li class="product-item cart-row-${cartItem.id}">
                        <a class="product-item-photo" href="#" title="${cartItem.product.title}">
                            <img class="product-image-photo" src="${image}" alt="${cartItem.product.title}">
                        </a>
                        <div class="product-item-details">
                            <strong class="product-item-name"><a href="#">${cartItem.product.title}</a></strong>
                            <div class="product-item-price"><span class="price">$${cartItem.product.new_price.toFixed(2)}</span></div>
                            <div class="product-item-qty"><span class="label">Qty: </span><span class="number">${cartItem.quantity}</span></div>
                            <div class="product-item-actions"><a class="action delete delete-cart" data-id="${cartItem.id}" href="javascript:void(0);" title="Remove item"><span>Remove</span></a></div>
                        </div>
                    </li>
                `;
                    total += cartItem.product.new_price * cartItem.quantity;
                });
                $('#minicart-items').html(html);
                $('#cart-price, .counter-price').html('$' + total);
                $('.counter-number').html(cartItems.length);
                $('.counter-label').html(cartItems.length + '<span>Items</span>');
            }

            /** =========================================
             * 2. Price Filter (jQuery UI)
             * ========================================= */
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

            /** =========================================
             * 3. Stripe Integration
             * ========================================= */
            var stripe = Stripe("{{ config('services.stripe.key') }}");

            /** =========================================
             * 4. Show Credit Card Modal
             * ========================================= */
            $(document).on('change', 'input[name="payment_method"]', function() {
                if ($(this).val() === 'card') {
                    $('#creditCardModal').modal('show');
                }
            });

            /** =========================================
             * 5. Credit Card Input Formatting & Brand Detection
             * ========================================= */
            $('#cardNumber').on('input', function() {
                let value = $(this).val().replace(/\D/g, '').substring(0, 16);
                let formatted = value.replace(/(.{4})/g, '$1 ').trim();
                $(this).val(formatted);

                // Detect brand
                let brand = getCardBrand(value);
                $('#cardBrandIcon').attr('src', brand.icon).show();

                if (formatted.length === 19) {
                    $('#expiryDate').focus();
                }
            });

            $('#expiryDate').on('input', function() {
                let value = $(this).val().replace(/\D/g, '').substring(0, 4);
                if (value.length >= 3) {
                    value = value.substring(0, 2) + '/' + value.substring(2);
                }
                $(this).val(value);
                if (value.length === 5) {
                    $('#cvv').focus();
                }
            });

            $('#cvv').on('input', function() {
                this.value = this.value.replace(/\D/g, '').substring(0, 4);
            });

            function getCardBrand(number) {
                let patterns = {
                    visa: /^4/,
                    mastercard: /^5[1-5]/,
                    amex: /^3[47]/
                };
                if (patterns.visa.test(number)) return {
                    name: 'Visa',
                    icon: '/icons/visa.png'
                };
                if (patterns.mastercard.test(number)) return {
                    name: 'MasterCard',
                    icon: '/icons/mastercard.png'
                };
                if (patterns.amex.test(number)) return {
                    name: 'AMEX',
                    icon: '/icons/amex.png'
                };
                return {
                    name: 'Unknown',
                    icon: '/icons/default-card.png'
                };
            }

            $('#creditCardModal').on('shown.bs.modal', function() {
                var elements = stripe.elements();
                var card = elements.create('card');
                card.mount('#card-element');
            });

            /** =========================================
             * 6. Save Card Button Logic
             * ========================================= */
            $('#saveCardBtn').click(function() {
                $(this).prop('disabled', true).text('Processing...');
                let cardNumber = $('#cardNumber').val().replace(/\s/g, '');
                let expiry = $('#expiryDate').val();
                let cvv = $('#cvv').val();
                var elements = stripe.elements();
                var card = elements.create('card');

                $('.invalid-feedback').hide();

                let valid = true;
                if (!isValidCardNumber(cardNumber)) {
                    $('#cardNumber').next('.invalid-feedback').show();
                    valid = false;
                }
                if (!isValidExpiry(expiry)) {
                    $('#expiryDate').next('.invalid-feedback').show();
                    valid = false;
                }
                if (!/^[0-9]{3,4}$/.test(cvv)) {
                    $('#cvv').next('.invalid-feedback').show();
                    valid = false;
                }

                if (!valid) {
                    $(this).prop('disabled', false).text('Save Card');
                    return;
                }

                let [month, year] = expiry.split('/');
                year = '20' + year;

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        alert(result.error.message);
                    } else {
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'stripeToken',
                            value: result.token.id
                        }).appendTo('#place-order');

                        $('#creditCardModal').modal('hide');
                        $('#place-order').off('submit').submit();
                    }
                });
            });

            /** =========================================
             * 7. Validation Functions
             * ========================================= */
            function isValidCardNumber(number) {
                let sum = 0,
                    shouldDouble = false;
                for (let i = number.length - 1; i >= 0; i--) {
                    let digit = parseInt(number.charAt(i));
                    if (shouldDouble) {
                        digit *= 2;
                        if (digit > 9) digit -= 9;
                    }
                    sum += digit;
                    shouldDouble = !shouldDouble;
                }
                return (sum % 10) === 0 && number.length >= 13;
            }

            function isValidExpiry(expiry) {
                if (!/^\d{2}\/\d{2}$/.test(expiry)) return false;
                let [month, year] = expiry.split('/').map(Number);
                if (month < 1 || month > 12) return false;
                let now = new Date();
                let currentYear = now.getFullYear() % 100;
                let currentMonth = now.getMonth() + 1;
                return (year > currentYear) || (year === currentYear && month >= currentMonth);
            }

            /** =========================================
             * 8. AJAX Order Submission
             * ========================================= */
            $('#place-order').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                $.ajax({
                    url: '{{ route('orders.store') }}',
                    type: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        alert('Order placed successfully!');
                    },
                    error: function(xhr) {
                        alert('Error placing order: ' + xhr.responseText);
                    }
                });
            });

        });
    </script>
@endsection
