<?php

session_start();


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
