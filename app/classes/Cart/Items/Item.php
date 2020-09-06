<?php

namespace App\Cart\Items;

use App\Products\Product;
use App\Users\User;
use Core\DataHolder;

class Item extends DataHolder
{
    protected function getId()
    {
        return $this->id ?? null;
    }

    protected function setId(int $id)
    {
        $this->id = $id;
    }

    protected function getProductId()
    {
        return $this->product_id ?? null;
    }

    protected function setProductId(int $product_id)
    {
        $this->product_id = $product_id;
    }

    protected function getUserId()
    {
        return $this->user_id ?? null;
    }

    protected function setUserId(int $user_id)
    {
        $this->user_id = $user_id;
    }

    public function user(): User
    {
        $user = \App\Users\Model::find($this->getUserId());
        if ($user){
            return $user;
        }
    }

    public function product(): Product
    {
        $product = \App\Products\Model::find($this->getProductId());
        if ($product){
            return $product;
        }
    }
}