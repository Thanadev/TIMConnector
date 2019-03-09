<?php

namespace Thanadev\TIM\Connector;

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    $class = str_replace(__NAMESPACE__ . '\\', '', $class);

    include 'src/' . $class . '.php';
});


$monitoringModule = new MainMonitoring();

$monitoringModule->main(MainMonitoring::ACTION_SERVER_INFO);