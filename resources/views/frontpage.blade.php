@extends('layouts.app')

@section('content')

    @include('layouts.header.header')

    <div class="container-icons" id="menu">
        <div class="icons">
            <a href="" class="fas fa-pizza-slice"> Pizzas</a>
            <a href="" class="fas fa-hamburger"> Burgers</a>
            <a href="" class="fas fa-coffee"> Drinks</a>
        </div>
    </div>

    <div class="container pb-4 mt-4">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <header class="card-header">Categories</header>
                    <div class="card-body">
                        <div class="list-group">
                            <form action="{{ route('frontpage') }}" method="get">
                                <a href="/" class="list-group-item list-group-item-action">Delete filter</a>
                                <input type="submit" value="Vegetarian" name="category" class="list-group-item list-group-item-action">
                                <input type="submit" value="Nonvegetarian" name="category" class="list-group-item list-group-item-action">
                                <input type="submit" value="Traditional" name="category" class="list-group-item list-group-item-action">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <header class="card-header">Pizza ({{ count($pizzas) }} pizzas)</header>
                <div class="row row-cols-1 row-cols-md-3 g-4 pt-2">
                    @forelse( $pizzas as $pizza )
                        <div class="col pb-4">
                            <div class="card h-100 text-center">
                                <img src="{{ Storage::url($pizza->image) }}" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pizza->name }}</h5>
                                    <p class="card-text h-50">{{ $pizza->description }}</p>
                                    <a href="{{ route('pizza.show',$pizza->id) }}">
                                        <button type="submit" class="btn btn-danger">Order Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No pizzas to show</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    @include('layouts.location.location')

    @include('layouts.footer.footer')

    <style>
        a.list-group-item{
            font-size: 16px;
        }
        a.list-group-item:hover{
            background-color: red;
            color: #fff;
        }
        .card-header{
            background-color: red;
            color: #fff;
            font-size: 20px;
        }
        input.list-group-item{
            font-size: 16px;
        }
        input.list-group-item:hover{
            background-color: red;
            color: #fff;
        }
    </style>
@endsection
