<?php
$saskPradzia = 'LT';
$accNum = rand(100000000, 9999999999);
$account = $saskPradzia . $accNum;
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

    <form action="?action=addAccount" class="add" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name"> Vardas </label>
                <input type="text" class="form-control name="name"><br>
            </div>
        <div class="form-group col-md-6">
                <label for="surname"> Pavardė </label>
                <input type="text" class="form-control name="surname"><br>
                </div>
        <div class="form-group col-md-6">
            <label for="accNumber"> Asmens kodas </label>
            <input type="text" class="form-control name="accNumber"><br>
            </div>
        <div class="form-group col-md-6">
            <label for="id"> Sąskaitos Nr. </label>
            <input type="text" class="form-control name="id" value="<?= $account ?>"><br>
            </div>
        <div class="form-group col-md-6">
            <label for="amount"> Sąskaitos likutis </label>
            <input type="text" class="form-control name="amount"><br>
            </div>
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-dark">Pridėti sąskaitą</button>
    </form>
    
</body>
</html>