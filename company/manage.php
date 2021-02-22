<?php
include 'header.php';
include 'navbar.php';
include 'conn.php';
if (isset($_POST['submit'])) {
    $OfferId = $_POST['OfferId'];
    $sql = "DELETE FROM offers  WHERE OfferId=$OfferId";
    if ($con->query($sql) === true) {
        $message = "it is deleted successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}
?>
<div class="container" style="margin-top: 50px;">
  <h1 class="text-center">Manage Offers</h1>
  <a href="newoffer.php" class="btn btn-success pull-right"> <i class="fas fa-plus fa-lg"></i> Add New</a>
  <br />
  <br />
  <table class="table table-striped table-hover table-bordered border-primary">
    <thead class="border bottom font-weight:bold bg-info text-center">
      <tr>
        <td>#</td>
        <td>Title</td>
        <td>Date</td>
        <td>Qualifications</td>
        <td>Experience</td>
        <td>Salary</td>
        <td>Work Days</td>
        <td>Work Hours</td>
        <td>Description</td>
        <td colspan="2">
          Action
        </td>
      </tr>
    </thead>
    <tbody>
      <?php
$sql = "select * from offers where CompanyId=" . $_SESSION['CompanyId'];
$result = mysqli_query($con, $sql);
$R = 0;
while ($obj = mysqli_fetch_object($result)): $R = $R + 1;?>
      <tr>
        <td><?php echo $R; ?></td>
        <td><?php echo $obj->Title; ?></td>
        <td><?php echo $obj->Date; ?></td>
        <td><?php echo $obj->Qualifications; ?></td>
        <td><?php echo $obj->Experience . ' Years'; ?></td>
        <td><?php echo $obj->Salary . ' Sar'; ?></td>
        <td><?php echo $obj->WorkDays . ' Days'; ?></td>
        <td><?php echo $obj->WorkHours . ' Hours'; ?></td>
        <td><?php echo $obj->Description; ?></td>
        <td>
          <a href="editoffer.php?OfferId=<?=$obj->OfferId?>" class="btn btn-warning"> <i class="far fa-edit fa-lg"></i>
            Edit </a>
        </td>
        <td>
          <form action="" method="POST">
            <input type="hidden" name="OfferId" value="<?=$obj->OfferId?>" class="form-control" required
              autocomplete="off">
            <button type="submit" name="submit" class="btn btn-danger"><i
                class="fa fa-trash-alt fa-lg  float-right"></i> Delete</button>
          </form>
        </td>
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