@extends('mytemp.layouts.default')
@section('content')
<div class="container  ">

@foreach ($data as $product)
<div id="center">
        <div class="product_item">
            @php echo '<img src="data:image/jpeg;base64,'.chunk_split(base64_encode($product->img)).'" style="width:265px; height:345px"/>' @endphp
            <h2>
             {{$product->title}}
            </h2>

            <p>
               {{ $product->description}}
            </p>


            <p><strong>
                    {{ $product->price }}rur
            </strong></p>
                     <a href="/">
                Подробнее
            </a>

            <a href="/корз">
                В корзину
            </a>
        </div>
</div>
@endforeach
 
</div>
@endsection
