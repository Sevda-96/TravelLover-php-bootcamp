<?php
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>
<?php 
if(isset($_POST['update'])){
    $errMsg='';

    $id=$_GET['id'];
    $fullname = $_POST['fullname'];
    $oldpassword=$_POST['oldpassword'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirmpassword'];
   
    if($password!=$confirm){
        $errMsg ='Şifre doğrulama yanlış';
    }
    if(strlen($password>6)){
        $errMsg ='Şifre uzunluğu min 6 olmalı!';
    }
    
    $select=$conn->prepare("SELECT *FROM admin WHERE admin_id=:id");
    $select->execute([
        'id'=>$id,
    ]);
    $row=$select->fetch(PDO::FETCH_ASSOC);

    if($errMsg ==''){
        if($oldpassword==$row['admin_password']){
            try {
                
               $update=$conn->prepare("UPDATE admin SET admin_fullname=:fullname,admin_username=:username, admin_password=:password WHERE admin_id=:id ");
               $update->execute([
                ':fullname' => $fullname,
                ':username' => $username,
                ':password' => $my_hash,
                'id'=>$id,
                 ]);

               header("Location: register.php");
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
        else{
            $errMsg ='Şifreyi Yanlış!';
        }
       
    } 
}
?>

<br /><br />
<div class="main-panel">
    <div class="content-wrapper ">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <p class="text text-dark display display-3 "><span>Şifre</span> Değiştir</p><br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Admin Ekle</h4>
                        <form class="forms-sample  contact-forms" method="post">
                            <?php $id=$_GET['id']; $select2=$conn->query("SELECT *FROM admin WHERE admin_id='$id'",PDO::FETCH_OBJ);$select2->execute(['id'=>$_GET['id']]); ?>
                            <?php while($row=$select2->fetch()):?>
                            <div class="form-group">
                                <label for="exampleInputUsername1">İsim ve Soyisim</label>
                                <input type="text" class="form-control" name="fullname"
                                    value="<?=$row->admin_fullname?>" id="exampleInputUsername1" required=""
                                    placeholder="fullname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Adı</label>
                                <input type="text" class="form-control" name="username"
                                    value="<?=$row->admin_username?>" id="exampleInputEmail1" placeholder="Email"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Şifre</label>
                                <input type="password" class="form-control" name="oldpassword"
                                    id="exampleInputPassword1" required="" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Yeni Şifre</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                    required="" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Şifreyi Doğrula</label>
                                <input type="password" class="form-control" name="confirmpassword"
                                    id="exampleInputConfirmPassword1" required="" placeholder="Password">
                            </div>
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Remember me
                                    <i class="input-helper"></i></label>
                            </div>
                            <input type="submit" name="update" class="btn btn-primary mr-2" />
                        </form>
                        <?php endwhile; ?>
                        <?php
				      if(isset($errMsg)){
                        echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
                         }
			            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include"layouts/scripts.php";
ob_end_flush();
?>