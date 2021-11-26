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

    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Categories</div>
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
                <div class="card">
                    <div class="card-header">Pizza ({{ count($pizzas) }} pizzas)</div>
                    <div class="card-body">
                        <div class="row">
                            @forelse( $pizzas as $pizza )
                            <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                                <img src="{{ Storage::url($pizza->image) }}" class="img-thumbnail m-1" alt="" style="width: 100%">
                                <p>{{ $pizza->name }}</p>
                                <p>{{ $pizza->description }}</p>
                                <a href="{{ route('pizza.show',$pizza->id) }}">
                                    <button type="submit" class="btn btn-danger mb-2">Order now</button>
                                </a>
                            </div>
                            @empty
                            <p>No pizzas to show</p>
                            @endforelse
                        </div>
                    </div>
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
