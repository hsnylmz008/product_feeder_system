<?php

// Autoloading...
function autoloadProviders($className) {
    $file = __DIR__.'/'.str_replace('\\','/',$className).'.php';

    if (file_exists($file)) require $file;
}

spl_autoload_register('autoloadProviders');


if ($argc != 3) {
    die(
        'You must send 3 arguments...'.PHP_EOL.
        'The first is php file name, the second one is provider name and the third one is data file name..'.PHP_EOL.
        'like: php index.php Google products.json'
    );
}

/**
 * 0. argument = index.php
 * 1. argument is class name
 * 2. argument is data file name
 */

// $argv[0] is index.php
$className = $argv[1]; // class name
$fileName = $argv[2]; // data file name

$providerClass = 'Providers\\'.$className;

if (file_exists($fileName)) {

    if (class_exists($providerClass)) {

        $feeder = new $providerClass;
        $feeder->readData('products.json');

    } else {
        die($argv[1].' provider does not exists... The providers must be one of Cimri, Facebook and Google');
    }

} else {
    die($argv[1].' file does not exists in root');

}
