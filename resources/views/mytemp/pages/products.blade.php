@extends('mytemp.layouts.default')
@section('content')
<div class="container  ">

@foreach ($data as $product)
<div id="center">
        <div class="product_item">
                        {{--
                        Blob который записывался в базу данных без предварительного base_encode64()
                        при получении и выводе из БД представляет собой строку, начинающуюся с '/9j',
                        а так как на предыдущем проекте запись была без енкода, а в этом проекте мы 
                        сразу же при записи в БД записываем с base_encode64(), то возникла необходимость сделать ифелс, чтобы выводить и те и те блобы.
                         --}}
            @if (str_starts_with($product->img,'/9j' )) 
            
       
                            <img src="data:image/jpg;base64,{{$product->img}}" height="345" width="265"> 
  
            @else
                    <img src="data:image/jpg;base64,{{ chunk_split(base64_encode($product->img)) }}" height="345" width="265">  
                         
            @endif
 
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
  