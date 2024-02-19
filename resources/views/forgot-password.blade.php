
@extends('base')

@section('content')
    

    <main>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <p>We will send link to your email, use that link to reset password</p>
            <div class="mid">
              <form action="{{route('forgot.password')}}" method="POST">
                @csrf
                <div class="box">
                  <label for="">Email</label>
                  <input class="input-field" type="text" name="email" />
                </div>
               
                <button class="log">Submit</button>
              </form>
            </div>
        </main>
      
        @endsection
{{-- </body>
</html> --}}

@section('name')
    
@endsection

  
    
