<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$title = "Add Categories | Blogs";

require_once("../config/connect.php");

 if(!isset($_SESSION['login_status'])) {
    
    header("location:login.php");
  }

  if(isset($_POST['add-cat-button'])) {

    $name = $_POST['c_name'];
    $description = $_POST['c_description'];

    $date = date("Y-m-d H:i:s");

    $addCategory = "INSERT INTO category(c_name,c_description,created_at) VALUES ('$name','$description','$date')";
    $result= mysqli_query($conn,$addCategory);

    if($result) {
     echo "<script>alert('Category Added Successfully'); window.location.href ='add_category.php';</script>";

    } else {
       echo "<script>alert('Category Not Added'); window.location.href ='add_category.php';</script>" ;
    }
  }




?>

<?php
require_once("./inc/header.php");
?>

  <!-- main content start -->
<div class="main-content">



<!-- content -->
<div class="container-fluid content-top-gap" style="min-height: 80svh;">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
          <h3 class=" text-center  text-danger my-4">Add Categories</h3>

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
    <input type="file" class="form-control" id="img" name="c_image">
  </div>
  <button type="submit" class="btn btn-primary" name="add-cat-button">Submit</button>
  </form>
                       
        </div>
      </div>
    </div>
   </div>

</div>
</div>

  <?php
require_once("./inc/footer.php");
?>

  