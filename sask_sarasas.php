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
    <?php include __DIR__ . '/pranesimai.php' ?>
    <ul>

    <?php
    usort($saskaita, function($a, $b) {
        return $b['amount'] <=> $a['amount'];
    })
    ?>

    <?php foreach($saskaita as $saskaita2) : ?>
        <div> Sąskaitos Nr. <?= $saskaita2['id'] ?> </div>
            [<a href="?action=add&id=<?= $saskaita2['id'] ?>">Pridėti</a>]
            [<a href="?action=rem&id=<?= $saskaita2['id'] ?>">Išimti</a>]
            <form action="?action=delete&id=<?= $saskaita2['id'] ?>" method="post">
            <button type="submit">Ištrinti sąskaitą</button>
            </form>
    <?php endforeach ?>
    </ul>
    
</body>
</html>