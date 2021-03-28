<?php
ob_start();
include"layouts/head.php";
include"layouts/header.php";
include"layouts/leftslider.php";
?>

<?php
session_start();
include"layouts/db.php";
if(!isset($_SESSION['login'])){
    header("location:../login.php?action=urnotauthorized");
}
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" >
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0 text-dark">Admin Paneline Hoşgeldiniz... :)</h4>
                    </div>
                    <div >
                    <!--
                        <a href="export.php" type="button" class="btn btn-primary btn-icon-text btn-rounded">
                            <i class="ti-clipboard btn-icon-prepend"></i>Export
                        </a>
                        -->
                    </div>
                </div>
            </div>
        </div>
        
    <!-- content-wrapper ends -->

</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php
include"layouts/footer.php";
include"layouts/scripts.php";
ob_end_flush();
?>