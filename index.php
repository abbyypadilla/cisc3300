<?php

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/controllers/UserController.php';

use controllers\UserController;

$controller = new UserController();
$controller->index();


