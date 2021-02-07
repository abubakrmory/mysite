<?php
include 'header.php';
include 'navbar.php';
require_once "conn.php";
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql = "INSERT INTO company (Name,Phone,Address,Email,Username,Password)
      VALUES ('{$Name}','{$Phone}','{$Address}','{$Email}','{$Username}','{$Password}');";
    if ($con->query($sql) === true) {
        $message = "it is saved successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}
?>




<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 well">
      <h1 class="text-center" style="color:#FFF !important;">Create New Account For Company</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Name</label>
          <div class="col-md-9">
            <input type="text" name="Name" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Phone</label>
          <div class="col-md-9">
            <input type="text" name="Phone" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Email</label>
          <div class="col-md-9">
            <input type="email" name="Email" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Address</label>
          <div class="col-md-9">
            <input type="text" name="Address" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Username</label>
          <div class="col-md-9">
            <input type="text" name="Username" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Password</label>
          <div class="col-md-9">
            <input type="password" name="Password" class="form-control" required autocomplete="off">
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
      </form>
    </div>
  </div> <!-- row -->
</div> <!-- container -->






<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>