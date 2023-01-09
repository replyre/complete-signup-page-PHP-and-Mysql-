<?php
$user=0;
$success=0;
 if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    

    // if($res){
    //     echo "Data inserted successfully";
    // }else{
    //     die(mysqli_error($con));

    $sql ="Select * from `registration` where username ='$username'";
    $res=mysqli_query($con,$sql);
    if($res){
        $num =mysqli_num_rows($res);
        if($num>0){
            // echo "User already exists"; 
            $user=1;
        }else{
            $sql="insert into `registration`(username,password) values('$username','$password') ";
     $res = mysqli_query($con,$sql); // 2 arguments: connect variable(connect.php), query}
     if($res){
        //echo "SignUp Successful";
        $success=1;
        header('location: login.php');
    }else{
        die(mysqli_error($con));
        }
    }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <?php 
    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Ohhh Snap !!</strong> User already exists. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    if($success){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success </strong> You are successfully signed up. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  ?>
    <h1 class="text-center mt-2" > SignUp Page </h1>
     <div class="container mt-5">
     <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter your username" name="username">
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Sign Up</button>
</form>
     </div>
  </body>
</html>
