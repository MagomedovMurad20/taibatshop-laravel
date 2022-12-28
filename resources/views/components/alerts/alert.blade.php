@if (Session::has('info'))
  <div style="background-color: rgb(167, 133, 89)">
    {{ Session::get('info') }}
  </div>
@endif