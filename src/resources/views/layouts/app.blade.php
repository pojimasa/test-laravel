<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        FashionablyLate
      </a>
      @if(Request::is('login'))
      <div class="login__link">
        <a class="login__button-submit" href="/register">register</a>
      </div>
      @endif
      @if(Request::is('register'))
      <div class="register__link">
        <a class="register__button-submit" href="/login">login</a>
      </div>
      @endif
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>