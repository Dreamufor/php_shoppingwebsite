@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Product</p>
        <div class="row">
<div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Supplier {{ $supplier->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/supplier') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        {{--<a href="{{ url('/supplier/' . $supplier->id . '/edit') }}" title="Edit Supplier"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>--}}

                        <form method="POST" action="{{ url('supplier' . '/' . $supplier->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Supplier" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $supplier->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $supplier->name }} </td></tr><tr><th> Email </th><td> {{ $supplier->email }} </td></tr><tr><th> PhoneNumber </th><td> {{ $supplier->phoneNumber }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
