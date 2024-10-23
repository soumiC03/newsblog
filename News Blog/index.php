<?php

require_once("./config/connect.php");

$allblogscontent = mysqli_query($conn, "SELECT * FROM blogs LEFT JOIN category 
ON category.c_name = blogs.b_category LEFT JOIN clients ON clients.name = blogs.b_author");

$allblogs = "SELECT * FROM `blogs` WHERE id = '16'";
$blogresult = mysqli_query($conn, $allblogs);
$rev = mysqli_fetch_assoc($blogresult);

$allblogs2 = "SELECT * FROM blogs WHERE id = '17'";
$blogresult2 = mysqli_query($conn, $allblogs2);
$rev2 = mysqli_fetch_assoc($blogresult2);



$latestbeauty = mysqli_query($conn, "SELECT * FROM blogs WHERE b_category = 'Beauty' ORDER BY b_created_at DESC LIMIT 4");
$latestfashion = mysqli_query($conn , "SELECT * FROM blogs WHERE b_category = 'Fashion and Style' ORDER BY b_created_at DESC LIMIT 3");


$allcat = mysqli_query($conn, "SELECT * FROM category");




require_once("./inc/header.php");

?>


<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Beauty</span>
                            <h3 class="title-big mb-4">Create an Art that shows the beauty in everyone’s ideas of flaws.
                            </h3>
                            <p class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                                sit id accusantium officia quod quasi necessitatibus perspiciatis Harum error
                                provident quibusdam tenetur. Ut fermentum leo quis sapienet faucibus, at
                                scelerisque sem feugiat. Nulla in eros purus.</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="assets/images/beauty.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Fashion and Style</span>
                            <h3 class="title-big mb-4">Addicted to Fashion is the Armor to survive the reality of
                                Everyday Life.
                            </h3>
                            <p class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                                sit id accusantium officia quod quasi necessitatibus perspiciatis Harum error
                                provident quibusdam tenetur. Ut fermentum leo quis sapienet faucibus, at
                                scelerisque sem feugiat. Nulla in eros purus.</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="assets/images/fashion.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Food and Wellness</span>
                            <h3 class="title-big mb-4">Create healthy habits, not restrictions. Wellness is a taste of
                                being.
                            </h3>
                            <p class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                                sit id accusantium officia quod quasi necessitatibus perspiciatis Harum error
                                provident quibusdam tenetur. Ut fermentum leo quis sapienet faucibus, at
                                scelerisque sem feugiat. Nulla in eros purus.</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="assets/images/food.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Lifestyle</span>
                            <h3 class="title-big mb-4">To succeed in Life, you need 3 things : a wishbone, a backbone, a
                                funny bone.
                            </h3>
                            <p class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                                sit id accusantium officia quod quasi necessitatibus perspiciatis Harum error
                                provident quibusdam tenetur. Ut fermentum leo quis sapienet faucibus, at
                                scelerisque sem feugiat. Nulla in eros purus.</p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="assets/images/lifestyle.jpg" class="img-fluid radius-image-full"
                                alt="client image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8">
                <h3 class="section-title-left mb-4"> Editor's Pick </h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="./admin/uploads/<?= $rev['b_images'] ?>" alt="">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue"><?= $rev['b_category'] ?> </span>
                                <a href="single.php?id=<?= $rev['id'] ?>" class="blog-desc"><?= $rev['b_title'] ?>
                                </a>
                                <p><?= $rev['b_description'] ?></p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html"></a><?= $rev['b_author'] ?></a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> </span>. <span
                                                class="meta-value ml-2"><span class="fa fa-clock-o"></span> <?= $rev['b_created_at'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="#blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full"
                                        src="./admin/uploads/<?= $rev2['b_images'] ?>" alt="">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue"><?= $rev2['b_category'] ?> </span>
                                <a href="single.php?id=<?= $rev2['id'] ?>" class="blog-desc"><?= $rev2['b_title'] ?>
                                </a>
                                <p><?= $rev['b_description'] ?></p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html"></a><?= $rev2['b_author'] ?></a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> </span>. <span
                                                class="meta-value ml-2"><span class="fa fa-clock-o"></span> <?= $rev2['b_created_at'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="mt-4 left-right bg-clr-white p-3">
                    <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3">Advertise with us </h3>
                    <a class="btn btn-style btn-primary" href="#url">Learn more</a>
                </div>
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5">
                <div class="topics">
                    <h3 class="section-title-left mb-4"> Topics</h3>
                 <?php foreach($allcat as $acres) : ?>
                    <a href="singlecat.php?id=<?=$acres['c_name']?>" class="topics-list mt-3">
                        <div class="list1">
                            <span class="fa fa-female"></span>
                            <h4><?=$acres['c_name']?></h4>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div class="sponsers mt-5">
                    <h3 class="section-title-left mb-4"> Our sponsers</h3>
                    <a href="#ad-banner"><img src="assets/images/ad.jpg" alt="" class="img-fluid radius-image-full" /></a>
                    <a href="#advertise" class="text-center d-block text-uppercase">Advertise with us </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="section-title-left mb-4"> Top Pick's of this month </h3>
        <div class="row top-pics">
            <div class="col-lg-4 col-md-6">
                <div class="top-pic1">
                    <div class="card-body blog-details">
                        <a href="" class="blog-desc">Fashion is
                            Creating your Beauty image. The New fashion starts here
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a1.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Isabella ava</a> </a>
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
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="top-pic2">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">The 5 Nonnegotiables of a Healthy Quarantine food that a Doctor Approved
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Charlotte mia</a> </a>
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
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="top-pic3">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc"> Right food baked with natural ingredient, the use of best quality products
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
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
        </div>
    </div>
</div>
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Latest Fashion and style posts</h3>
        </div>
        <div class="row">
          <?php foreach($latestfashion as $lfres) : ?>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="single.php?id=<?=$lfres['id']?>">
                            <img class="card-img-bottom d-block radius-image-full" src="./admin/uploads/<?=$lfres['b_images']?>"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="single.php?id=<?=$lfres['id']?>" class="blog-desc">
                        <?=$lfres['b_title']?>
                        </a>
                        <div class="author align-items-center">
                            <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span><?=$lfres['b_created_at']?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Latest Beauty Posts</h3>
        </div>
        <div class="row">
            <?php foreach($latestbeauty as $lbres) : ?>
            <div class="col-lg-6 mt-lg-0 mt-4 mb-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="single.php?id=<?=$lbres['id']?>" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="./admin/uploads/<?=$lbres['b_images']?>"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="single.php?id=<?=$lbres['id']?>" class="blog-desc">
                                <?=$lbres['b_title']?>
                            </a>
                            <div class="author align-items-center">
                                <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Charlotte mia</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> July 13, 2020 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span><?=$lbres['b_created_at']?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>
<div class="w3l-homeblock2 w3l-homeblock6 py-5">
    <div class="container-fluid px-sm-5 py-lg-5 py-md-4">
        <!-- block -->
        <h3 class="section-title-left mb-4"> Trending Now</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-6 position-relative">
                            <a href="#blog-single.html">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/trending1.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-6 card-body blog-details align-self">
                            <span class="label-blue">Sports</span>
                            <a href="#blog-single.html" class="blog-desc">Playing footbal with your feet is one thing.
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                vitae sit.</p>
                            <div class="author align-items-center mt-3">
                                <img src="assets/images/a2.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">Charlotte mia</a> </a>
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
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-6 position-relative">
                            <a href="#blog-single.html">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/trending2.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-6 card-body blog-details align-self">
                            <span class="label-blue">Fitness</span>
                            <a href="#blog-single.html" class="blog-desc">Experience the state of the art fitness! Fitness on Track </a>
                            <p>Lorem ipsum dolor sit amet consectetur ipsum adipisicing elit. Quis
                                vitae sit.</p>
                            <div class="author align-items-center mt-3">
                                <img src="assets/images/a3.jpg" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="author.html">ELizabeth</a> </a>
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
            </div>
        </div>
    </div>
</div>
<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="py-5">
                <h3 class="section-title-left mb-2">Subscribe to our newsletter!</h3>
                <p class="mb-md-5 mb-4">We'll send you the best of our blog just once a month. We promise. </p>
                <form action="#" method="GET" class="subscribe">
                    <input type="email" class="subscribe_input" name="search" placeholder="Email address" required="">
                    <button class="btn btn-style btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer-28 block -->

<?php

require_once("./inc/footer.php");

?>