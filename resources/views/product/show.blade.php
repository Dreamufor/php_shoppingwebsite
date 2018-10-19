@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Product</p>
        <div class="row">

<div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body">

                        <a href="{{ url('/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        {{--<a href="{{ url('/product/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>--}}

                        <form method="POST" action="{{ url('product' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="card-img-top img-fluid" style="width: 300px; height: auto;" src="{{ asset($product->imgUrl)}}" alt="Souvenir Image">
                                </div>
                                <div class="col-md-6">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>ID</th><td>{{ $product->id }}</td>
                                            </tr>
                                            <tr><th> Name </th><td> {{ $product->name }} </td></tr><tr><th> Description </th><td> {{ $product->description }} </td></tr><tr><th> Category </th><td> {{ $product->category->name }} </td></tr><tr><th> Supplier </th><td> {{ $product->supplier->name }} </td></tr><tr><th> Price </th><td> $NZD {{ $product->price }} </td></tr><tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
