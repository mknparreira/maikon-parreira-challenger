@component('layouts.default')
    <p>
        <small>
            <strong>Created at </strong> {{ $product->created_at->format('d/m/Y H:i:s') }} |
            <strong>Updated at </strong> {{ $product->updated_at->format('d/m/Y H:i:s') }}
         </small>
    </p>
    <p><strong>Name:</strong> {!! $product->name !!} </p>
    <p><strong>Cost:</strong> €{!! $product->cost !!} </p>

    <a href="{{ route('products.index') }}" class="btn btn-xs btn-default">Back</a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-xs btn-default">Edit</a>

    <form action="{{ route('products.destroy', $product->id) }}" class="form-horizontal"
        method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Remove" class="btn btn-xs btn-default">
    </form>
@endcomponent
