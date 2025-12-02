<?php
require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\VarDumper\VarDumper;


$log = new Logger('my_logger');
$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::DEBUG));
$log->info('Мій перший запис у лог!');

$data = [
    'name' => 'Danil',
    'role' => 'Developer',
    'status' => 'active'
];

VarDumper::dump($data);

echo "Готово!";