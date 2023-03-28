<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="box">
        <h1>Register Now</h1>
        <form class="form1" method="post" action="{{ route('registerform') }}">
            @csrf
            <label for="name" class="label1">Name:</label>
            <input type="text" class="area" name="name" id="first"><br>

            <label for="email" class="label1">Email:</label>
            <input type="text" class="area" name="email" id="second"><br>

            <label for="password" class="label1">Password:</label>
            <input type="password" class="area" name="password" id="third"><br>

            <label for="confirm" class="label1">Confirm Password:</label>
            <input type="password" class="area" name="confirm" id="four"><br>

            <input type="submit" value="Register" class="btn" id="ok">
        </form>
    </div>
</body>
</html>

<!-- <p>Hello Siva</p> -->


<!-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">{{ __('Name') }}</label>

        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="mobile">{{ __('Mobile Number') }}</label>

        <div>
            <input id="mobile" type="text" name="mobile" value="{{ old('mobile') }}" required>
        </div>
    </div>

    <div>
        <label for="email">{{ __('Email Address') }}</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>

        <div>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Register') }}
        </button>
    </div>
</form> -->





