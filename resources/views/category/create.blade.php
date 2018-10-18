
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2>Create</h2>

            <h4>Category</h4>
            <hr />
                    <form role="form" method="POST" action="{{ action('CategoryController@create') }}">

                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" id="name" value="{{ $name }}" autofocus class="form-control" />

                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>
                            <input type="text" name="description" id="description" value="{{ $description }}" autofocus class="form-control" />

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-secondary" />
                        </div>
                    </form>
            <div>
                <a href="{{ url('/category/index')  }}">Back to List</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

@endsection