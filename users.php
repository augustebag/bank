<?php

$users = [
    ['name' => 'Petras', 'pass' => md5('123')],
    ['name' => 'Simona', 'pass' => md5('123')],
    ['name' => 'Jadvyga', 'pass' => md5('123')],
    ['name' => 'Jonas', 'pass' => md5('123')]
];

file_put_contents(__DIR__.'/users.json', json_encode($users));
