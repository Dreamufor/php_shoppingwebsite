@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h2 class="text-center text-dark">Product List</h2>
                <p class="text-right">
                    <a href="{{ url('/products/create')  }}" class="btn btn-outline-secondary">Create New</a>
                </p>
                <form method="get">
                    <div class="input-group float-right mb-2" style="width:400px;">
                        <input type="text" class="form-control" placeholder="Search products" name="searchString">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" value="Search"><i class="fas fa-search"></i></button>
                        </div>
                        <a href="{{ url('/products/index')  }}" class="alert-light font-weight-bold ml-3 mt-1">Back to Full List</a>
                    </div>
                </form>

                <table class="table">
                    <thead>
                    <tr class="alert-light">
                        <th>
                            Image
                        </th>

                        <th>
                            <a class="alert-link">
                            Name
                            <i class="fas fa-sort"></i>
                            </a>
                        </th>
                        <th>
                            <a class="alert-link">
                            Price
                            <i class="fas fa-sort"></i>
                            </a>
                        </th>
                        <th style="width:300px;">
                            Description
                        </th>
                        <th>
                            <a class="alert-link">
                            Category
                            <i class="fas fa-sort"></i>
                            </a>
                        </th>
                        <th>
                            <a class="alert-link">
                            Supplier
                            <i class="fas fa-sort"></i>
                            </a>
                        </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <img style="width: 100px; height: auto;" src="{{ asset($product->imageUrl)}}" alt="Souvenir Image">
                            </td>

                            <td>
                                {{$product->name}}
                            </td>
                            <td>
                                NZD$ {{$product->price}}
                            </td>
                            <td>
                                {{$product->description}}
                            </td>
                            <td>
                                {{$product->category->name}}
                            </td>
                            <td>
                                {{$product->supplier->name}}
                            </td>
                            <td>
                                <a class="btn btn-outline-primary">Edit</a> |
                                <a class="btn btn-outline-info">Details</a> |
                                <a class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a class="mr-3 btn btn-outline-secondary" style="width:100px;">
                    Previous
                    </a>
                    <a class="ml-3 btn btn-outline-secondary" style="width:100px;">
                    Next
                    </a>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


@endsection