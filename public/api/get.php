<?php

require '../../bootloader.php';

use App\Products\Model;

if (!\App\App::$session->getUser() || \App\App::$session->getUser()->role === \App\Users\User::ROLE_USER) {
    header("Http/1.1 401 Unauthorized");
    exit();
}

$products = Model::getWhere([]);
print json_encode($products);