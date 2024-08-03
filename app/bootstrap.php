<?php

// Load config
require_once 'config/config.php';

// Autoload Core Libraries
spl_autoload_register(function (string $className): void {
    require_once 'libraries/' . $className . '.php';
});
