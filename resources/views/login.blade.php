<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Simple form validation</title>
  </head>
  <body>

  <div class = "container col-4 card bg-info p-4 mt-5">


  <form action = "{{url('/submitForm')}}" method = "post>
  @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        
        <input type="email" name = "email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('email')
            <span class = "alert alert-danger">{{$message}}</span>
        @enderror        
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name = "password" class="form-control" id="exampleInputPassword1">

        @error('password')
            
            <span class = "alert alert-danger">{{$message}}</span>
        @enderror

      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" name = "check" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>

        @error('check')
          <br>
          <span class = "alert alert-danger"> {{$message}} </span>

        @enderror


      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>