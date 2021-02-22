<?php
include 'header.php';
include 'navbar.php';
require_once "conn.php";
if (isset($_POST['submit'])) {
    $CompanyId=1;
    $Title = $_POST['Title'];
    $Date = $_POST['Date'];
    $Qualifications = $_POST['Qualifications'];
    $Experience = $_POST['Experience'];
    $Salary = $_POST['Salary'];
    $WorkDays = $_POST['WorkDays'];
    $WorkHours = $_POST['WorkHours'];
    $Description = $_POST['Description'];
    $sql = "INSERT INTO offers (CompanyId,Title,Date,Qualifications,Experience,Salary,WorkDays,WorkHours,Description)
      VALUES ('{$CompanyId}','{$Title}','{$Date}','{$Qualifications}','{$Experience}','{$Salary}','{$WorkDays}','{$WorkHours}','{$Description}');";
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
      <h1 class="text-center" >Add New Offer</h1>
      <br />
      <form method="POST" autocomplete="off">
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Title</label>
          <div class="col-md-9">
            <input type="text" name="Title" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Date</label>
          <div class="col-md-9">
            <input type="Date" name="Date" class="form-control" required autocomplete="off">            
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
          <label class="col-md-3 col-form-label">Salary</label>
          <div class="col-md-9">
            <input type="text" name="Salary" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">WorkDays</label>
          <div class="col-md-9">
            <input type="text" name="WorkDays" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">WorkHours</label>
          <div class="col-md-9">
            <input type="text" name="WorkHours" class="form-control" required autocomplete="off">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 col-form-label">Description</label>
          <div class="col-md-9">
            <input type="text" name="Description" class="form-control" required autocomplete="off">
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