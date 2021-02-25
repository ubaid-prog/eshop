<?php
     session_start();

     // shopping cart code

     include_once 'dbh.inc.php';
     $status="";
     if (isset($_POST['code']) && $_POST['code']!=""){
     $code = $_POST['code'];
     $result = mysqli_query(
     $conn,
     "SELECT * FROM `products` WHERE `code`='$code'"
     );
     $row = mysqli_fetch_assoc($result);
     $name = $row['name'];
     $code = $row['code'];
     $price = $row['price'];
     $image = $row['image'];
      
     $cartArray = array(
      $code=>array(
      'name'=>$name,
      'code'=>$code,
      'price'=>$price,
      'quantity'=>1,
      'image'=>$image)
     );
      
     if(empty($_SESSION["shopping_cart"])) {
         $_SESSION["shopping_cart"] = $cartArray;
         $status = "<div class='box'>Product is added to your cart!</div>";
     }else{
         $array_keys = array_keys($_SESSION["shopping_cart"]);
         if(in_array($code,$array_keys)) {
      $status = "<div class='box' style='color:red;'>
      Product is already added to your cart!</div>"; 
         } else {
         $_SESSION["shopping_cart"] = array_merge(
         $_SESSION["shopping_cart"],
         $cartArray
         );
         $status = "<div class='box'>Product is added to your cart!</div>";
      }
      
      }
     }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <title>e-SHOP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">e-SHOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php" tabindex="-1" >Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" tabindex="-1" >About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1" >Contact</a>
      </li>
    </ul>
    <?php

if (isset($_SESSION['userid'])){
  echo '<ul class="nav navbar">
 
  <form action="includes/logout.inc.php" method="POST">
  <button class="btn btn-secondary"  type="submit"><i class="fa fa-sign-out"></i> Logout </button>
  
</form>
  
</ul>';
}else{
  echo '<ul class="nav navbar">

  <form action="signin.php" method="POST">
  <button class="btn btn-secondary" type="submit" ><i class="fa fa-sign-in"></i> Login </button>
  
</form>
  </ul>

  <ul class="nav navbar">
  <form action="signup.php" method="POST">
  <button class="btn btn-secondary" type="submit"><i class="fa fa-user-plus"></i> Signup</button>    
  </ul>';
}

?>

<?php
// php code for dispalying items
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="includes/cart.php"><i class="fa fa-shopping-basket"></i>
<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>



  </div>
</nav>

