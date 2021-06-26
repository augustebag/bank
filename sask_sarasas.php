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
    

<h1>Sąskaitų sąrašas</h1>

    <?php
    usort($saskaita, function($a, $b) {
        return $b['surname'] <=> $a['surname'];
    });
    ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Sąskaitos Nr.</th>
            <th>Asmens kodas</th>
            <th>Sąskaitos likutis</th>
        </tr>
    </thead>
    <tbody> 
        <?php foreach($saskaita as $saskaita2) :
            $name = $saskaita2['name'];
            $surname = $saskaita2['surname'];
            $id = $saskaita2['id']; 
            $accNumber = $saskaita2['accNumber']; 
            $amount = $saskaita2['amount'];
            ?> 
            <tr>
                <td><?=$name?></td>
                <td><?=$surname?></td>
                <td><?=$id?></td>
                <td><?=$accNumber?></td>
                <td><?=$amount?></td>
                    <a href="?action=add&id=<?= $saskaita2['id'] ?>">Pridėti</a>
                    <a href="?action=rem&id=<?= $saskaita2['id'] ?>">Išimti</a>
                    <form action="?action=delete&id=<?= $saskaita2['id'] ?>" method="post">
                        <button type="submit">Ištrinti sąskaitą</button>
                    </form> 
             </tr>
             <?php endforeach ?>
    </tbody> 
        </table>
</body>
</html>