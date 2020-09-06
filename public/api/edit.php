<?php

require '../../bootloader.php';

use App\Products\Product;
use App\Products\Model;
use App\Views\Forms\Products\ProductEditForm;

if (!\App\App::$session->getUser() || \App\App::$session->getUser()->role === \App\Users\User::ROLE_USER) {
    header("Http/1.1 401 Unauthorized");
    exit();
}

$forma = new ProductEditForm();

$forma->validate();

function form_success(array &$form, array $form_values)
{
    $product = new Product($form_values);
    $product->id = $_GET['id'];
    Model::update($product);
    print json_encode($product);
}

function form_fail(array &$form, array $form_values)
{
    print 'Kažkas netaip. . . ';
}