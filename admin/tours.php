<?php
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>
<?php 

if((!empty($_FILES["uploaded_file"])) && (!empty($_POST['city'])) && (!empty($_POST['price'])) && (!empty($_POST['date'])) && ($_FILES['uploaded_file']['error'] == 0) && isset($_POST['submit'])) {
      
    $errMsg="";

    $city=$_POST['city'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $date=date("Y-m-d");
    $is_deleted=false;

    $filename=$_FILES['uploaded_file']['name'];
    $tmpfile=$_FILES['uploaded_file']['tmp_name'];

    $ext = substr($filename, strrpos($filename, '.') + 1);
    $folder='upload_images/';
    if(($ext=='jpg') && ($_FILES['uploaded_file']['type']=='image/jpeg') && ($_FILES['uploaded_file']['size']<=850000)){

        if(!file_exists($filename)){
            if(move_uploaded_file($tmpfile,$folder.$filename)){

                $uniqid=md5(uniqid(mt_rand(), true));
                $uniqid=substr($uniqid,0,12);
                   
                $insert=$conn->prepare("INSERT INTO tours(tours_id,tours_city,tours_price,date,image,is_deleted) VALUES(:uniqid,:city,:price,:date,:filename,:is_deleted)");
                $insert->execute([
                    'uniqid'=>$uniqid,
                    'city'=>$city,
                    'price'=>$price,
                    'date'=>$date,
                    'filename'=>$filename,
                    'is_deleted'=>$is_deleted,
                ]);
               
                header("Location:tours.php?status=ok");
                exit();
            
            }
            else{
                $errMsg='unsuccess';
                    
            }
        }
        else{
            $errMsg='dosya zaten mevcut';
        }
    }

else{
    $errMsg="sadece .jpg  ve 350kb altında ki dosyalarını yükleyebilirsin :)";
}

   
}


?>



<br />
<div class="main-panel">
    <div class="content-wrapper ">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <p class="text text-dark display display-3 "><span>Tur</span> İşlemleri</p><br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Tur Ekleme</h4>
                        <form class="forms-sample"  method="POST" enctype="multipart/form-data">
                            <div class="form-group contact-forms">
                                <label for="exampleInputName1">Şehir</label>
                                <input type="text" name="city" class="form-control" placeholder="İsim"  required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Fiyat</label>
                                <input type="text" name="price" class="form-control" placeholder="Fiyat"  required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tarih</label>
                                <input class="form-control" name="date" placeholder="dd/mm/yyyy"  required="">
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <div class="input-group col-xs-12">
                                    <span class="input-group-append">
                                        <input class="file-upload-browse btn btn-danger" name="uploaded_file"
                                            type="file"></input>
                                    </span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-warning mr-2" value="EKLE" name="submit"></input>
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
                        <h4 class="text text-dark">Tur Tablosu</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Resim</th>
                                        <th>Şehir</th>
                                        <th>Fiyat</th>
                                        <th>Tarih</th>
                                        <th>Sil</th>
                                        <th>Düzenle</th>
                                    </tr>
                                </thead>
                                <?php $select=$conn->query("SELECT * FROM tours WHERE is_deleted=false",PDO::FETCH_OBJ);?>
                                <?php while($row=$select->fetch()): ?>
                                <tbody>
                                    <tr>
                                    <td class="py-1">
                                    <img src="upload_images/<?=$row->image?>" class="hoverZoomLink"></td>
                                        <td><?=$row->tours_city?></td>
                                        <td><?=$row->tours_price?></td>
                                        <td><?=$row->date?></td>
                                        <td><a href="delete_tour.php?id=<?=$row->tours_id?>"  class="btn btn-warning  btn-sm" name="delete">Sil</a></td>
                                        <td><a href="update_tour.php?id=<?=$row->tours_id?>" class="btn btn-danger  btn-sm" name="update" >Düzenle</a></td>    
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


<h1></h1>
<?php
include"layouts/scripts.php";
ob_end_flush();
?>