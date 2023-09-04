<?php

    include 'tpls/header.php';

    include 'tpls/navbar.php';

?>
<section id="main-container">

<?php include 'tpls/sidebar.php'?>

<!--Page main section start-->
<section id="min-wrapper">
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--Top header start-->
                <h3 class="ls-top-header">Product</h3>
                <!--Top header end -->

                <!--Top breadcrumb start -->
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Product</li>
                </ol>
                <!--Top breadcrumb start -->
            </div>
        </div>
<!-- Main Content Element  Start-->
        <div class="row">

            <div class="col-md-12">
                <?php
                
                  if (!isset($_GET['action'])) {
                      include 'views/product/view_product.php';
                  }elseif($_GET['action'] == 'add'){
                      include 'views/product/add_product.php';
                  }elseif ($_GET['action'] == 'edit') {
                      include 'views/product/edit_product.php';
                  }

                ?>
               

            </div>

        </div>
    </div>    
</div>
</section>
<!--Page main section end -->


<?php include 'tpls/footer.php' ?>