<?php
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
    <title>Pridėti naują sąskaitą</title>
</head>
<body>
    
    <?php include __DIR__ . '/menu.php' ?>

    <form action="?action=addAccount" method="post">

        <label for="name"> Vardas </label>
        <input type="text" name="name"><br>

        <label for="surname"> Pavardė </label>
        <input type="text" name="surname"><br>

        <label for="accNumber"> Asmens kodas </label>
        <input type="text" name="accNumber"><br>

        <label for="id"> Sąskaitos Nr. </label>
        <input type="text" name="id"><br>

        <label for="amount"> Sąskaitos likutis </label>
        <input type="text" name="amount"><br>

        <button type="button" class="btn btn-dark">Pridėti sąskaitą</button>
    </form>
    
</body>
</html>