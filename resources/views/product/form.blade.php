<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ $product->name}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ $product->description}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category' }}</label>
    <select class="form-control" name="category_id" id="category_id-field">
        @foreach($category as $c)
            <option value="{{$c->id}}">
                {{$c -> name}}
            </option>
        @endforeach
    </select>
    {{--<input class="form-control" name="category_id" type="number" id="category_id" value="{{ $product->category_id or ''}}" >--}}
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
    <label for="supplier_id" class="control-label">{{ 'Supplier' }}</label>
    <select class="form-control" name="supplier_id" id="supplier_id-field">
        @foreach($supplier as $s)
            <option value="{{$s->id}}">
                {{$s -> name}}
            </option>
        @endforeach
    </select>
    {{--<input class="form-control" name="supplier_id" type="number" id="supplier_id" value="{{ $product->supplier_id or ''}}" >--}}
    {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="number" id="price" value="{{ $product->price}}" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imgUrl') ? 'has-error' : ''}}">
    <label for="imgUrl" class="control-label">{{ 'Imgurl' }}</label>
    {{--<input class="form-control" name="imgUrl" type="text" id="imgUrl" value="{{ $product->imgUrl}}" >--}}
    <input type="file" name="_files" id="_files">
    {!! $errors->first('imgUrl', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
