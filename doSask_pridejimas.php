<?php

$saskaita2 = ['id' => rand(1000000000, 9999999999), 'amount' => 0];
$saskaita[] = $saskaita2;

file_put_contents(__DIR__.'/saskaita.json', json_encode($saskaita));
redirect();
