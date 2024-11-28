

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                     <div class="alert alert-danger">{{$error}}</div>
                     @endforeach

                </div>
            @endif

            @if(@session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(@session()->has('success'))
            <div class="alert alert-succss">{{session('success')}}</div>
            @endif


        </div>
        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
              <label  class="form-label">Name</label>
              <input type="text" class="form-control" name="name">

            </div>
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" >

              </div>
            <div class="mb-3">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control" name="password" >
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
     @endsection
</body>
</html>


