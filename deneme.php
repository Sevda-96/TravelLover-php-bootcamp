<?php
include("admin/layouts/db.php");?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row col-sm-12">
        <?php $id; $select=$conn->query("SELECT * FROM gallery",PDO::FETCH_OBJ);?>
              <?php while($glry=$select->fetch()): ?>
            <div class="col-sm-4">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="admin/upload_images/<?=$glry->image?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=$glry->title?></h5>
                            <p class="card-text"><?=substr($glry->text,0,400)?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
 <!--
            <div class="header mb-3 mb-sm-5 text-center">
                <h3 class="heading text-center mb-3 mb-sm-5">Tur Fotoğraf Galerisi</h3>
                
                <div class="row">
                    <div class="col-md-4 gal-img" style="width: 18rem;height:18rem;">
                        <a href="#gal1"><img src="admin/upload_images/>"
                                alt="news image"><span></span></a>
                        <div class="card-body">
                            <p class="card-text">z</p>
                        </div>
                    </div>
                </div>
            </div>
             popup
            <div id="gal1" class="pop-overlay animate ">
                <div class="popup">
                    <h4 class="text text-warning text-center"></h4><br />
                    <h1> </h1>
                    <img src="admin/upload_images/" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4"></p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
             //popup 
                
            </div>-->