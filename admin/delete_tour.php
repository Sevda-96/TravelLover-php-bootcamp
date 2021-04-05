<?php 
ob_start();
include"layouts/db.php";
?>
<?php 
$id=$_GET['id'];

    $is_deleted=true;
    $update=$conn->prepare("UPDATE tours SET is_deleted=:is_deleted WHERE tours_id=:id ");
        $update->execute([
            'is_deleted'=>$is_deleted,
            'id'=>$id,
        ]);
    header("Location:tours.php");
    exit();

?>
<?php
ob_end_flush();

?>
