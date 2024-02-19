<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    
    <form action="/logout" method="POST">
        @csrf
    <button>Log Out</button>
</form>

@else
    
<form action="/signin" method="GET">
    @csrf
    
    <button>SIGN IN</button>
</form>
<form action="/signup" method="GET">
    @csrf
    <button>SIGN UP</button>
</form>
@endauth
</body>
</html>