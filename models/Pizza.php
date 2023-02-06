<?php

require_once __DIR__ . '/Table.php';

class Pizza extends Table
{
    public $id;
    public $username;
    public $password;
    public $email;

    public static function allPizzas()
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_pizzas';

        return $db->select('Pizza', $query);
    }

    public static function getPizzaPrice($pizza_id)
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_pizzas_prices ' . 'WHERE pizza_id = :pizza_id';

        $params = [
            ':pizza_id' => $pizza_id
        ];

        return $db->select('Pizza', $query, $params);
    }

    public static function getPizza($pizza_id)
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM products_pizzas WHERE id = :pizza_id';

        $params = [
            ':pizza_id' => $pizza_id
        ];

        $pizzas = $db->select('Pizza', $query, $params);

        foreach ($pizzas as $pizza) {
            return $pizza;
        }

        return false;
    }
}
