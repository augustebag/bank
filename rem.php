<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Išimti lėšas</title>
</head>
<body>
    
    <?php include __DIR__.'/menu.php' ?>
    <?php $id = $_GET['id'] ?? 0 ?>
    <?php include __DIR__ . '/pranesimai.php' ?>
    <form action="?action=rem&id=<?= $id ?>" method="post">
    <input type="text" name="amount">
    <button> Išimti lėšas </button>
    </form>
    
</body>
</html>