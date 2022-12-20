<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">

  <title>taiba-shop</title>
</head>
<body>
@include('mytemp.includes.header')
<div class="container">
    @yield('content')

</div>
@include('mytemp.includes.footer')
</body>
</html>