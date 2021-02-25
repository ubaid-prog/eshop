<?php

    $active='Home';

    include("includes/header.php");

 ?>
<h1>e-SHOP</h1>
<main>
  <?php

        if (isset($_SESSION['userid'])){
          echo ' <p>You are logged in!</p>';
        }else{
          echo ' <p>You are logged out!</p>';
        }

      ?>


</main>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\slides\slider1.png" style="height:485px; width:100%;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\slides\slide2.png" style="height:485px; width:100%;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\slides\slide3.png" style="height:485px; width:100%;" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php


    include("includes/footer.php");

 ?>