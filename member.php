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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Darbuotojo paskyra</title>
</head>
<body>
    <?php include __DIR__ . '/pranesimai.php' ?>
    <?php include __DIR__ . '/menu.php' ?>
    <h1>Darbuotojo paskyra</h1>
    <div class="memberbtn">
        <a class="btn btn-outline-dark" href="http://localhost/bank/?action=addAccount">Pridėti naują sąskaitą</a>
        <a class="btn btn-outline-dark" href="http://localhost/bank">Saskaitų sąrašas</a>
    </div>
</body>
</html>