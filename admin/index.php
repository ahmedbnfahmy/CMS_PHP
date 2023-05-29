<?php include('../includes/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Custom CSS -->
<link href="css/blog-post.css" rel="stylesheet">    

    <?php include('includes/header.php') ?>
    
    
    <body>
        <div id="wrapper">
        <?php if($connection){echo "Connection Successful"; } ?>
        
        <!-- Navigation -->
        <?php include('includes/navigation.php') ?>
        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        
        <?php include('includes/sidebar.php') ?>
        
        <!-- Page Heading -->
        <?php include('includes/home.php') ?>
        
        <!-- /.row -->
        
    </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('includes/footer.php') ?>

</body>

</html>
