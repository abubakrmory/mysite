<?php
include 'header.php';
include 'navbar.php';
include 'conn.php';

?>




<div class="container" style="margin-top: 50px;">
<h1 class="text-center" >Manage Offers</h1>
<a href="newoffer.php" class="btn btn-success pull-right"> <i class="fas fa-plus"></i> Add New</a>
<br/>
<br/>
<table class="table table-striped table-hover table-bordered border-primary">
  <thead class="border bottom font-weight:bold">
    <tr>
      <td>#</td>
      <td>Title</td>
      <td>Date</td>
      <td>Qualifications</td>
      <td>Experience</td>
      <td>Salary</td>
      <td>WorkDays</td>
      <td>WorkHours</td>
      <td>Description</td>
      <td>
        Action
      </td>
    </tr>
  </thead>
  <tbody>
    
    <?php
$sql = "select * from offers ";
$result = mysqli_query($con, $sql);
$R=0;
while ($obj = mysqli_fetch_object($result))
{ 
  $R=$R+1;
  ?>
  <tr>
        
        <td><?php  echo $R; ?></td>
        <td><?php  echo $obj->Title; ?></td>
        <td><?php  echo $obj->Date; ?></td>
        <td><?php  echo $obj->Qualifications; ?></td>
        <td><?php  echo $obj->Experience; ?></td>
        <td><?php  echo $obj->Salary; ?></td>
        <td><?php  echo $obj->WorkDays; ?></td>
        <td><?php  echo $obj->WorkHours; ?></td>
        <td><?php  echo $obj->Description; ?></td>
       
    
      <td>
        <a href="editoffer.php?OfferId=<?php  echo $obj->OfferId; ?>" class="btn btn-warning"> <i class="far fa-edit fa-lg"></i> Edit </a>
        <a href="#" class="btn btn-danger"><i class="fa fa-trash-alt fa-lg  float-right"></i> Delete</a>
      </td>
    
    </tr>
   <?php }  ?>
   
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