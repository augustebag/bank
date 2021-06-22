<?php

require __DIR__ . '/bootstrap.php';

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
    <title>Darbuotojo paskyra</title>
</head>
<body>
    <?php include __DIR__ . '/menu.php' ?>
    <?php include __DIR__ . '/pranesimai.php' ?>
    <h1>Darbuotojo paskyra</h1>
    <a href="http://localhost/bank/">Sąskaitų sąrašas</a>
</body>
</html>