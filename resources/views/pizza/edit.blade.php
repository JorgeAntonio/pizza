@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
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

                <div class="card">
                    <div class="card-header">Edit Pizza</div>
                    <form action="{{route('pizza.update',$pizza->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name of pizza</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$pizza->name}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description of pizza</label>
                                <textarea name="description" id="description" class="form-control">{{$pizza->description}}</textarea>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label for="price">Pizza price</label>
                                    <input type="text" name="small_pizza_price" id="price" class="form-control"
                                           placeholder="small pizza price" value="{{$pizza->small_pizza_price}}">
                                    <input type="text" name="medium_pizza_price" id="price" class="form-control"
                                           placeholder="medium pizza price" value="{{$pizza->medium_pizza_price}}">
                                    <input type="text" name="large_pizza_price" id="price" class="form-control"
                                           placeholder="large pizza price" value="{{$pizza->large_pizza_price}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value=""></option>
                                    <option value="vegetarian">Vegetarian Pizza</option>
                                    <option value="nonvegetarian">Non Vegetarian Pizza</option>
                                    <option value="traditional">Traditional Pizza</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($pizza->image)}}" alt="" width="80">
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
