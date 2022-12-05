<?php

function check_login($con){
   if( isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
      $query = "SELECT * FROM 'users' WHERE 'user_id' = user_id limit 1" ;

      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) > 0){
         $user_data = mysqli_fetch_assoc($result);
         return $user_data;
      }
   }
   //redirection to login page
   header("Location: login.php");
   exit();
}

?>