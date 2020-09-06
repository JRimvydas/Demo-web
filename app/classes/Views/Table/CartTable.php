<?php

namespace App\Views\Table;

use App\App;
use App\Cart\Items\Model;
use App\Views\Forms\Products\ProductDeleteForm;
use Core\Views\Table;

class CartTable extends Table
{
    public function __construct($data = [])
    {
        $table = [
            'attr' => [
                'class' => 'products'
            ],
            'headings' => [
                'id',
                'Prekė',
                'Modelis',
                'Gamintojas',
                'Turime Sandėlyje ?',
                'Kaina',
                'Veiksmai'
            ],
            'rows' => $this->getCartData(),
        ];

        parent::__construct($table);
    }

    public function getCartData()
    {
        $items = Model::getWhere(['user_id' => App::$session->getUser()->id]);
        $rows = [];

        foreach ($items as $item_key => $item) {
            $nebenoriu = new ProductDeleteForm();
            $nebenoriu->setId($item->id);

            $product = $item->product();
            $rows[] = [
                'id' => $item_key,
                'Preke' => $product->name,
                'Modelis' => $product->model,
                'Gamintojas' => $product->producer,
                'Sandėlyje' => $product->inStock,
                'Kaina' => $product->price,
                'Veiksmai' => $nebenoriu->render()
            ];
        }
        return $rows;
    }
}