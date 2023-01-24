<?php

namespace Home\Config;

$routes->get('/', [\Home\Controllers\Home::class, 'index']);
$routes->get('/helper', [\Home\Controllers\Home::class, 'helper']);
$routes->get('/parser', [\Home\Controllers\Home::class, 'parser']);
$routes->get('/parser-viewpath', [\Home\Controllers\Home::class, 'parser_viewpath']);
