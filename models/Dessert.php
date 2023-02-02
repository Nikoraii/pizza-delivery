<?php

require_once __DIR__ . '/Table.php';

class Dessert extends Table
{
    public static function allDesserts()
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_desserts';

        return $db->select('Dessert', $query);
    }

    // public static function getDessertPrice($dessert_id)
    // {
    //     $db = Databasee::getInstance();

    //     $query = 'SELECT * FROM products_desserts_prices' . 'WHERE dessert_id = :dessert_id';

    //     $params = [
    //         ':dessert_id' => $dessert_id
    //     ];

    //     return $db->select('Dessert', $query, $params);
    // }
}