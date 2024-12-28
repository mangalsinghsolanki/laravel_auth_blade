<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
<div class="row">
    <div class="col-sm-8 mx-auto">
        <h1 class="text-center text-light bg-secondary">User Registration Form</h1>
        <form action="{{ route('registerProcess') }}" method="post" class="form-control">
            @csrf

            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
            <label for="email" class="form-label">Email</label>

            <input type="text" name="email" id="email" class="form-control">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="text" name="password_confirmation" id="password_confirmation" class="form-control">
            @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
        @enderror
            <input type="checkbox" class="form-check-input" name="term" id="term">
            I agree with Terms & Conditions. <br>
            <input type="submit" value="Create Account" class="btn btn-primary mt-2">

        </form>
        <span class="text-success">Already an account</span>
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>
</div>

   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
