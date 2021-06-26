<?php

require __DIR__ . '/bootstrap.php';


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(isset($_GET['logout'])) {
        unset($_SESSION['prisijunges'], $_SESSION['name']);
        setMessage('Viso gero');
        header('Location: http://localhost/bank/login.php');
        die;
        // 2. Atjungia user
    }
    // 1. Rodyti forma
} else {
    // 2. Tikrinti prisijungimo duomenis
    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
    foreach ($users as $user) {
        if($user['name'] == $_POST['name']) {
            if($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['prisijunges'] = 1;
                $_SESSION['name'] = $user['name'];
                setMessage('Labas, ' . $user['name']);
                header('Location: http://localhost/bank/member.php');
                die;
            }
        }
    }
    setMessage('Netinkamas slaptažodis');
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
    <title>Prisijungti</title>
</head>
<body>
    <?php include __DIR__ . '/pranesimai.php' ?>
    <?php include __DIR__ . '/menu.php' ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
            <h1> Prisijungti </h1>
            <form action="http://localhost/bank/login.php" method="post">
            <label for="">Darbuotojo vardas</label>
            <input class="form-control" type="text" name="name"><br>
            <label for="">Slaptažodis</label>
            <input class="form-control" type="password" name="pass"><br>
            <button class="btn btn-secondary" type="submit">Prisijungti</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>