@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Create Order</p>

        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            @if(Session::has('cart')&&(Session::get('cart')->items!=null))
                <div>
                    <h5 class="pt-2 pb-2 text-dark text-center">Order details</h5>
                    <div class="container-fluid" style="width:600px;height:auto;">
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
                            <tbody>
                            @foreach (Session::get('cart')->items as $item)
                                <tr>
                                    <th scope="row">
                                        {{$item['item']->id}}
                                    </th>
                                    <td>
                                        <img src="{{asset($item['item']->imgUrl)}}" class="card-img-top" style="width: 30px; height: auto;" alt="Souvenir Image">
                                    </td>
                                    <td><a class="alert-link alert-light">{{$item['item']->name}}</a></td>
                                    <td>{{$item['category']}}</td>
                                    <td>
                                        <a onclick="localStorage.setItem('display','inline')" class="alert-link alert-light"><i class="fas fa-minus mr-1"></i></a>
                                        {{$item['qty']}}
                                        <a onclick="localStorage.setItem('display','inline')" class="alert-link alert-light"><i class="fas fa-plus ml-1"></i></a>
                                    </td>
                                    <td>{{$item['item']->price}}</td>
                                    <td>{{($item['item']->price) * ($item['qty'])}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                <tr>
                                    <th scope="row">SubTotal:</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{(Session::get('cart')->totalPrice)-(Session::get('cart')->totalGST)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">GST(15%):</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{Session::get('cart')->totalGST}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">GrandTotal:</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{Session::get('cart')->totalPrice}}</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Create New Order</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/order') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('firstName') ? 'has-error' : ''}}">
                                <label for="firstName" class="control-label">{{ 'Firstname' }}</label>
                                <input class="form-control" name="firstName" type="text" id="firstName" value="{{ $order->firstName }}" >
                                {!! $errors->first('firstName', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('lastName') ? 'has-error' : ''}}">
                                <label for="lastName" class="control-label">{{ 'Lastname' }}</label>
                                <input class="form-control" name="lastName" type="text" id="lastName" value="{{ $order->lastName }}" >
                                {!! $errors->first('lastName', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                <label for="address" class="control-label">{{ 'Address' }}</label>
                                <input class="form-control" name="address" type="text" id="address" value="{{ $order->address }}" >
                                {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                                <label for="status" class="control-label">{{ 'Status' }}</label>
                                <input class="form-control" name="status" type="text" id="status" value="{{ $order->status }}" >
                                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                                <label for="phone" class="control-label">{{ 'Phone' }}</label>
                                <input class="form-control" name="phone" type="text" id="phone" value="{{ $order->phone }}" >
                                {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                            </div>


                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="{{ 'Create' }}">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        </div>
    </div>
@endsection
