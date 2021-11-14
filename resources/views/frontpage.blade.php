@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menu</div>

                    <div class="card-body">
                        <div class="list-group">
                            <form action="{{ route('frontpage') }}" method="get">
                                <a href="/" class="btn btn-outline-dark btn-sm mb-2">x</a>
                                <input type="submit" value="Vegetarian" name="category" class="list-group-item list-group-item-action">
                                <input type="submit" value="Nonvegetarian" name="category" class="list-group-item list-group-item-action">
                                <input type="submit" value="Traditional" name="category" class="list-group-item list-group-item-action">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>

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

    <style>
        a.list-group-item{
            font-size: 18px;
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
    </style>
@endsection
