<?php 
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>

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
                        <h2 class="card-title text-primary">Tur Güncelle</h2>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <?php $id=$_GET['id']; $select2=$conn->query("SELECT *FROM tours WHERE tours_id='$id'",PDO::FETCH_OBJ);$select2->execute(['id'=>$_GET['id']]); ?>
                            <?php while($row=$select2->fetch()):?>
                                <h4 class="text text-dark">Tur Güncelleme</h4>
                            <div class="form-group">
                                <label for="exampleInputName1">Şehir</label>
                                <input type="text" name="city" value="<?=$row->tours_city?>"  class="form-control" placeholder="İsim">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Fiyat</label>
                                <input type="text" name="price" value="<?=$row->tours_price?>"class="form-control" placeholder="İsim">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tarih</label>
                                <input class="form-control"value="<?=$row->date?>" name="date" placeholder="dd/mm/yyyy">
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
                            <input type="submit" class="btn btn-primary mr-2" name="submit"></input>
                        </form>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    if((!empty($_FILES["uploaded_file"])) && (!empty($_POST['city'])) && (!empty($_POST['price'])) && (!empty($_POST['date'])) && ($_FILES['uploaded_file']['error'] == 0)){
        
        $city=$_POST['city'];
        $price=$_POST['price'];
        $date=$_POST['date'];
        $date=date("Y-m-d");

        $filename=$_FILES['uploaded_file']['name'];
        $tmpfile=$_FILES['uploaded_file']['tmp_name'];

        $ext = substr($filename, strrpos($filename, '.') + 1);
        $folder='upload_images/';
        
       if(move_uploaded_file($tmpfile,$folder.$filename)){
         
        $update=$conn->prepare("UPDATE tours SET tours_city=:city,tours_price=:price,date=:date,image=:uploaded_file WHERE tours_id=:id ");
        $update->execute([
            'city'=>$city,
            'price'=>$price,
            'date'=>$date,
            'uploaded_file'=>$filename,
            'id'=>$id,
        ]);
       
        header("Location: tours.php?status=ok");
        exit();
        }
    }
    else{
        echo'<h3 class="text-danger" style="text-align:center;">Boş bırakılmaz!</h3>';
    }
}
?>
<?php
include"layouts/scripts.php";
ob_end_flush();
?>