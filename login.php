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
    <title>Prisijungti</title>
</head>
<body>
    <h1> Prisijungti </h1>
    <?php include __DIR__ . '/pranesimai.php' ?>
    <?php include __DIR__ . '/menu.php' ?>
    <form action="http://localhost/bank/login.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <button type="submit">Prisijungti</button>
    </form>
</body>
</html>