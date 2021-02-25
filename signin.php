<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

  <title>Signin Template for Bootstrap</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="includes/login.php" method="post">
    <img class="mb-4" src="images\products\logo.png" alt="" width="72" height="72">

    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

    <label for="inputEmail" class="sr-only">User ID</label>
    <input name="mailuid" type="text" id="inputEmail" class="form-control" placeholder="User ID" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input name="pwd" type="password" id="inputPassword" class="form-control" placeholder="Password" required>


    <button name="login-submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    <div class="login-signup">

      <p>Not Registered yet! <a href="signup.php">Signup</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  
     </div>
  </form>
</body>

</html>