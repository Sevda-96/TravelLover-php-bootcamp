<?php 
ob_start();
include"layouts/db.php";
?>
<?php 
$id=$_GET['id'];

    $dlt=$conn->prepare("DELETE FROM guides WHERE guides_id=?");
    $dlt->execute([$id]);
    header("Location:guides.php");
    exit();

?>
<?php
ob_end_flush();
?>