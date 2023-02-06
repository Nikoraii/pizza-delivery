<?php

require_once __DIR__ . '/Table.php';

class Drink extends Table
{
    public static function allDrinks()
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_drinks';

        return $db->select('Drink', $query);
    }

    public static function getDrink($drink_id)
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_drinks WHERE id = :drink_id';

        $params = [
            ':drink_id' => $drink_id
        ];

        $drinks = $db->select('Drink', $query, $params);

        foreach ($drinks as $drink) {
            return $drink;
        }

        return false;
    }
}
