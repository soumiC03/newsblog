<?php
session_start();
$title = "Categories | Blogs";

 if(!isset($_SESSION['login_status'])) {
    
    header("location:login.php");
    

    


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
      <li class="breadcrumb-item active" aria-current="page">All Categories</li>
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
          <h3 class=" text-center  text-danger my-4">Below are the addded categories</h3>

          
                       
        </div>
      </div>
    </div>
   </div>

</div>
</div>

  <?php
require_once("./inc/footer.php");
?>