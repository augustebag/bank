<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <button>Pridėti sąskaitą</button><br>
    </form>
    
</body>
</html>