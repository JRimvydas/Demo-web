<?php

require '../../bootloader.php';

use App\Views\Forms\Products\ProductDeleteForm;
use App\Products\Product;
use App\Products\Model;

if (!\App\App::$session->getUser() || \App\App::$session->getUser()->role === \App\Users\User::ROLE_USER) {
    header("Http/1.1 401 Unauthorized");
    exit();
}

$form = new ProductDeleteForm();
$form->validate();

function delete_success(array &$form, array $form_values)
{
    $product = new Product($form_values);
    print json_encode(Model::delete($product));

}
