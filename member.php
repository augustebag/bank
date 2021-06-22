<?php

session_start();
if(!isset($_SESSION['prisijunges'])) {
    header('Location: http://localhost/bank/login.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member page</title>
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?>
    <h1>Member page</h1>
</body>
</html>