<?php

namespace App\Views\Table;

use App\Views\Forms\Products\ProductDeleteForm;
use App\Products\Model;
use Core\Views\Form;
use Core\Views\Table;
use Core\View;


class TableForm extends Table
{
    public function __construct($data = [])
    {
        $table = [
            'attr' => [
                'class' => 'products'
            ],
            'headings' => [
                'id',
                'name',
                'model',
                'producer',
                'inStock',
                'price',
                'actions'
            ],
            'rows' =>  $this->getTableData(),
        ];

        parent::__construct($table);
    }

    public function getTableData(): array
    {
        $products = Model::getWhere([]);
        $rows = [];

        foreach ($products as $product_key => $product) {
            $link = [
                'title' => 'Edit',
                'attr' => [
                    'class' => 'button',
                    'target' => '_blank',
                    'href' => "edit.php?id=$product->id"
                ]
            ];
            $delete = new ProductDeleteForm();
            $edit = new View($link);

            $delete->setId($product->id);
            $delete_form = new Form($delete->getData());

            $rows[] = [
                'id' => $product_key,
                'name' => $product->name,
                'degrees' => $product->degrees,
                'size' => $product->size,
                'quantity' => $product->quantity,
                'price' => $product->price,
                'action' => [$edit->render(ROOT . '/core/templates/link.tpl.php'), $delete_form->render()]
            ];
        }

        return $rows;
    }

}