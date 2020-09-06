<?php

namespace App\Views\Forms\Products;

use Core\Views\Form;

class ProductForm extends Form
{
    public function __construct(array $data = [])
    {
        $form = [
            'attr' => [
                'method' => 'POST',
                'class' => 'create_form'
            ],
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Pavadinimas',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Pvz: Fotoaparatas',
                        ],
                    ],
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                ],
                'model' => [
                    'label' => 'Modelis',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Pvz: Canon sf 123',
                        ],
                    ],
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                ],
                'producer' => [
                    'label' => 'Gamintojas',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Pvz: Canon',
                        ],
                    ],
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                ],
                'inStock' => [
                    'label' => 'Turime sandėlyje ?',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Pvz: Taip',
                        ],
                    ],
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                ],
                'price' => [
                    'label' => 'Kaina (EUR)',
                    'type' => 'number',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Pvz: 15.99',
                        ],
                    ],
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_field_is_numeric',
                    ],
                ],
                'url' => [
                    'label' => 'Nuotrauka (URL)',
                    'type' => 'text',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Http://...',
                        ],
                    ],
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                ],
            ],
            'buttons' => [
                'save' => [
                    'title' => 'Pridėti',
                    'extra' => [
                        'attr' => [
                            'class' => 'button',
                        ],
                    ],
                ],
            ],
        ];
        parent::__construct($form);
    }
}