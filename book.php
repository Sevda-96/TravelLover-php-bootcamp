<?php
include"admin/layouts/db.php";
?>

<?php

if(isset($_POST['send'])){
    if($_POST['tour']!=NULL && $_POST['name']!=NULL && $_POST['email']!=NULL && $_POST['phone']!=NULL && $_POST['msg']!=NULL){
        
        
        $tour = strip_tags($_POST['tour']);
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $phone =strip_tags($_POST['phone']);
        $msg = strip_tags($_POST['msg']);
        
        $uniqid=md5(uniqid(mt_rand(), true));
        $uniqid=substr($uniqid,0,12);

        $insert=$conn->prepare("INSERT INTO reservation(reservation_id,tour_name,person_nameSurname,e_mail,phone,message) VALUES(:uniqid,:tour,:name,:email,:phone,:msg)");
        $insert->execute([
            'uniqid'=>$uniqid,
            'tour'=>$tour,
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'msg'=>$msg,
        ]);
       
        header("Location:index.php?status=ok");
        exit();

    }
   
}
?>