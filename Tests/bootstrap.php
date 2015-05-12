<?php
/**
 * Created by PhpStorm.
 * User: danursoviciu
 * Date: 12/05/15
 * Time: 11:47
 */

$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install dependencies to run test suite.');
}
$autoload = require_once $file;
