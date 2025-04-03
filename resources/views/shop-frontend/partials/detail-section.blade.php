    <!-- Nav tabs -->
    <ul class="nav nav-pills" role="tablist">
        <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">About </a></li>
        <li role="presentation"><a href="#tags" role="tab" data-toggle="tab">Section
                Details
            </a>
        </li>
        <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">reviews</a>
        </li>
        <li role="presentation"><a href="#additional" role="tab" data-toggle="tab">Experience</a></li>
        <li role="presentation"><a href="#tab-cust" role="tab" data-toggle="tab">Additional
                Info</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="description">
            <div class="block-title">Product Details</div>
            <div class="block-content">
                {!! $user->description !!}

            </div>
        </div>
    </div>
