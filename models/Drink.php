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
}
