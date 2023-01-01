@extends('mytemp.layouts.default')
@section('content')
<div class="container  ">
@foreach ($data as $feedback)
<div id="center">
        <div class="feedback_item">
 
            <h2>
             {{$feedback->name}}
            </h2>

            <p>
               {{ $feedback->phone}}
            </p>


            <p><strong>
                    {{ $feedback->message }}rur
                    </strong>
            </p>


        </div>
</div>
@endforeach
@endsection