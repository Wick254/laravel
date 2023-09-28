<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .top-nav li{
          display: inline;
       }
    </style>
</head>
<body>
    
    <div class="top-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/register">Register</a></li>
      <li><a href="/login">Login</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </div>
    <h1>Login <span><a href="/register">Register</a></span></h1>
    <form action="">
        <div>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter your password">
        </div>
        <div>
            <input type="submit" name="login" value="login">
        </div>
    </form>
</body>
</html>