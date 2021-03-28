<?php
ob_start();
include"admin/layouts/db.php";

if(isset($_SESSION['login'])){
    header("location:admin/panel.php");
}
?>
<?php

if(isset($_REQUEST['login'])){
    session_start();
    $username=strip_tags($_REQUEST['username']);
    $password=strip_tags($_REQUEST['password']);

    $select=$conn->prepare("SELECT *FROM admin WHERE admin_username=:username");
    $select->execute([
        'username'=>$username,
    ]);

    $row=$select->fetch(PDO::FETCH_ASSOC);
   
    

    if($username==$row['admin_username']){
       if($password==$row['admin_password']){
          $_SESSION['login']=true;
          $_SESSION['user']=$username;
          $_SESSION['pass']=$password;
          header("location:admin/panel.php?action=seccess");
       }
       else{
        header("location:login.php?action=unseccess");
       }
    }
    else{
        header("location:login.php?action=unseccess");
    }
    
      
}
ob_end_flush();
?>
