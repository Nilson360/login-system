<?php
    session_start();
   include("./connections.php");
   include("./functions/functions.php");
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name= $_POST['user_name'];
    $password= $_POST['password'];
    if(!empty($user_name) && !empty($password)){

        //save to database
            $user_id = random_num(20);
            $query ="insert into users (user_id,user_name, password) values('$user_id','$user_name','$password')";
            //mysqli_query($query);
            header("Location: login");
            die();
    } else{
        echo "please enter some valide information";
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/loginStyle.css">
    <title>Signup</title>
</head>
<body>
    <div class="box">

        <div class="title">Signup</div>
        <form action="" method="POST">
                <span>User name</span>
            <div class="text">
                 <input type="text" name="UserName" id="username">
            </div class="text">
                 <span>Password</span>
           <div class="text">
                 <input type="Password" name="password">
           </div>

           <div  class="button">
              <input type="submit" value="Signup">
           </div>
           
            <a href="./login.php">Login</a>
        </form>

    </div>
</body>
</html>