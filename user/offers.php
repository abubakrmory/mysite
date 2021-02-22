<?php
include 'header.php';
include 'navbar.php';
include 'conn.php';
?>
<div class="container" style="margin-top: 50px;">
  <h1 class="text-center">View Offers</h1>
  <br>
  <br>
  <table class="table table-striped table-hover table-bordered border-primary">
    <thead class="border bottom font-weight:bold bg-info text-center">
      <tr>
        <td>#</td>
        <td>Company</td>
        <td>Title</td>
        <td>Date</td>
        <td>Qualifications</td>
        <td>Experience</td>
        <td>Salary</td>
        <td>Work Days</td>
        <td>Work Hours</td>
        <td>Description</td>
      </tr>
    </thead>
    <tbody>
      <?php
$sql = "select company.Name,offers.Title,offers.Date,offers.Qualifications,offers.Experience,offers.Salary,offers.WorkDays,offers.WorkHours,offers.Description from offers inner join company on offers.CompanyId=company.CompanyId";
$result = mysqli_query($con, $sql);
$R = 0;
while ($obj = mysqli_fetch_object($result)): $R = $R + 1;?>
      <tr>
        <td><?php echo $R; ?></td>
        <td><?php echo $obj->Name; ?></td>
        <td><?php echo $obj->Title; ?></td>
        <td><?php echo $obj->Date; ?></td>
        <td><?php echo $obj->Qualifications; ?></td>
        <td><?php echo $obj->Experience . ' Years'; ?></td>
        <td><?php echo $obj->Salary . ' Sar'; ?></td>
        <td><?php echo $obj->WorkDays . ' Days'; ?></td>
        <td><?php echo $obj->WorkHours . ' Hours'; ?></td>
        <td><?php echo $obj->Description; ?></td>
      </tr>
      <?php endwhile?>
    </tbody>
  </table>
</div> <!-- container -->






<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>