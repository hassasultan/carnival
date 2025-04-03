<div class="product-info-detailed">
    <!-- Nav tabs -->
    <ul class="nav nav-pills" role="tablist">
        @foreach ($user->tabs as $index => $tab)
            <li role="presentation" class="{{ $index === 0 ? 'active' : '' }}">
                <a href="#{{ Str::slug($tab->name, '-') }}" role="tab" data-toggle="tab">{{ $tab->name }}</a>
            </li>
        @endforeach
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        @foreach ($user->tabs as $index => $tab)
            <div role="tabpanel" class="tab-pane {{ $index === 0 ? 'active' : '' }}" id="{{ Str::slug($tab->name, '-') }}">
                <div class="block-title">Product Details</div>
                <div class="block-content">
                    {!! $tab->description !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
