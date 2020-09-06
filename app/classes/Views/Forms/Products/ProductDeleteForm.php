<?php

namespace App\Views\Forms\Products;

use Core\Views\Form;

class ProductDeleteForm extends Form
{
    public function __construct(array $data = [])
    {
        $delete_form = [
            'attr' => [
                'method' => 'POST',
                'class' => 'hidden_form',
            ],
            'fields' => [
                'id' => [
                    'type' => 'hidden',
                ],
            ],
            'callbacks' => [
                'success' => 'delete_success',
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Trinti',
                    'extra' => [
                        'attr' => [
                            'class' => 'button',
                        ],
                    ],
                ],
            ],
        ];

        parent::__construct($delete_form);
        $this->data['buttons']['save']['title'] = 'X';
    }

    public function setId(int $id)
    {
        $this->data['fields']['id']['value'] = $id;
    }

}