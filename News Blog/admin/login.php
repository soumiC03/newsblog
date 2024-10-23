<?php

require_once("../config/connect.php");

if(isset($_POST['login-button'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $searchsql = "SELECT * FROM clients WHERE email= '$email' AND password = '$password'";
    $searchresult = mysqli_query($conn,$searchsql);

    if(mysqli_num_rows($searchresult)==1){

        $data = mysqli_fetch_assoc($searchresult);

        session_start();
        $_SESSION['login_status'] = true;
        $_SESSION['name'] = $data['name'];
        header("location:index.php");
       
    } else {
        echo "<script> alert('Email or password is incorrect');</script>";
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
  <h1 class="form-text mb-5 text-primary">Login</h1>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name ="login-button">Submit</button>
  <h5 class="py-5">Not an user? <a href="register.php">Register Here</a></h5>
</form>
 </div>
    </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>



    
</body>
</html>