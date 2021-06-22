<?php

$saskaita2 = ['id' => rand(1000000000, 9999999999), 'amount' => 0, 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'accNumber' => $_POST['accNumber'], 'balance' => $_POST['balance']];
$saskaita[] = $saskaita2;

file_put_contents(__DIR__.'/saskaita.json', json_encode($saskaita));
setMessage('Nauja sąskaita pridėta!');
redirect();
