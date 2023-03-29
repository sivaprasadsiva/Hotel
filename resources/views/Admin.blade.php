<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assests/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="form-box mt-5">
        <h1>Register</h1>
        <form action="{{ route('Adminregisterform') }}" method="post">
            @csrf
          <div class="form-group">
             {{-- name field  --}}
            <label for="name">Username</label>
            <input class="form-control" id="name" type="text" name="name">
          </div>

          {{-- email field  --}}
          <div class="form-group">
            <label for="name">Email</label>
            <input class="form-control" id="email" type="text" name="email">
          </div>

          {{-- Phone number  --}}
          <div class="form-group">
            <label for="name">Mobile Number</label>
            <input class="form-control" type="tel" id="phone" name="phone" pattern="[56789][0-9]{9}">
        </div>

          {{-- Password  --}}
          <div class="form-group">
            <label for="email">Password</label>
            <input class="form-control" id="password" type="password" name="password">
          </div>

          <input class="btn btn-primary mt-3" type="submit" value="Submit"/>
          </div>
        </form>
      </div>
</body>
</html>


