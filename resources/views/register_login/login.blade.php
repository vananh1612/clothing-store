<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login_Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_login.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
   
    <!-- Login Form -->
    <form method="post" action="{{ route('login') }}">
      @csrf
        <br><h1>Login Form</h1>
        <br>
        <label for="" style="margin-right: 2px">Email:</label>
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email"><br><br>
      <label for="">Pass :</label>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password"><br>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="{{ route('register') }}">Register</a>
    </div>

  </div>
</div>
</body>
</html>