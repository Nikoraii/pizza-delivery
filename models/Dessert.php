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

    public static function getDessert($dessert_id)
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_desserts WHERE id = :dessert_id';

        $params = [
            ':dessert_id' => $dessert_id
        ];

        $desserts = $db->select('Dessert', $query, $params);

        foreach ($desserts as $dessert) {
            return $dessert;
        }

        return false;
    }
}