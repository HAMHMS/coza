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
                <h3 class="ls-top-header">Slider</h3>
                <!--Top header end -->

                <!--Top breadcrumb start -->
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="active">Slider</li>
                </ol>
                <!--Top breadcrumb start -->
            </div>
        </div>
<!-- Main Content Element  Start-->
        <div class="row">

            <div class="col-md-12">
                <?php
                
                  if (!isset($_GET['action'])) {
                      include 'views/slider/view_slider.php';
                  }elseif($_GET['action'] == 'add'){
                      include 'views/slider/add_slider.php';
                  }elseif ($_GET['action'] == 'edit') {
                      include 'views/slider/edit_slider.php';
                  }

                ?>
               

            </div>

        </div>
    </div>    
</div>
</section>
<!--Page main section end -->


<?php include 'tpls/footer.php' ?>