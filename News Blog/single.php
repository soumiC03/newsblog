<?php

require_once("./config/connect.php");

$singleblogscontent = mysqli_query($conn,"SELECT * FROM blogs LEFT JOIN category 
ON category.c_name = blogs.b_category LEFT JOIN clients ON clients.name = blogs.b_author WHERE blogs.id = '{$_GET['id']}'");

$rows = mysqli_fetch_assoc($singleblogscontent);




require_once("./inc/header.php");

?>


<div class="container">
                  <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3"><?= $rows['b_category'] ?></span>
                            <h3 class="title-big mb-4"> <?=$rows['b_title'] ?>
                            </h3>
                            <p class="message"><?=$rows['b_description'] ?></p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="./admin/uploads/<?=$rows['b_images']?>" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                    </div>







<?php

require_once("./inc/footer.php");
?>