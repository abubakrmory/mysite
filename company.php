<?php
require_once "header.php";
require_once "navbar.php";
require_once "conn.php";
session_start();
if (isset($_POST['username']) || isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from company where username='{$username}' and password='{$password}'";
    if ($result = mysqli_query($con, $sql)) {
        while ($obj = mysqli_fetch_object($result)) {
            $_SESSION['CompanyId'] = $obj->CompanyId;
            $_SESSION['name'] = $obj->name;
            $_SESSION['loggedin'] = true;
            header("Location: company/index.php");
        }
        $message = "Please check username and password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>

<div class="container" style="margin-top: 80px;">

  <div class="row">
    <div class="col-md-6 col-md-offset-3 well">
      <h1 class="text-center" style="color:#FFF !important;">Login Page For Company</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter Username" required
            autocomplete="off">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password" required
            autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
      </form>
      <br />
      <a href="newcompany.php" style="color:#000;" class="text-center">New Company? Create Account Here.</a>
    </div>
  </div>
</div>






<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
