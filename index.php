<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>HELLO THERE</h1>

    <form method="post" class = "form">

        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="submit" name="submit">

    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){ 
        $con = mysqli_connect("localhost" , "id21075621_handle668" , "@Samernasr668" , "id21075621_websitedatabase" );

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * from login where username = '$username' and password = '$password'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1){
             session_start();
             $_SESSION['samer'] = 'true';
             header('location:next.php');
        }else{ 
            echo "WRONG USERNAME OR PASSWORD!!";
        }
    }

?>