<?php
include 'header.php';
include 'navbar.php';
include "conn.php";
if (isset($_POST['submit'])) {
    $CompanyId = $_POST['CompanyId'];
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql = "UPDATE company SET Name='{$Name}',Phone='{$Phone}',Address='{$Address}',Email='{$Email}',Username='{$Username}',Password='{$Password}' WHERE CompanyId=$CompanyId";
    if ($con->query($sql) === true) {
        $message = "it is updated successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}

if (isset($_GET['CompanyId'])) {
    $CompanyId = mysqli_real_escape_string($con, $_GET['CompanyId']);
    $sql = "SELECT * FROM company WHERE CompanyId=$CompanyId";
    $result = mysqli_query($con, $sql);
    $company = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}
?>
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <?php if ($company): ?>
    <div class="col-md-8 col-md-offset-2 well">
      <h1 class="text-center">Update Company</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Name</label>
          <div class="col-md-9">
            <input type="hidden" name="CompanyId" value="<?=$company['CompanyId']?>" class="form-control" required
              autocomplete="off">
            <input type="text" name="Name" value="<?=$company['Name']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Phone</label>
          <div class="col-md-9">
            <input type="text" name="Phone" value="<?=$company['Phone']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Email</label>
          <div class="col-md-9">
            <input type="text" name="Email" value="<?=$company['Email']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Address</label>
          <div class="col-md-9">
            <input type="text" name="Address" value="<?=$company['Address']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Username</label>
          <div class="col-md-9">
            <input type="text" name="Username" value="<?=$company['Username']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Password</label>
          <div class="col-md-9">
            <input type="text" name="Password" value="<?=$company['Password']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" name="submit" class="btn btn-success btn-block"><i class="far fa-save fa-lg "></i>
              Update
              Company</button>
          </div>
          <div class="col-md-6">
            <a href="index.php" class="btn btn-primary btn-block"><i class="fas fa-undo fa-lg"></i> Return </a>
          </div>
        </div>
      </form>
    </div>
    <?php else: ?>
    <h1>No data</h1>
    <?php endif;?>
  </div> <!-- row -->
</div> <!-- container -->






<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>