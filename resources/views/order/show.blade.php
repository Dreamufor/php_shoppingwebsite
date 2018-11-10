@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Order</p>
        <div class="row">
<div class="col-md-3"></div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Order {{ $order->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        {{--<a href="{{ url('/order/' . $order->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>--}}

                        {{--<form method="POST" action="{{ url('order' . '/' . $order->id) }}" accept-charset="UTF-8" style="display:inline">--}}
                            {{--{{ method_field('DELETE') }}--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>--}}
                        {{--</form>--}}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $order->id }}</td>
                                    </tr>
                                    <tr><th> FirstName </th><td> {{ $order->firstName }} </td></tr><tr><th> LastName </th><td> {{ $order->lastName }} </td></tr><tr><th> Address </th><td> {{ $order->address }} </td></tr><tr><th> Status </th><td> {{ $order->status }} </td></tr><tr><th> Phone </th><td> {{ $order->phone }} </td></tr><tr><th> OrderDate </th><td> {{ $order->orderDate }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <h2 class="text-center">Order Details</h2>
                                <table class="table ml-1 mr-1 table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Souvenir</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Total</th>

                                    </tr>
                                    </thead>
                                    @foreach( $order -> orderItems as $item)
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                {{$item -> product -> id}}
                                            </th>
                                            <td>
                                                <img src="{{asset($item-> product ->imgUrl)}}" class="card-img-top" style="width: 30px; height: auto;" alt="Souvenir Image">
                                            </td>
                                            <td><a class="alert-link alert-light">{{$item-> product ->name}}</a></td>
                                            <td>{{$item-> product -> category -> name}}</td>
                                            <td>
                                                {{$item-> quantity}}
                                            </td>
                                            <td>{{$item-> product -> price}}</td>
                                            <td>{{($item-> product -> price) * ($item-> quantity)}}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            <table class="table table-borderless table-sm">
                                <tbody>
                                <tr>
                                    <th scope="row">SubTotal:</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{ $order->subtotal }} </td>
                                </tr>
                                <tr>
                                    <th scope="row">GST(15%):</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{ $order->gst }} </td>
                                </tr>
                                <tr>
                                    <th scope="row">GrandTotal:</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{ $order->grandtotal }} </td>
                                </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
