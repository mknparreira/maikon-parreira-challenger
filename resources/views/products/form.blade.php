{!! csrf_field() !!}
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group">
    <label for="name" class="control-label col-sm-2">Name</label>
    <div class="col-sm-10">
        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name ?? '' }}" placeholder="Name...">
    </div>
</div>
<div class="form-group">
    <label for="cost" class="control-label col-sm-2">Cost</label>
    <div class="col-sm-10">
        <input type="text" name="cost" id="cost" class="form-control" value="{{ $product->cost ?? '' }}" placeholder="Cost...">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</div>
