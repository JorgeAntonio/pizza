@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <header class="card-header">Your Orders</header>
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer.footer')

    <style>
        .card-header{
            background-color: red;
            color: #fff;
            font-size: 20px;
        }
    </style>

@endsection
