
<header>
  <div id="top"></div>
  <nav class="top-menu" id="navbar">
    <ul class="menu-main">
      <li><a href="{{route('/')}}" >Главная</a></li>
      <li><a href="{{route('/kurtki')}}?category_id=2&page=kurtki" >Куртки</a></li>
      <li><a href="{{route('/platya')}}?category_id=1&page=platya" >Платья</a></li>
      <li><a href="{{route('/costums')}}?category_id=3&page=trikotaj" >Трикотаж</a></li>
      <li><a href="{{route('/signin')}}?page=login" >Войти</a></li>
      @if (Auth::check())
              <li><a href="{{route('/admin')}}?page=login" >Админка</a></li>
      @endif
      <li>
        select product category
      </li>
      <li>
        <a href="#ufive-feedback" onclick="feedBackOpen();">Связаться с нами</a>
      </li>
      <li>
        <a href="#" onclick="cartOpen();">

          small cart
        </a>
      </li>
cart popup
    </ul>

  </nav>

</header>
