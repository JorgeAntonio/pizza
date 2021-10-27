@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Menú</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group">
                                <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View All</a>
                                <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create New</a>
                            </li>
                        </ul>
                    </div>
                </div>

                @if(count($errors)>0)
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pizza</div>
                    <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name of pizza</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description of pizza</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="price">Pizza price</label>
                                <input type="number" name="small_pizza_price" id="price" class="form-control" placeholder="small pizza price">
                                <input type="number" name="medium_pizza_price" id="price" class="form-control" placeholder="medium pizza price">
                                <input type="number" name="large_pizza_price" id="price" class="form-control" placeholder="large pizza price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value=""></option>
                                <option value="vegetanarian">Vegetanarian Pizza</option>
                                <option value="nonvegetarian">Non Vegetarian Pizza</option>
                                <option value="traditional">Traditional Pizza</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
