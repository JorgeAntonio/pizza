@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Ordes</li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header">Order
                        <a href="{{ route('pizza.index') }}" style="float: right" class="btn btn-outline-secondary btn-sm m-1">View pizzas</a>
                        <a href="{{ route('pizza.create') }}" style="float: right" class="btn btn-outline-secondary btn-sm m-1">Add new pizza</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-center">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone/Email</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Pizza</th>
                                <th scope="col">S Pizza</th>
                                <th scope="col">M Pizza</th>
                                <th scope="col">L Pizza</th>
                                <th scope="col">Message</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                <th scope="col">Completed</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $orders as $order )
                            <tr>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->user->email }} <br> {{ $order->phone }}</td>
                                <td>{{ $order->date }} <br> {{ $order->time }}</td>
                                <td>{{ $order->pizza->name }}</td>
                                <td>{{ $order->small_pizza }}</td>
                                <td>{{ $order->medium_pizza }}</td>
                                <td>{{ $order->large_pizza }}</td>
                                <td>{{ $order->body }}</td>
                                <td>
                                    <strong>
                                    S/{{ ($order->pizza->small_pizza_price * $order->small_pizza) +
                                        ($order->pizza->medium_pizza_price * $order->medium_pizza) +
                                        ($order->pizza->large_pizza_price * $order->large_pizza) }}.00
                                    </strong>
                                </td>
                                <td><strong>{{ $order->status }}</strong></td>
                                <form action="{{ route('order.status',$order->id) }}" method="post">@csrf
                                <td>
                                    <input name="status" type="submit" class="btn btn-outline-primary btn-sm mb-2" value="Accepted">
                                    <input name="status" type="submit" class="btn btn-outline-danger btn-sm" value="Rejected">
                                </td>
                                <td><input name="status" type="submit" class="btn btn-outline-success btn-sm" value="Completed"></td>
                                </form>
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
