@if (Session::has('info'))
  <div>
    {{ Session::get('info') }}
  </div>
@endif