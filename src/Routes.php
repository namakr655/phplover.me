<?php

$routes = [
    [
        'url' => '/',
        'controller' => 'Home',
        'method' => 'index',
    ],
    [
        'url' => '/documentation',
        'controller' => '\Phplover\Modules\Documentation\Controllers\Index',
        'method' => 'index',
    ],
    [
        'url' => '/documentation/{slug}',
        'controller' => '\Phplover\Modules\Documentation\Controllers\Index',
        'method' => 'showPage',
    ],
];