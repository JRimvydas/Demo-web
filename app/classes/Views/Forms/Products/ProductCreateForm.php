<?php

namespace App\Views\Forms\Products;

class ProductCreateForm extends ProductForm
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->data['buttons']['save']['title'] = 'Pridėti';
    }
}