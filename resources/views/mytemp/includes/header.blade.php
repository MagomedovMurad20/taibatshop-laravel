
<header>
  <div id="top"></div>
  <nav class="top-menu" id="navbar">
    <ul class="menu-main">
      <li><a href="{{route('/')}}" >Главная</a></li>
      <li><a href="{{route('platya')}}" >Платья</a></li>
      <li><a href="{{route('kurtki')}}" >Куртки</a></li>
      <li><a href="{{route('jempers')}}" >Джемперы</a></li>
      <li><a href="{{route('costums')}}" >Костюмы</a></li>
      <li><a href="{{route('kardigans')}}" >Кардиганы</a></li>
      @if (!Auth::check())
              <li><a href="{{route('signin')}}" >Войти</a></li>
      @endif
      @if (Auth::check())
            <li><a href="" >Привет, {{Auth::user()->getname()}}</a></li>
              <li><a href="{{route('admin')}}?page=login" >Админка</a></li>
              <li><a href="{{route('signout')}}" >Выйти</a></li>

      @endif
      <li>
        @include('components.forms.select-product')
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
