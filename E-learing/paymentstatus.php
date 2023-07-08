<!---Start header--->
<?php
  include('./header.php');
  ?>
  <br><br><br><br>
<!---End header--->
<!---start main content--->
<div class="container">
  <h2 class="text-center my-4">Payment Status</h2>
  <form method="post" action="">
    <div class="form-group row">
      <label class="offset-sm-3 col-form-label">Order ID: </label>
      <div>
        <input type="text" class="form-control mx-3">
        </div>
      <div>
        <input type="submit" class="btn btn-primary mx-4" value="View">
      </div>
    </div>
  </form>
</div>
<!--End main content--->
<!---Start Contact Us-->
<?php
include('./contact.php');
?>
<!---End Contact Us-->
<!---start footer-->
<?php
  include('./footer.php');
?>
<!---End footer--->