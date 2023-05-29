
<h1 class="page-header">
    
    <small>Result</small>
</h1>

<!-- First Blog Post -->
<?php

include('db.php') ;


$search=0;

if(isset($_POST['submit'])){

$search =$_POST['search'];
}
$query= "SELECT * FROM posts WHERE post_tags LIKE '%$search%';";
 $select_all_posts_query = mysqli_query($connection, $query);
 while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
//  while ($row) {
     $posts_title = $row['post_title'];
     $posts_author = $row['post_author'];
     $posts_date = $row['post_date'];
     $posts_image = $row['post_image'];
     $posts_content = $row['post_content'];
     $posts_tags = $row['post_tags'];
     echo "<li><a href='#'>$posts_title</a></li>";
     ?>
     
     <h2>
     <a href="#"><?php echo $posts_title ?></a>
 </h2>
 <p class="lead">
     by <a href="index.php"><?php echo $posts_author ?></a>
 </p>
 <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $posts_date ?></p>
 <hr>
 <img class="img-responsive container" src=<?php echo $posts_image?> alt="img">
 <hr>
 <p><?php echo $posts_content ?></p>
 <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    
 <?php  }
     
 ?>


<hr>