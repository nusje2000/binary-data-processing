<?php

declare(strict_types=1);

use App\Reader;

require_once __DIR__ . '/../vendor/autoload.php';

$reader = new Reader();
$reader->open(dirname(__DIR__) . '/example.bmp');
