<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="main.css">
  <script src="script.js" ></script>
  <title>taiba-shop</title>
</head>
<body>
@include('mytemp.includes.header')
<div class="container">
    @include('components.alerts.alert')
    @yield('content')

</div>
@include('mytemp.includes.footer')
</body>
</html>