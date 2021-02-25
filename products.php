<?php

    $active='Products';

    include("includes/header.php");

 ?>

<h1>e-SHOP</h1>
<h2>Products</h2>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">


    
<?php
//for dispalying products and messages after adding products
$result = mysqli_query($conn,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>£".$row['price']."</div>
    <button type='submit' class='buy'>Add To Bakset</button>
    </form>
    </div>";
        }
mysqli_close($conn);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

      <!-- <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="images\products\women2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Women shoes</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-primary">Add To Basket</button>
                <button type="button" class="btn btn-sm btn-secondary">View</button>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="images\products\men2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Men Jacket</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-primary">Add To Basket</button>
                <button type="button" class="btn btn-sm btn-secondary">View</button>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="images\products\women1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Women Jumper</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-primary">Add To Basket</button>
                <button type="button" class="btn btn-sm btn-secondary">View</button>

              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</div>

<?php


include("includes/footer.php");

?>