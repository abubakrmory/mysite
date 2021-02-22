<?php
include 'header.php';
include 'navbar.php';
include "conn.php";
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    header("Location:../index.php");
} else {
    $UserId = $_SESSION['UserId'];
    $sql = "SELECT * FROM user WHERE UserId=$UserId";
    $result = mysqli_query($con, $sql);
    $User = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}
?>
<div class="container-fluid mt-2">
  <h1>Welcome <?=$User['Name']?></h1>

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>