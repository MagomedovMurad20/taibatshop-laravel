@extends('mytemp.layouts.default')
@section('content')
<div class="container  ">
@foreach ($data as $product)
<div id="center">
        <div class="product_item">
       <img  style="width:265px; height:345px" {{ $product->img }}/>

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
