<?php

session_start();

// Saskaita ['id' => 25, 'amount' => 200]

if (!file_exists(__DIR__.'/saskaita.json')) {
    file_put_contents(__DIR__.'/saskaita.json', json_encode([]));
}
$saskaita = json_decode( file_get_contents(__DIR__.'/saskaita.json'), 1);

// 1. Saskaitu sarasas GET

if(!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__.'/sask_sarasas.php';
}

// 2. Pridejimo atvaizdavimas GET

elseif($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ .'/prideti_lesas.php';
}

// 3. Pridejimo vykdymas POST
// 4. Atemimo atvaizdavimas GET
// 5. Isemimo vykdymas POST
// 6. Naujos saskaitos pridejimo atvaizdavimas GET

elseif($_GET['action'] == 'addAccount' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/sask_pridejimas.php';
}
// 7. Naujos saskaitos pridejimo vykdymas POST
// 8. Saskaitos istrynimo vykdymas POST

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
</head>
<body>
    
</body>
</html>