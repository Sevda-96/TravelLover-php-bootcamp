<?php
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>
<?php 
    if((!empty($_FILES["uploaded_file"])) && (!empty($_POST['name'])) && (!empty($_POST['position'])) && ($_FILES['uploaded_file']['error'] == 0) && isset($_POST['submit'])) {
           
        $errMsg="";
        $name=$_POST['name'];
        $position=$_POST['position'];
        

        $filename=$_FILES['uploaded_file']['name'];
        $tmpfile=$_FILES['uploaded_file']['tmp_name'];

        $ext = substr($filename, strrpos($filename, '.') + 1);
        $folder='upload_images/';
        if(($ext=='jpg') && ($_FILES['uploaded_file']['type']=='image/jpeg') && ($_FILES['uploaded_file']['size']<=850000)){
   
            if(!file_exists($filename)){
                if(move_uploaded_file($tmpfile,$folder.$filename)){

                    $uniqid=md5(uniqid(mt_rand(), true));
                    $uniqid=substr($uniqid,0,12);
                       
                    $insert=$conn->prepare("INSERT INTO guides(guides_id,guides_namesurname,guides_position,image) VALUES(:uniqid,:name, :position,:filename)");
                    $insert->execute([
                        'uniqid'=>$uniqid,
                        'name'=>$name,
                        'position'=>$position,
                        'filename'=>$filename,
                    ]);
                   
                    header("Location: guides.php?status=ok");
                    exit();
                
                }
                else{
                    $errMsg='unsuccess';
                        
                }
            }
            else{
                $errMsg="dosya zaten mevcut";
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
                <p class="text text-dark display display-3 "><span>Rehber</span> İşlemleri</p><br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Rehber Ekleme</h4>
                        <form class="forms-sample contact-forms"  method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">İsim ve Soyisim</label>
                                <input type="text" name="name" class="form-control" placeholder="İsim" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Pozisyon</label>
                                <input type="text" name="position" class="form-control" placeholder="pozisyon" required="">
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
                        <h4 class="text text-dark">Rehber Tablosu</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Resim</th>
                                        <th>isim ve Soyisim</th>
                                        <th>Pozisyon</th>
                                        <th>Sil</th>
                                        <th>Düzenle</th>
                                    </tr>
                                </thead>
                                <?php $select=$conn->query("SELECT * FROM guides",PDO::FETCH_OBJ);?>
                                <?php while($row=$select->fetch()): ?>
                                <tbody>
                                    <tr>
                                    <td class="py-1">
                                    <img src="upload_images/<?=$row->image?>" class="hoverZoomLink"></td>
                                        <td><?=$row->guides_namesurname ?></td>
                                        <td><?=$row->guides_position ?></td>
                                        <td><a href="delete_guides.php?id=<?=$row->guides_id?>"  class="btn btn-warning  btn-sm" >Sil</a></td>
                                        <td><a href="update_guides.php?id=<?=$row->guides_id?>" class="btn btn-danger  btn-sm" name="update" >Düzenle</a></td>    
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