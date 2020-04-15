<?php include '../plugins/css.php';  ?>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        
            <?php include 'header.php';  ?>
       
            <?php   include 'navigation.php'; ?>

        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
               <?php include 'page_info.php'; ?>
                
                <?php  include 'dashboard.php';  ?>

                <?php include 'rightbar.php'; ?>

            </div>
            <!-- /.container-fluid -->
            <?php include 'footer.php'; ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
   <?php   include '../plugins/js.php'; ?>


</body>

</html>
