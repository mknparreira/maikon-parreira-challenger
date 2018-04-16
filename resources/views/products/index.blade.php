@component("layouts.default")
    <a href="{{ route('products.create') }}" class="btn btn-default">New</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-default btn-xs">
                           {{ $product->name }}
                        </a>
                    </td>
                    <td>€{{ $product->cost }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endcomponent
