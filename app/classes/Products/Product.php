<?php

namespace App\Products;

use Core\DataHolder;

class Product extends DataHolder
{
    protected function getId()
    {
        return $this->id ?? null;
    }

    protected function setId($id)
    {
        $this->id = $id;
    }

    protected function setName(string $name)
    {
        $this->name = $name;
    }

    protected function getName()
    {
        return $this->name ?? null;
    }

    protected function setModel(string $model)
    {
        return $this->model = $model;
    }

    protected function getModel()
    {
        return $this->model ?? null;
    }


    protected function setProducer(string $producer)
    {
        return $this->producer = $producer;
    }

    protected function getProducer()
    {
        return $this->producer ?? null;
    }

    protected function setInstock(string $inStock)
    {
        return $this->inStock = $inStock;
    }

    protected function getInstock()
    {
        return $this->inStock ?? null;
    }

    protected function setPrice(float $price)
    {
        $this->price = $price;
    }

    protected function getPrice()
    {
        return $this->price ?? null;
    }

    protected function setUrl(string $url)
    {
        $this->url = $url;
    }

    protected function getUrl()
    {
        return $this->url ?? null;
    }

}