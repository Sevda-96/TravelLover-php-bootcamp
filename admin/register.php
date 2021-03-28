<?php
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>
<?php 
if(isset($_POST['register'])){
    $errMsg='';

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirmpassword'];
   
    if($password!=$confirm){
        $errMsg ='Şifre doğrulama yanlış';
    }
    if(strlen($password>6)){
        $errMsg ='Şifre uzunluğu min 6 olmalı!';
    }

    if($errMsg ==''){
        try {
    
            $my_hash = password_hash($password, PASSWORD_DEFAULT);
            
            $uniqid=md5(uniqid(mt_rand(), true));
            $uniqid=substr($uniqid,0,12);

            $stmt = $conn->prepare('INSERT INTO admin(admin_id,admin_fullname, admin_username, admin_password) VALUES (:uniqid,:fullname, :username, :password)');
				$stmt->execute([
                    'uniqid'=>$uniqid,
					':fullname' => $fullname,
					':username' => $username,
					':password' => $my_hash,
					]);
				header('Location:register.php?action=joined');
				exit();
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    } 
}
?>
<?php

?>
<br /><br />
<div class="main-panel">
    <div class="content-wrapper ">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <p class="text text-dark display display-3 "><span>Admin</span> Hesap</p><br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Admin Ekle</h4>
                        <form class="forms-sample  contact-forms" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername1">İsim ve Soyisim</label>
                                <input type="text" class="form-control" name="fullname" id="exampleInputUsername1"
                                    required="" placeholder="fullname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Adı</label>
                                <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                                    placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Şifre</label>
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
                            <input type="submit" name="register" value="EKLE"  class="btn btn-primary mr-2"/>
                            <?php
				      if(isset($errMsg)){
                        echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
                         }
			            ?>
                        </form>
                    
                    </div>
                </div>
            </div>
            <div class="col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Admin Tablosu</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>İsim Soyisim</th>
                                        <th>Kullanıcı Adı</th>
                                        <th>Sil</th>
                                        <th>Düzenle</th>
                                    </tr>
                                </thead>
                                <?php $select=$conn->query("SELECT * FROM admin",PDO::FETCH_OBJ);?>
                                <?php while($row=$select->fetch()): ?>
                                <tbody>
                                    <tr>
                                        <td><?=$row->admin_fullname?></td>
                                        <td><?=$row->admin_username?></td>
                                        <td><a href="delete_admin.php?id=<?=$row->admin_id?>"  class="btn btn-warning  btn-sm" name="delete">Sil</a></td>
                                        <td><a href="update_admin.php?id=<?=$row->admin_id?>" class="btn btn-danger  btn-sm" name="update" >Düzenle</a></td>    
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
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