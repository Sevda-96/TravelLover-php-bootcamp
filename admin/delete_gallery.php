<?php 
ob_start();
include"layouts/db.php";
?>
<?php 
$id=$_GET['id'];

    $dlt=$conn->prepare("DELETE FROM gallery WHERE gallery_id=?");
    $dlt->execute([$id]);
    header("Location: gallery.php");
    exit();

?>
<?php
ob_end_flush();
?>