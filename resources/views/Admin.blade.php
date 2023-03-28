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
        <form class="form1" method="post" action="{{ route('Adminregisterform') }}">
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