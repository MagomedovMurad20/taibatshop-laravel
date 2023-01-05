@if (count($products))
            @foreach($products as $product)
                @php
                    $itemQuantity =  $product->pivot->quantity;
                @endphp
<p>В вашей корзине {{ $itemQuantity }}</p>
            @endforeach
@endif