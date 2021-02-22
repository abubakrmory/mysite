<?php
include 'header.php';
include 'navbar.php';
include "conn.php";
if (isset($_POST['submit'])) {
    $UserId = $_POST['UserId'];
    $Name = $_POST['Name'];
    $Gender = 'Female'; #$_POST['Gender'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Qualifications = $_POST['Qualifications'];
    $Experience = $_POST['Experience'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $sql = "UPDATE user SET Name='{$Name}',Phone='{$Phone}',
    Qualifications='{$Qualifications}',Experience='{$Experience}',Email='{$Email}',Username='{$Username}',Password='{$Password}' WHERE UserId=$UserId";
    if ($con->query($sql) === true) {
        $message = "it is updated successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}
if (isset($_GET['UserId'])) {
    $UserId = mysqli_real_escape_string($con, $_GET['UserId']);
    $sql = "SELECT * FROM user WHERE UserId=$UserId";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}
?>
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <?php if ($user): ?>
    <div class="col-md-8 col-md-offset-2 well">
      <h1 class="text-center">Update User</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Name</label>
          <div class="col-md-9">
            <input type="hidden" name="UserId" value="<?=$user['UserId']?>" class="form-control" required
              autocomplete="off">
            <input type="text" name="Name" value="<?=$user['Name']?>" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Gender</label>
          <div class="col-md-9">
            <select name="Gender" class="form-control" required>
              <!-- <option>Male</option> -->
              <option selected>Female</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Phone</label>
          <div class="col-md-9">
            <input type="text" name="Phone" value="<?=$user['Phone']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Email</label>
          <div class="col-md-9">
            <input type="email" name="Email" value="<?=$user['Email']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Qualifications</label>
          <div class="col-md-9">
            <input type="text" name="Qualifications" value="<?=$user['Qualifications']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Experience</label>
          <div class="col-md-9">
            <input type="text" name="Experience" value="<?=$user['Experience']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Username</label>
          <div class="col-md-9">
            <input type="text" name="Username" value="<?=$user['Username']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Password</label>
          <div class="col-md-9">
            <input type="password" name="Password" value="<?=$user['Password']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" name="submit" class="btn btn-success btn-block"><i class="far fa-save fa-lg "></i>
              Update
              Profile</button>
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