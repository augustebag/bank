<?php

$users = [
    ['vardas' => 'Petras', 'pass' => md5('123')],
    ['vardas' => 'Simona', 'pass' => md5('123')],
    ['vardas' => 'Jadvyga', 'pass' => md5('123')],
];

file_put_contents(__DIR__.'/users.json', json_encode([$users]));