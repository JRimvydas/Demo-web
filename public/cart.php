<?php

require_once '../bootloader.php';

use App\Views\Navigation;
use App\Views\Table\CartTable;
use App\Cart\Items\Item;
use App\Cart\Items\Model;
use App\Views\Forms\Products\ProductDeleteForm;

function delete_success(array &$form, array $form_values)
{
    $item = new Item($form_values);
    Model::delete($item);
}
$delete = new ProductDeleteForm();
$delete->validate();

$navigation = new Navigation();
$cart = new CartTable();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bottle mania</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php print $navigation->render(); ?>
<div class="wrapper">
    <main>
        <h1>Krepšelis</h1>
        <?php print $cart->render(); ?>
    </main>
</div>
</body>
</html>