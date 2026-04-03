@if($products->isEmpty())
    <p>No products found. (Try adding some in your database!)</p>
@else
    @foreach($products as $product)
        <p>{{ $product->name }} - {{ number_format($product->price, 2) }} (Qty: {{ $product->quantity }})</p>
    @endforeach
@endif