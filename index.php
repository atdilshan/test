<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\BlogController;

$controller = new BlogController();
$controller->index();
