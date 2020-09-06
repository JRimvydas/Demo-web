<?php

namespace App\Views;

use App\Views\Forms\Items\ItemCreateForm;
use Core\View;
use App\Products\Model;

class Catalog extends View
{

    public function __construct($data = [])
    {
        $data = $this->getTableData();

        parent::__construct($data);
    }

    private function getTableData(): array
    {
        $products = Model::getWhere([]);
        $rows = [];

        foreach ($products as $product_key => $product) {
            $item = new ItemCreateForm();
            $item->setId($product->id);
            $rows[] = [
                'id' => $product_key,
                'name' => $product->name,
                'model' => $product->model,
                'producer' => $product->producer,
                'inStock' => $product->inStock,
                'price' => $product->price,
                'url' => $product->url,
                'cart' => $item->render(),
            ];
        }

        return $rows;
    }

    public function render($path = ROOT . '/app/templates/catalog.tpl.php')
    {
        return parent::render($path);
    }
}