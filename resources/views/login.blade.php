
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="{{ asset('assests/login.css') }}">

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1 fs-1 mt-4 ms-4">CartRabbit</span>
        </div>
      </nav>
        <div class="form-box mt-5">
    <h1>Login</h1>
    <form action="{{ route('login-form') }}" method="post">
        @csrf
      <div class="form-group">
        <label for="name">Email</label>
        <input class="form-control" id="mail" type="text" name="email">
      </div>
      <div class="form-group">
        <label for="email">Password</label>
        <input class="form-control" id="password" type="password" name="password">
      </div>
      <div class="mt-3">
        <a href="{{ route('register') }}">Sign In as User</a>
      </div>
      <div class="mt-1">
        <a href="{{ route('Adminregister')}}">Sign In as Home Owner</a>
      </div>

      <input class="btn btn-primary mt-3" type="submit" value="Submit" />
      </div>
    </form>
  </div>

</body>
</html>



