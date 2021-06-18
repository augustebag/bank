<?php

$id = $_GET['id'] ?? 0;
foreach($saskaita as $index => $saskaita2) {
    if ($saskaita2['id'] == $id) {
        unset($saskaita[$index]);
        file_put_contents(__DIR__.'/saskaita.json', json_encode($saskaita));
        redirect();
    }
}