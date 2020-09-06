<?php

namespace App\Products;

use App\App;

class Model
{
    const TABLE = 'products';

    public static function insert(Product $product)
    {
        App::$db->createTable(self::TABLE);
        return App::$db->insertRow(self::TABLE, $product->_getData());
    }

    public static function getWhere($conditions)
    {

        $rows = App::$db->getRowsWhere(self::TABLE, $conditions);
        $products = [];

        foreach ($rows as $row) {
            $products[] = new Product($row);
        }
        return $products;
    }

    public static function find(int $id): ?Product
    {
        $product_data = App::$db->getRowById(self::TABLE, $id);
        if ($product_data){
            $product = new Product($product_data);
            $product->id = $id;
            return $product;
        }
        return null;
    }

    public static function update(Product $product)
    {
        return App::$db->updateRow(self::TABLE, $product->_getData(), $product->id);
    }

    public static function delete(Product $product)
    {
        return App::$db->deleteRow(self::TABLE, $product->id);
    }

}