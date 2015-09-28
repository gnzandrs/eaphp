<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \EaPHP\Application(
    new \Illuminate\Container\Container()
);

$app->run();