@extends('layouts.app')

@section('content')
    <div class="container pt-4 pb-4">
        <div class="row justify-content-center">

            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Menú</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group">
                                <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                                <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                                <a href="{{route('user.order')}}" class="list-group-item list-group-item-action">User Order</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All Pizzas
                    </div>
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
                                @if(count($pizzas)>0)
                                @foreach($pizzas as $key => $pizza)
                                <tr>
                                    <td scope="row">{{$key+1}}</td>
                                    <td><img src="{{\Illuminate\Support\Facades\Storage::url($pizza->image)}}" width="80"></td>
                                    <td>{{$pizza->name}}</td>
                                    <td>{{$pizza->description}}</td>
                                    <td>{{$pizza->category}}</td>
                                    <td>{{$pizza->small_pizza_price}}</td>
                                    <td>{{$pizza->medium_pizza_price}}</td>
                                    <td>{{$pizza->large_pizza_price}}</td>

                                    <td><a href="{{route('pizza.edit',$pizza->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#modelId{{$pizza->id}}">Delete</button></td>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modelId{{$pizza->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="modelTitleId" aria-hidden="true">
                                        <form action="{{route('pizza.destroy',$pizza->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                </tr>
                                @endforeach
                                @else
                                <p>No pizzas to show</p>
                                @endif
                                </tbody>
                            </table>
                        {{ $pizzas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
