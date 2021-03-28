<?php
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>

<?php 
    if((!empty($_FILES["uploaded_file"])) && (!empty($_POST['title'])) && (!empty($_POST['content'])) && ($_FILES['uploaded_file']['error'] == 0) && isset($_POST['submit'])) {
        
        $errMsg='';
        $title=$_POST['title'];
        $text=$_POST['content'];

        
        $filename=$_FILES['uploaded_file']['name'];
        $tmpfile=$_FILES['uploaded_file']['tmp_name'];

        $ext = substr($filename, strrpos($filename, '.') + 1);
        $folder='upload_images/';
        if(($ext=='jpg') && ($_FILES['uploaded_file']['type']=='image/jpeg') && ($_FILES['uploaded_file']['size']<=1000000)){
   
            if(!file_exists($filename)){
                if(move_uploaded_file($tmpfile,$folder.$filename)){

                    $uniqid=md5(uniqid(mt_rand(), true));
                    $uniqid=substr($uniqid,0,12);
                       
                    $insert=$conn->prepare("INSERT INTO gallery(gallery_id,title,text,image) VALUES(:uniqid,:title, :text,:filename)");
                    $insert->execute([
                        'uniqid'=>$uniqid,
                        'title'=>$title,
                        'text'=>$text,
                        'filename'=>$filename,
                    ]);
                   
                    header("Location: gallery.php?status=ok");
                    exit();
                
                }
                else{
                    $errMsg ='Başarısız';
             
                }
            }
            else{
                $errMsg="dosya zaten mevcut')";
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
                <p class="text text-dark display display-3 "><span>Galeri</span> İşlemleri</p><br />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Galeri Resim Ekleme</h4>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="form-group contact-forms">
                                <label for="exampleInputName1">İsim</label>
                                <input type="text" name="title" class="form-control" placeholder="İsim" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Metin</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="content"
                                    required=""></textarea>
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
                            <input type="submit" class="btn btn-warning mr-2" value="EKLE"  name="submit"></input>
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
                        <h4 class="text text-dark">Galeri Tablosu</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Resim</th>
                                        <th>Başlık</th>
                                        <th>Text</th>
                                        <th>Sil</th>
                                        <th>Düzenle</th>
                                    </tr>
                                </thead>
                                <?php $select=$conn->query("SELECT * FROM gallery",PDO::FETCH_OBJ);?>
                                <?php while($glry=$select->fetch()): ?>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="upload_images/<?=$glry->image?>" class="hoverZoomLink">
                                        </td>
                                        <td><?=substr($glry->title,0,20)?></td>
                                        <td><?=substr($glry->text,0,20)?></td>
                                        <td><a href="delete_gallery.php?id=<?=$glry->gallery_id?>"
                                                class="btn btn-warning  btn-sm" name="delete">Sil</a></td>
                                        <td><a href="update_gallery.php?id=<?=$glry->gallery_id?>"
                                                class="btn btn-danger  btn-sm" name="update">Düzenle</a></td>
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