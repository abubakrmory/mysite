<?php
include 'header.php';
include 'navbar.php';
include "conn.php";
if (isset($_POST['submit'])) {
    $CompanyId = $_SESSION['CompanyId'];
    $OfferId = $_POST['OfferId'];
    $Title = $_POST['Title'];
    $Date = $_POST['Date'];
    $Qualifications = $_POST['Qualifications'];
    $Experience = $_POST['Experience'];
    $Salary = $_POST['Salary'];
    $WorkDays = $_POST['WorkDays'];
    $WorkHours = $_POST['WorkHours'];
    $Description = $_POST['Description'];
    $sql = "UPDATE offers SET Title='{$Title}',Date='{$Date}',Qualifications='{$Qualifications}',Experience='{$Experience}',Salary='{$Salary}',WorkDays='{$WorkDays}',WorkHours='{$WorkHours}',Description='{$Description}' WHERE OfferId=$OfferId";
    if ($con->query($sql) === true) {
        $message = "it is updated successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}
if (isset($_GET['OfferId'])) {
    $OfferId = mysqli_real_escape_string($con, $_GET['OfferId']);
    $sql = "SELECT * FROM offers WHERE OfferId=$OfferId";
    $result = mysqli_query($con, $sql);
    $offer = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}
?>
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <?php if ($offer): ?>
    <div class="col-md-8 col-md-offset-2 well">
      <h1 class="text-center">Edit Offer</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Title</label>
          <div class="col-md-9">
            <input type="hidden" name="OfferId" value="<?=$offer['OfferId']?>" class="form-control" required
              autocomplete="off">
            <input type="text" name="Title" value="<?=$offer['Title']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Date</label>
          <div class="col-md-9">
            <input type="Date" name="Date" value="<?=$offer['Date']?>" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Qualifications</label>
          <div class="col-md-9">
            <input type="text" name="Qualifications" value="<?=$offer['Qualifications']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Experience</label>
          <div class="col-md-9">
            <input type="text" name="Experience" value="<?=$offer['Experience']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Salary</label>
          <div class="col-md-9">
            <input type="text" name="Salary" value="<?=$offer['Salary']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Work Days</label>
          <div class="col-md-9">
            <input type="text" name="WorkDays" value="<?=$offer['WorkDays']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Work Hours</label>
          <div class="col-md-9">
            <input type="text" name="WorkHours" value="<?=$offer['WorkHours']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Description</label>
          <div class="col-md-9">
            <input type="text" name="Description" value="<?=$offer['Description']?>" class="form-control" required
              autocomplete="off">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" name="submit" class="btn btn-success btn-block"><i class="far fa-save fa-lg "></i>
              Update
              Offer</button>
          </div>
          <div class="col-md-6">
            <a href="manage.php" class="btn btn-primary btn-block"><i class="fas fa-undo fa-lg"></i> Return </a>
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