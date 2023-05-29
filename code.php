<?php include('search.php') ?>
<?php 
 include('includes/db.php') ;

 if(isset($_POST['submit'])){
    // echo'submit';
     $search =$_POST['search'];
     $query= "SELECT * FROM posts WHERE post_tags LIKE '%$search%';";
     $search_query=mysqli_query($connection,$query);
 if(!$search_query){
     die("QUERY FAILED".mysqli_error($connection));
 }
 $count=mysqli_fetch_assoc($search_query);
 if($count==0){
 echo '<h1> No result</h1>';
}else {
     print_r($count) ; 
     echo '<h1> some result</h1>';
 }
 
 }


?>