<?php include('../includes/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
<!-- Custom CSS -->
<link href="css/blog-post.css" rel="stylesheet">    

    <?php include('includes/header.php') ?>
    
    
    <body>
        <div id="wrapper">
        <!-- <?php if($connection){echo "Connection Successful"; } ?> -->
        
        <!-- Navigation -->
        <?php include('includes/navigation.php') ?>
        
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        
        <?php include('includes/sidebar.php') ?>
        
        <!-- Page Heading -->
        <!-- <?php include('includes/home.php') ?> -->
       
       <h1>Add cat</h1>
        <div class="col-xs-6">
            
        <form action="">
<div class="form-group ">
<label for="basic-url" class="form-label">Add Cat</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="basic-url" aria-describedby="add category"placeholder="add category">
</div>
</div>
<button type="submit" name="submit" class="btn btn-primary" >
    ADD
</button>


            </form>
        
        </div>
        
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
