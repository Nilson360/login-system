<?php
    session_start();
    $_SESSION;
    include_once("connections.php");
    include_once("./functions/functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My System Login</title>
</head>
<body>
    <a href="./user-login/logout.php">Logout</a>
    <h1>Wellcomeon my website</h1>
    <p>Hello, username</p>
</body>
</html>