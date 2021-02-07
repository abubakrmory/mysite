<?php
include 'header.php';
include 'navbar.php';
require_once "conn.php";
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Gender = 'Female'; #$_POST['Gender'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Qualifications = $_POST['Qualifications'];
    $Experience = $_POST['Experience'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql = "INSERT INTO user (Name,Gender,Phone,Email,Qualifications,Experience,Username,Password)
      VALUES ('{$Name}','{$Gender}','{$Phone}','{$Email}','{$Qualifications}','{$Experience}','{$Username}','{$Password}');";
    if ($con->query($sql) === true) {
        $message = "it is saved successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}
?>




<div class="container" style="margin-top: 20px;">





  <div class="row">
    <div class="col-md-8 col-md-offset-2 well">
      <h1 class="text-center" style="color:#FFF !important;">Create New Account For User (Women)</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Name</label>
          <div class="col-md-9">
            <input type="text" name="Name" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Gender</label>
          <div class="col-md-9">
            <select name="Gender" class="form-control" required>
              <!-- <option>Male</option> -->
              <option>Female</option>
            </select>
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
          <label class="col-md-3 col-form-label">Qualifications</label>
          <div class="col-md-9">
            <input type="text" name="Qualifications" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Experience</label>
          <div class="col-md-9">
            <input type="text" name="Experience" class="form-control" required autocomplete="off">
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