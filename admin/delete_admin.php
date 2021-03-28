<?php 
ob_start();
include"layouts/db.php";
?>
<?php 
$id=$_GET['id'];

    $dlt=$conn->prepare("DELETE FROM admin WHERE admin_id=?");
    $dlt->execute([$id]);
    header("Location: register.php");
    exit();

?>
<?php
ob_end_flush();
?>