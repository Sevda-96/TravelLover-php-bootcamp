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
                        <h2 class="card-title text-primary">Galeri Resim Ekleme</h2>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <?php $id=$_GET['id']; $select2=$conn->query("SELECT *FROM gallery WHERE gallery_id='$id'",PDO::FETCH_OBJ);$select2->execute(['id'=>$_GET['id']]); ?>
                            <?php while($glry=$select2->fetch()):?>
                            <div class="form-group">
                                <label for="exampleInputName1">İsim</label>
                                <input type="text" name="title" value="<?=$glry->title?>" class="form-control"
                                    placeholder="İsim">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Metin</label>
                                <input type="text" name="content" class="form-control" value="<?=$glry->text?>"
                                    placeholder="Metin">
                            </div>

                            <div class="form-group">
                                <label>File upload</label>
                                <div class="input-group col-xs-12">
                                    <span class="input-group-append">
                                        <input class="file-upload-browse btn btn-primary" name="uploaded_file"
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
    if((!empty($_FILES["uploaded_file"])) && (!empty($_POST['title'])) && (!empty($_POST['content'])) && ($_FILES['uploaded_file']['error'] == 0)){
        
        $id=$_GET['id'];
        $title=$_POST['title'];
        $text=$_POST['content'];

        $filename=$_FILES['uploaded_file']['name'];
        $tmpfile=$_FILES['uploaded_file']['tmp_name'];

        $ext = substr($filename, strrpos($filename, '.') + 1);
        $folder='upload_images/';
        if(move_uploaded_file($tmpfile,$folder.$filename)){

        $update=$conn->prepare("UPDATE gallery SET title=:title,text=:content,image=:uploaded_file WHERE gallery_id=:id ");
        $update->execute([
            'title'=>$title,
            'content'=>$text,
            'uploaded_file'=>$filename,
            'id'=>$id,
        ]);

        header("Location: gallery.php");
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