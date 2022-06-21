<base href="/public">
@include('navbarpage')

<br><br>
</section>
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Game Title</th>
                            <th scope="col">Game Price</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right"></th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Apex Legends</td>
                            <td>Free</td>
                            <td>2</td>
                            <td class="text-right"><a href="{{ url('/shoppage') }}">Update</a></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">255,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>346,90 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <form method="get" action="/shoppage">
                        <button class="btn btn-block btn-light">Continue Shopping</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <form method="get" action="#">
                        <button class="btn btn-lg btn-block btn-success text-uppercaset">CHECKOUT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')

