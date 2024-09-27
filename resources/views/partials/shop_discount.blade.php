@foreach ($discounted_products as $product)
    <div>
        <div class="product-item product-item-opt-1">
            <div class="product-item-info">
                <div class="product-item-photo">
                    <a class="product-item-img" href="#">
                        <img alt="{{ $product->title }}"
                            src="{{ asset('productImage/' . ($product->image ?? 'default_image_path.jpg')) }}">
                    </a>
                    <button type="button" class="btn btn-cart">
                        <span>Add to Cart</span>
                    </button>
                </div>
                <div class="product-item-detail">
                    <strong class="product-item-name">
                        <a href="#">{{ $product->title }}</a>
                    </strong>
                    <div class="clearfix">
                        <div class="product-item-price">
                            <span class="price">${{ number_format($product->new_price, 2) }}</span>
                            @if ($product->old_price)
                                <span class="old-price">${{ number_format($product->old_price, 2) }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
