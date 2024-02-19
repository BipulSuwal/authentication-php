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
        <p>SIGN IN HERE</p>
        <div class="mid">
          <form action="/signin" method="POST">
            @csrf
            <div class="box">
              <label for="">Email</label>
              <input class="input-field" type="text" name="email" />
            </div>
            <div class="box">
              <label for="">Password</label>
              <input
                class="input-field"
                type="password"
                name="password"
                placeholder=""
              />
            </div>
            <div>
              <a href="*">Forgot Password?</a>
            </div>

            <button class="log">LOG IN</button>
          </form>
        </div>
      </div>
    </div>
  @yield('content')
  </body>
</html>
