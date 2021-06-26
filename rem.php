<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Išimti lėšas</title>
</head>
<body>
    <?php include __DIR__.'/menu.php' ?>
    <?php $id = $_GET['id'] ?? 0 ?>
    <?php include __DIR__ . '/pranesimai.php' ?>
    <h1>Išimti lėšas</h1>
    <div class="col-md-6">
        <form action="?action=rem&id=<?= $id ?>" method="post">
            <input type="text" class="form-control" name="amount"><br>
            <button class="btn btn-secondary"> Išimti lėšas </button>
            <a class="btn btn-danger" href=http://localhost/bank>Grįžti</a>
        </form>
    </div>
    
</body>
</html>