<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Login</title>
  </head>
  <body>

    <div class="container">
      <div class="left">
        <div class="vertical">
          <h1>WELCOME BACK TO</h1>
          <img src="{{asset('img/foot.png')}}" alt="logo" />
        </div>
        <button class="but"><a class="but" href="signup">SIGN UP</a></button>
      </div>
      <div class="right">
        @yield('content')
      </div>
    </div>
  
  </body>
</html>
