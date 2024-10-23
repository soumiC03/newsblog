<?php

require_once("../config/connect.php");


$errorMsg= [];


$name= "";
$email= "";
$password= "";

    if(empty($_POST['name'])) {
        $errorMsg ['name'] = "**Required Field** Please enter your name" ;
    } else {
        $name= $_POST['name'];
    }
    if(empty($_POST['email'])) {
        $errorMsg ['email'] = "**Required Field** Please enter your email" ;

    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $errorMsg ['email'] = "Invalid email";
    }
     else{
        $email= $_POST['email'];
    }
    if(empty($_POST['password'])) {
        $errorMsg ['password'] = "**Required Field** Please enter your password";
    } else {
        $password= $_POST['password'];
    }



    if (count($errorMsg) <= 0) {
        $signupsql= "INSERT INTO clients (name, email, password) VALUES ('$name', '$email', '$password')";
    
        $signupresult= mysqli_query($conn,$signupsql);
    
        if($signupresult) {
            
            echo"<script> alert('Successfully registered'); window.location.href= 'login.php' </script>";
        } else {
            $errorMsg ['failed'] = "Failed to register";
        }
    }



?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login Page</title>
</head>
<body>

<style>
    
#login-form{
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
   
}

.login-box {
    height: 80vh;
    width: 300px;
   
    
  
}

.login-section {
    height: 100%;
    display: flex;
    justify-content: center;
    text-align: center;
    align-items: center;
    border-radius: 25px;
    border: 1px solid #d9d8d7;
}

.form-text{
    font-size: 40px;
    font-weight: 700;
}
</style>




<section id="login-form">
    <div class="login-box mt-5">
 <div class="login-section">
 <form method="post">
  <div class="mb-3">
  <h1 class="form-text mb-5 text-primary">Sign Up</h1>
    <label for="exampleInputEmail1" class="form-label">Your full name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    <?php if(!empty($errorMsg['name'])) : ?>
        <span class="text-danger"><?=$errorMsg['name']?></span>
        <?php endif ; ?>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Your email address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
    <?php if(!empty($errorMsg['email'])) : ?>
        <span class="text-danger"><?=$errorMsg['email']?></span>
        <?php endif ; ?>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter your Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    <?php if(!empty($errorMsg['password'])) : ?>
        <span class="text-danger"><?=$errorMsg['password']?></span>
        <?php endif ; ?>
  </div>
  <button type="submit" class="btn btn-primary" name ="login-button">Sign Up</button>
</form>
 </div>
    </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>



    
</body>
</html>