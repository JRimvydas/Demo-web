<?php

require_once '../bootloader.php';

use App\Cart\Items\Item;
use App\Cart\Items\Model;
use App\Views\Forms\Items\ItemCreateForm;
use App\App;
use App\Views\Navigation;
use App\Views\Catalog;

/**
 *form succses atveju sukuriamas failas i kuri irasomi laukeliu duomenys jei email dar nera panaudotas
 *
 * @param array $form
 * @param array $form_values
 */
function add_success(array &$form, array $form_values)
{
    $item = new Item([
        'product_id' => $form_values['id'],
        'user_id' => App::$session->getUser()->id
    ]);

    Model::insert($item);
}

$item_create = new ItemCreateForm();
$item_create->validate();

$navigation = new Navigation();
$catalog = new Catalog();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php print $navigation->render(); ?>
<div class="wrapper">
    <main>
        <h1>Prekės</h1>
        <?php print $catalog->render(); ?>
    </main>
</div>
</body>
</html>