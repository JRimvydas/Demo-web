<?php

require '../../bootloader.php';

use App\Products\Product;
use App\Products\Model;
use App\Views\Forms\Products\ProductCreateForm;

if (!\App\App::$session->getUser() || \App\App::$session->getUser()->role === \App\Users\User::ROLE_USER) {
    header("Http/1.1 401 Unauthorized");
    exit();
}
/**
 *form succses atveju sukuriamas failas i kuri irasomi laukeliu duomenys jei email dar nera panaudotas
 *
 * @param array $form
 * @param array $form_values
 */
function form_success(array &$form, array $form_values)
{
    $product = new Product($form_values);
    $product->id = Model::insert($product);
    print json_encode($product);
    $form['message']['success'] = 'Sėkmingai pridėtas Butelis!';

}

/**
 * @param array $form
 * @param array $form_values
 */
function form_fail(array &$form, array $form_values)
{
    $form['message']['error'] = 'Yra tuščių laukelių';
}

$forma = new ProductCreateForm();
$forma->validate();