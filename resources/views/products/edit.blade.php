@component('layouts.default')
    <form action="{{ route('products.update', $product->id) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('products.form')
    </form>
    <a href="{{ route('products.show', $product->id) }}" class="btn btn-xs btn-default">Back</a>
@endcomponent
