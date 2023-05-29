<!DOCTYPE html>
<html lang="en">

<?php include('includes/header.php'); ?>
<!-- <?php include('includes/db.php'); echo'connected' ?> -->
<!-- Navigation -->
<?php include('includes/navigation.php');?>
<!-- Page Content -->  
<div class="container">
    
        <div class="row">
        <div class="col-md-8">
            <!-- Blog Entries Column -->
            <?php include('includes/blog.php');?>


                <!-- Second Blog Post -->
                
                <hr>
                <!-- Pager -->
                <?php include('includes/pager.php');?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include('includes/sidebar.php');?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php include('includes/footer.php') ?>
</div>
    <!-- /.container -->
     <!-- jQuery -->
     <script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>