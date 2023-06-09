<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assests/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="display">
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 fs-1 mt-4 ms-2">CartRabbit</span>
          </div>
      </nav>
    </div>
      <div class="dashboard-container">
        <div class="menu-container">
            <ul>
                <li class=""><a href="{{ route('user-home') }}">Welcome {{ auth()->user()->name }}</a></li>
                <li><a href="{{ route('user-home') }}">Home</a></li>
                {{-- <li><a href="#">Profile</a></li> --}}
                <li><a href="{{ route('logout-page') }}">Logout</a>
                </li>
            </ul>
        </div>
        <div class="content-container">
            @yield('main_content')
        </div>
    </div>
</div>
</body>
</html>
