<?php
session_start();
require_once("../config/connect.php");

$title = "Blog | Add Blogs ";

if(!isset($_SESSION['login_status'])) {
    header("location:login.php");
}



if(isset($_POST['add-cat-button'])) {

    $name = $_POST['c_name'];
    $description = $_POST['c_description'];

    $blogcategory = $_POST['blog_category'];
    $author = $_SESSION['name'];

    $date = date("Y-m-d H:i:s");

   if(!empty($_FILES['b_images']['name'])) {
    
    $userfile = "userupload_" . time() . "_" . str_replace("","_",$_FILES['b_images']['name']);
   }
   
   move_uploaded_file($_FILES["b_images"]["tmp_name"] , "uploads/" . $userfile);


    $addCategory = "INSERT INTO blogs(b_title,b_description,b_category,b_author,b_created_at,b_images) VALUES ('$name','$description','$blogcategory','$author','$date','$userfile')";
    $result= mysqli_query($conn,$addCategory);

    if($result) {
     echo "<script>alert('Blogs Added Successfully'); window.location.href ='add_blogs.php';</script>";

    } else {
       echo "<script>alert('Blogs Not Added'); window.location.href ='add_blogs.php';</script>" ;
    }
  }

  $allcategories = "SELECT * FROM category";
  $categoryresult = mysqli_query($conn,$allcategories);

  


require_once("./inc/header.php");

?>



<!----Header Start----->







<!----Header End----->

<!-- main content start -->
<div class="main-content">



<!-- content -->
<div class="container-fluid content-top-gap" style="min-height: 80svh;">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add Blogs</li>
    </ol>
  </nav>
  <!-- <div class="welcome-msg pt-3 pb-4">
    <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
    <p>Very detailed & featured admin.</p>
  </div> -->

   <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card p-4">
          <h3 class=" text-center  text-danger my-4">Add Blogs</h3>

          <form  method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="category" class="form-label">Name</label>
    <input type="text" class="form-control" id="category" name="c_name">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea  class="form-control" id="description" name="c_description"></textarea>
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Upload File</label>
    <input type="file" class="form-control" id="img" name="b_images">
  </div>

  <div class="mb-3">
    <label for="img" class="form-label">Category</label>
    <select name="blog_category" id="" class="form-control">
        <option value="">Select One</option>
        <?php while($rows=mysqli_fetch_assoc($categoryresult)) { ?>
            <option value="<?= $rows['c_name'] ?>"><?= $rows['c_name'] ?></option>
            <?php } ?>

    </select>
    
  </div>
  
  <button type="submit" class="btn btn-primary" name="add-cat-button">Submit</button>
  </form>
                       
        </div>
      </div>
    </div>
   </div>

</div>
</div>
        </div>

  <?php
require_once("./inc/footer.php");
?>




