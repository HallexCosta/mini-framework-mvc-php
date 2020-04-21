<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/functions/functions.php';

use App\Controller\TesteController;
(new \App\Core\RouterCore());
$testeController = new TesteController;
