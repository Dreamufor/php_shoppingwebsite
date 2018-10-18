@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="text-center text-dark">Category</h2>

                <p class="text-right">
                    <a href="{{ url('/category/create')  }}" class="btn btn-outline-secondary">Create New</a>
                </p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Description
                        </th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($category as $c)

                        <tr>
                            <td>
                                {{$c->name}}
                            </td>
                            <td>
                                {{$c->description}}
                            </td>
                            <td>
                                <a href="{{ url('/category/edit')  }}" class="btn btn-outline-primary">Edit</a> |
                                <a href="{{ url('/category/show')  }}" class="btn btn-outline-info">Details</a> |
                                <a href="{{ url('/category/delete')  }}" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

@endsection