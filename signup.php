<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

  <title>Sign Up</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="includes/signup.inc.php" method="POST">
    <img class="mb-4" src="images\products\logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
     
    <?php
      
      if (isset($_GET['signup'])){
        if ($_GET['signup'] == "empty"){
          echo '<p class="signuperror">Fill in all fields </p>';

   
      }else  if ($_GET['signup'] == "success"){
        
        echo '<p class="signupsuccess" > Signup successful! </p>';

      }     }


    ?>
  

    <label for="fullName" class="sr-only">Full Name</label>
    <input type="text" name="name" id="fullName" class="form-control" placeholder="Full Name" autofocus>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email Address" autofocus>

    <label for="userName" class="sr-only">User Name</label>
    <input type="text" name="uid" id="userName" class="form-control" placeholder="User name" autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password">



    <button name="submit-form" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

    <div class="signup-login">

    <p>Already have an Account with us! <a href="signin.php">Login</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>

    </div>
  </form>

    </body>

</html>