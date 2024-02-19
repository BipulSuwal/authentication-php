<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Sign Up</title>
  </head>
  <body>
    
        

        
    <div class="container">
      <div class="left">
        <div class="vertical">
          <h1>WELCOME TO</h1>
          <img src="{{asset('img/foot.png')}}" alt="logo" />
        </div>
        <button class="but"><a class="but" href="signin">SIGN IN</a></button>
      </div>
      <div class="right">
        <p>SIGN UP HERE</p>
        <div class="mid">
          <form action="/signup" method="POST">
            @csrf
            <div class="box">
              <label for="">First Name</label>
              <input class="input-field" type="text" name="firstname" id="" />
            </div>
            <div class="box">
              <label for="">Last Name</label>
              <input class="input-field" type="text" name="lastname" id="" />
            </div>
            <div class="box">
              <label for="">Email</label>
              <input class="input-field" type="text" name="email" id="" />
            </div>
            <div class="box">
              <label for="">Password</label>
              <input
                class="input-field"
                type="password"
                name="password"
                id=""
              />
            </div>
            <div class="box">
              <label for="">Confirm Password</label>
              <input
                class="input-field"
                type="password"
                name="confirmPassword"
              />
            </div>
            <div>
              <label class="ag" for="agree">
                <input class="pp" onclick type="checkbox" name="agree" id="agree" />I
                agree to the terms and policy
              </label>
            </div>
            <button class="log">SIGN UP</button>
          </form>
        </div>
      </div>
    </div>


    
  </body>
</html>
