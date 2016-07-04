<?php //require __DIR__.'/../../../autoload.php';

$composer_path = dirname(__DIR__, 3);
$project_path = dirname(__DIR__, 4);

if (!file_exists($composer_path.'/autoload.php'))
    echo('Error, composer path not found !'.PHP_EOL);

if (!file_exists($project_path.'/composer.json'))
    echo('Error, project path not found !'.PHP_EOL);

$composer_path = '';
$vendor_path = '';

var_dump(getcwd());
var_dump($argc);
var_dump($argv);


exit('Error, test path not found !');

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


//\Composer\Autoload\
