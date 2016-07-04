<?php

// Configuration
$host = '127.0.0.1'; // 0.0.0.0 (for all)
$port = 80; // 8080 (for an alternative port)
$dir  = 'web/';
$scr  = '"'.realpath(__DIR__.DIRECTORY_SEPARATOR.'server_router.php').'"';

// Build
$cmd = "php -S $host:$port -t $dir $scr";

// About
echo "Listening on {$host}:{$port}".PHP_EOL;
echo "Press CTRL+C to quit...".PHP_EOL;
echo PHP_EOL;

// Run
shell_exec($cmd);
