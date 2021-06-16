<?php

$id = $_GET['id'] ?? 0;
foreach($saskaita as &$saskaita2) {
    if($saskaita2 ['id'] == $id) {
        $saskaita2['amount']+=(int) $_POST['amount'];
        file_put_contents(__DIR__.'/saskaita.json', json_encode($saskaita));
        redirect();
    }
}