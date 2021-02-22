<?php
include 'header.php';
include 'navbar.php';
include "conn.php";
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    header("Location:../index.php");
} else {
    $CompanyId = $_SESSION['CompanyId'];
    $sql = "SELECT * FROM Company WHERE CompanyId=$CompanyId";
    $result = mysqli_query($con, $sql);
    $Company = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}
?>
<div class="container-fluid mt-2">
  <h1>Welcome <?=$Company['Name']?></h1>

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>