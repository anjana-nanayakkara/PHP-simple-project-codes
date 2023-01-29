<?php

session_start();
$conn = mysqli_connect('localhost', 'root','','login_logout');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>loging and logout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Please Login</h2>

    <div>
        <form action="index.php" method="post">
            <input type="text" name="username" placeholder="Enter your username" class="field">
            <br>
            <input type="password" name="password" placeholder="Enter your password" class="field"><br>
            <input type="submit" name="login" value="login">
        </form>
    </div>
<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= ("SELECT * FROM email_pw WHERE username = '$username' AND password='$password' ");

    $select=mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["username"] = $row ['username'];
        $_SESSION["password"] = $row ['password'];
    }else{
        echo '<script type = "text/javascript">';
        echo 'alert("invalid username or password")';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
        echo "hellow world";
    }

}

if(isset($_SESSION["username"])){
    header("location:login.php");
}
?>
    
</body>
</html>