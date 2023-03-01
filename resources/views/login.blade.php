<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
    <style>
      .main{
        height: 100vh;
        box-sizing: border-box;
      }
      .login-box{
        width: 500px;
        border: solid 1px;
        padding: 30px;

      }
    </style>
  </head>
  <body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
      @if (session('status'))
          <div class="alert alert-danger">
            {{session('message')}}
          </div>
      @endif
      <div class="login-box">
        <h1 class="text-center">Login</h1>
        <form action="" method="post">
          @csrf
          <div>
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
          </div>
          <div>
            <label for="password" class="form-label mt-3">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
          </div>
          <div>
            <button type="submit" class="btn btn-success form-control mt-3">Login</button>
          </div>
          <div class="text-center">
            Dont' have account?<a href="register">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>