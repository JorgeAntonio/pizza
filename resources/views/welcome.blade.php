@extends('layouts.app')

@section('content')

@include('layouts.header.header')

<div class="container-icons">
    <div class="icons">
        <a href="" class="fas fa-pizza-slice"> Pizzas</a>
        <a href="" class="fas fa-hamburger"> Burgers</a>
        <a href="" class="fas fa-coffee"> Drinks</a>
    </div>
</div>

<div class="container text-center py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col pb-4">
            <div class="card h-100">
                <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text h-50">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Add to order
                    </button>
                </div>
            </div>
        </div>
        <div class="col pb-4">
            <div class="card h-100">
                <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text h-50">This card has supporting text below as a natural lead-in to additional content.</p>
                    <a name="" id="" class="btn btn-danger" href="#" role="button">Add to order</a>
                </div>
            </div>
        </div>
        <div class="col pb-4">
            <div class="card h-100">
                <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text h-50">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <a name="" id="" class="btn btn-danger" href="#" role="button">Add to order</a>
                </div>
            </div>
        </div>
        <div class="col pb-4">
            <div class="card h-100">
                <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text h-50">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <a name="" id="" class="btn btn-danger" href="#" role="button">Add to order</a>
                </div>
            </div>
        </div>
        <div class="col pb-4">
            <div class="card h-100">
                <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text h-50">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <a name="" id="" class="btn btn-danger" href="#" role="button">Add to order</a>
                </div>
            </div>
        </div>
        <div class="col pb-4">
            <div class="card h-100">
                <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text h-50">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Add to order
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.location.location')

@include('layouts.footer.footer')


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Pizza Name</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; background: red">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Small</h5>
                                <p><strong>S/ 25.00</strong></p>
                                <label>
                                    <input type="number" class="form-control text-center" name="small_pizza" value="1">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Medium</h5>
                                <p><strong>S/ 25.00</strong></p>
                                <label>
                                    <input type="number" class="form-control text-center" name="medium_pizza" value="1">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('img/landingpage/landingpage.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">Large</h5>
                                <p><strong>S/ 25.00</strong></p>
                                <label>
                                    <input type="number" class="form-control text-center" name="large_pizza" value="1">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-3">
                    <div class="modal-footer">
                        <h5 class=""><strong>TOTAL: /S 45.00</strong></h5>
                        <button type="button" class="btn btn-danger">Add to order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
