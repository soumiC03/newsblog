
<!-- header -->
<?php
require_once("./config/connect.php");

$csql = mysqli_query($conn,"SELECT * FROM blogs LEFT JOIN category 
ON category.c_name = blogs.b_category WHERE category.c_name = '{$_GET['id']}'");


$cresult =( mysqli_fetch_assoc($csql));







require_once("./inc/header.php");

?>
<!-- //header -->

<div class="w3l-homeblock2 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
  
        <h3 class="category-title mb-3">
          <?=$cresult['c_name']?>
        </h3>

      
        <p class="mb-sm-5 mb-4 max-width">Lorem ipsum dolor sit amet elit. Id quaerat amet ipsum sunt et quos dolorum.</p>
        <div class="row">

     <?php foreach($csql as $cres) : ?>
            <div class="col-lg-4 col-md-6 item mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="single.php?id=<?=$cres['id']?>">
                            <img class="card-img-bottom d-block radius-image-full" src="./admin/uploads/<?=$cres['b_images']?>"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="single.php?id=<?=$cres['id']?>" class="blog-desc">
                        <h4> <?= $cres['b_title']?></h4>
                        </a>
                       
                        <div class="author align-items-center mt-3 mb-1">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html"><?=$cres['b_author']?></a> 
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

           

           

   
        </div>
        <ul class="site-pagination text-center mt-md-5 mt-4">
            <li><span aria-current="page" class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#page2">2</a></li>
            <li><a class="page-numbers" href="#page3">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a class="page-numbers" href="#page7">7</a></li>
            <li><a class="next page-numbers" href="#next">Next »</a></li>
        </ul>
    </div>
</div>


<!-- footer-28 block -->
<?php

require_once("./inc/footer.php");

?>

<!-- // footer-28 block -->