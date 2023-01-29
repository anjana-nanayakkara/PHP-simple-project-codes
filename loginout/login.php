<?php

    session_start()

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h2>welcome <?php echo $_SESSION['username'] ?></h2>

    click here to <a href="logout.php">Logout</a>
</body>
</html>