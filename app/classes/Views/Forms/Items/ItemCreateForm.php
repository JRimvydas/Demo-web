<?php

namespace App\Views\Forms\Items;

use Core\Views\Form;

class ItemCreateForm extends Form
{
    public function __construct(array $data = [])
    {

        $item_create_form = [
            'attr' => [
                'method' => 'POST',
                'class' => 'hidden_item_form',
            ],
            'fields' => [
                'id' => [
                    'type' => 'hidden',
                ],
            ],
            'callbacks' => [
                'success' => 'add_success',
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
        parent::__construct($item_create_form);
        $this->data['buttons']['save']['title'] = 'Pridėti į krepšelį';
    }

    public function setId(int $id)
    {
        $this->data['fields']['id']['value'] = $id;
    }
}