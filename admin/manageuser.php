<?php
include 'header.php';
include 'navbar.php';
include 'conn.php';
if (isset($_POST['submit'])) {
    $CompanyId = $_POST['CompanyId'];
    $sql = "DELETE FROM company  WHERE CompanyId=$CompanyId";
    if ($con->query($sql) === true) {
        $message = "it is deleted successfully..";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "<script type='text/javascript'>alert(" . $con->error . ");</script>";
    }
}
?>
<div class="container" style="margin-top: 50px;">
  <h1 class="text-center">Manage User Account</h1>
  <br />
  <br />
  <table class="table table-striped table-hover table-bordered border-primary">
    <thead class="border bottom font-weight:bold bg-info text-center">
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Qualifications</td>
        <td>Experience</td>
        <td>Username</td>
        <td>Password</td>
        <td colspan="2">
          Action
        </td>
      </tr>
    </thead>
    <tbody>
      <?php
$sql = "select * from user ";
$result = mysqli_query($con, $sql);
$R = 0;
while ($obj = mysqli_fetch_object($result)): $R = $R + 1;?>
      <tr>
        <td><?php echo $R; ?></td>
        <td><?php echo $obj->Name; ?></td>
        <td><?php echo $obj->Gender; ?></td>
        <td><?php echo $obj->Phone; ?></td>
        <td><?php echo $obj->Email; ?></td>
        <td><?php echo $obj->Qualifications; ?></td>
        <td><?php echo $obj->Experience; ?></td>
        <td><?php echo $obj->Username; ?></td>
        <td><?php echo $obj->Password; ?></td>
        <td>
          <a href="editcompany.php?CompanyId=<?=$obj->CompanyId?>" class="btn btn-warning"> <i
              class="far fa-edit fa-lg"></i>
            Edit </a>
        </td>
        <td>
          <form action="" method="POST">
            <input type="hidden" name="CompanyId" value="<?=$obj->CompanyId?>" class="form-control" required
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