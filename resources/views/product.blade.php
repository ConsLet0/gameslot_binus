    
    <div class="col-lg-9">
        <div class="col-md-4">
            @foreach($data as $data)
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="/productimage/{{ $data->image }}">
                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white mt-2" href="{{ url('/detailproduct', $data->id) }}" title="Add To Cart"><img style="width: 25px" src="./homepageasset/img/cart.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a style="color: brown" href="shop-single.html" class="h3 text-decoration-none"><b>{{ $data->title }}</b></a>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li style="color: cornflowerblue"><b>{{ $data->genre }}</b></li>
                            <li class="pt-2">
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                            </li>
                        </ul>
                        <p class="text-center mb-0">${{ $data->price }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
