<?php
return [
    'db' => [
        'host'    => $_ENV['DB_HOST'],
        'port'    => $_ENV['DB_PORT'],
        'name'    => $_ENV['DB_DATABASE'],
        'user'    => $_ENV['DB_USERNAME'],
        // Si la contraseña está vacía en el .env, esto devolverá una cadena vacía
        'pass'    => $_ENV['DB_PASSWORD'] ?? '',
        'charset' => $_ENV['DB_CHARSET'],
    ],
    'base_url' => $_ENV['BASE_URL'],
    'api_key'  => $_ENV['API_KEY'],
];
