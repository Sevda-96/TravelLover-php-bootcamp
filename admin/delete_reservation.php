<?php 
ob_start();
include"layouts/db.php";
?>
<?php 
$id=$_GET['id'];

   // $dlt=$conn->prepare("DELETE FROM tours WHERE tours_id=?");
    //$dlt->execute([$id]);
    $is_deleted=true;
    $update=$conn->prepare("UPDATE reservation SET is_deleted=:is_deleted WHERE reservation_id=:id ");
        $update->execute([
            'is_deleted'=>$is_deleted,
            'id'=>$id,
        ]);
    header("Location:reservation.php");
    exit();

?>
<?php
ob_end_flush();

?>