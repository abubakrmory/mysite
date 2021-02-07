<?php
session_start();
include 'header.php';
include 'navbar.php';

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
    header("Location:../index.php");
}
?>
<div class="container-fluid mt-2">


</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>