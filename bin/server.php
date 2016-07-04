<?php //require __DIR__.'/../../../autoload.php';

var_dump($argc);
var_dump($argv);

exit;

$cmd = 'php -S 127.0.0.1:8080 router.php';

chdir(__DIR__.'/../../../../');

//$cmd = $_GET['cmd'];

$pipes = [];

$process = proc_open(
    $cmd,
    [
        0 => ['pipe', 'r'], // stdin
        1 => ['pipe', 'w'], // stdout
        2 => ['pipe', 'w'], // stderr
    ],
    $pipes);

if (is_resource($process))
{
    while ($s = fgets($pipes[1]))
    {
        echo $s;
        flush();
    }
}

proc_close($process);


\Composer\Autoload\
