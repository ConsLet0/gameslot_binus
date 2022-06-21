<base href="/public">
@include("navbarpage")
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card mb-3">
                <img class="card-img img-fluid" src="/productimage/{{ $data->image }}" alt="Card image cap" id="product-detail">
            </div>
            
        </div>
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2">{{ $data->title }}</h1>
                    <p style="color: #228B22" class="h3 py-2"><b>PRICE : ${{ $data->price }}</b></p>
                    <hr>    
                    <p class="py-2">
                        <img width="50px" src="./homepageasset/img/pegi.png">
                        <span class="list-inline-item text-dark"><b>PEGI Rating | {{ $data->pegirate }}+</b></span>
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6>Genre:</h6>
                        </li>
                        <li class="list-inline-item">
                            <p><strong><b>{{ $data->genre }}</b></strong></p>
                        </li>
                    </ul>
                    <hr><br>
                    <h6>Description:</h6>
                    <p><b>{{ $data->description }}</b></p>
                    <hr><br>

                    <form action="{{ url('/addcart', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product-title" value="Activewear">
                        <div class="row">
                            <div class="col-auto">
                                <ul class="list-inline pb-3">
                                    <li class="list-inline-item text-right">
                                        Quantity
                                        <input type="number" name="quantity" min="1" value="1" style="width: 100px; height: 40px">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col d-grid">
                                <button type="submit" class="btn btn-success btn-lg" value="addtocard">Add To Cart</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>