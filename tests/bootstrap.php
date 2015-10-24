<?php
include_once('AutoLoader.php');
AutoLoader::registerDirectory('tests');

$filename = __DIR__.'libs/php-ssh/vendor/autoload.php';

if (!file_exists($filename)) {
    echo 'You must first install the vendors using composer.'.PHP_EOL;
    exit(1);
}

define('TEST_USER', get_current_user());
define('TEST_PASSWORD', '1234');

require_once $filename;
