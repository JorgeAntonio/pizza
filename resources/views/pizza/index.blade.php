@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Pizzas</div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                            <table class="table table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Small price</th>
                                    <th>Medium price</th>
                                    <th>Large price</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pizzas as $key => $pizza)
                                <tr>
                                    <td scope="row">{{$key+1}}</td>
                                    <td><img src="{{\Illuminate\Support\Facades\Storage::url($pizza->image)}}" width="80"></td>
                                    <td>{{$pizza->name}}</td>
                                    <td>{{$pizza->description}}</td>
                                    <td>{{$pizza->category}}</td>
                                    <td>{{$pizza->smal_pizza_price}}</td>
                                    <td>{{$pizza->mediun_pizza_price}}</td>
                                    <td>{{$pizza->large_pizza_price}}</td>
                                    <td><button class="btn btn-primary">Edit</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
