<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    // 1. Rodyti forma
    // 2. Atjungia user
} else {
    // 2. Tikrinti prisijungimo duomenis
    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
    foreach ($users as $user) {
        if($user['vardas'] == $_POST['vardas']) {
            if($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['prisijunges'] = 1;
                $_SESSION['vardas'] = $user['vardas'];
                header('Location: http://localhost/bank/member.php');
                setMessage('Sveiki prisijungę!');
                die;
            }
        }
    }
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
    <?php include __DIR__ . '/menu.php' ?>
    <form action="http://localhost/bank/login.php" method="post">
    <input type="text" name="vardas">
    <input type="password" name="pass">
    <button type="submit">Prisijungti</button>
    </form>
</body>
</html>