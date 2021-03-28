<?php
ob_start();
include"layouts/db.php";
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
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
            <div class="col-sm-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text text-dark">Galeri Tablosu</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tur</th>
                                        <th>Müşteri İsim Soyisim</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Sil</th>

                                    </tr>
                                </thead>
                                <?php $select=$conn->query("SELECT * FROM reservation WHERE is_deleted=false",PDO::FETCH_OBJ);?>
                                <?php while($rsv=$select->fetch()): ?>
                                <tbody>
                                    <tr>
                                        <td><?=$rsv->tour_name?></td>
                                        <td><?=$rsv->person_nameSurname?></td>
                                        <td><?=$rsv->e_mail?></td>
                                        <td><?=$rsv->phone?></td>
                                        <td><?=substr($rsv->message,0,20)?></td>
                                        <td><a href="delete_reservation.php?id=<?=$rsv->reservation_id?>"
                                                class="btn btn-warning  btn-sm" name="delete">Sil</a></td>

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