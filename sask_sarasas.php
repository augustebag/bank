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
    <!-- <?php include __DIR__ . '/pranesimai.php' ?> -->

    <ul>
    <?php
    usort($saskaita, function($a, $b) {
        return $b['amount'] <=> $a['amount'];
    })
    ?>

    <?php foreach($saskaita as $saskaita2) : ?>
        <div> Vardas <?= $saskaita2['name'] ?> </div>
        <div> Pavardė <?= $saskaita2['surname'] ?> </div>
        <div> Sąskaitos Nr. <?= $saskaita2['id'] ?> </div>
        <div> Asmens kodas <?= $saskaita2['accNumber'] ?> </div>
        <div> Sąskaitos likutis  <?= $saskaita2['amount'] ?> </div>
            [<a href="?action=add&id=<?= $saskaita2['id'] ?>">Pridėti</a>]
            [<a href="?action=rem&id=<?= $saskaita2['id'] ?>">Išimti</a>]
            <form action="?action=delete&id=<?= $saskaita2['id'] ?>" method="post">
            <button type="submit">Ištrinti sąskaitą</button>
            </form>
    <?php endforeach ?>
    </ul>
    
</body>
</html>