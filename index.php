<?php

session_start();

function redirect() {
    header('Location: http://localhost/bank/');
    die;
}

function redirectToAction($action, $id = 0) {
    if ($id) {
        header('Location: http://localhost/bank/?action=' . $action, '&id=' . $id);
    } else {
        header('Location: http://localhost/bank/?action=' . $action);
    }
    die;
}

function getMessage() {
    if(!isset($_SESSION['pranesimai'])) {
        return false;
    }
    $pranesimai = $_SESSION['pranesimai'];
    unset($_SESSION['pranesimai']);
    return $pranesimai;
}

function setMessage(string $pranesimai) {
    $_SESSION['pranesimai'] = $pranesimai;
}


// Saskaita ['id' => 25, 'amount' => 200]

if (!file_exists(__DIR__.'/saskaita.json')) {
    file_put_contents(__DIR__.'/saskaita.json', json_encode([]));
}
$saskaita = json_decode(file_get_contents(__DIR__.'/saskaita.json'), 1);

// 1. Saskaitu sarasas GET

if(!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__.'/sask_sarasas.php';
}

// 2. Pridejimo atvaizdavimas GET

elseif($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ .'/prideti_lesas.php';
}

// 3. Pridejimo vykdymas POST

elseif($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ .'/doAdd.php';
}

// 4. Atemimo atvaizdavimas GET

elseif($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ .'/rem.php';
}

// 5. Isemimo vykdymas POST

elseif($_GET['action'] == 'rem' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ .'/dorem.php';
}

// 6. Naujos saskaitos pridejimo atvaizdavimas GET

elseif($_GET['action'] == 'addAccount' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__ . '/sask_pridejimas.php';
}

// 7. Naujos saskaitos pridejimo vykdymas POST

elseif($_GET['action'] == 'addAccount' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doSask_pridejimas.php';
}

// 8. Saskaitos istrynimo vykdymas POST

elseif($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__ . '/doDelete.php';
}

?>