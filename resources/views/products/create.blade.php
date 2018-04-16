@component('layouts.default')
    <form action="{{ route('products.store') }}" class="form-horizontal" method="post">
        @include('products.form')
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-xs btn-default">Back</a>
@endcomponent
