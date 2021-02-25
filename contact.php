<?php

    $active='Contact';

    include("includes/header.php");

 ?>

    <h1>e-SHOP</h1>
    <h2>Contact Us</h2>
    <div id="design">
    <form>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Mark" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Otto" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <select class="custom-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
        <option>England</option>
        <option>Wales</option>
        <option>Scotland</option>
        <option>Northern Ireland</option>

      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Post Code</label>
      <input type="text" class="form-control" id="validationDefault05" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit-conatct-form">Submit form</button>
</form>

</div>     

<?php


    include("includes/footer.php");

 ?>