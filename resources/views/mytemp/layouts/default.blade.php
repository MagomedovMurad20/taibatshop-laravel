@include('mytemp.includes.head');
@include('mytemp.includes.header');
@include('mytemp.includes.content')
@if ('admin')
    @include('mytemp.pages.admin')
@endif
@include('mytemp.includes.footer');
