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

    public static function register($username, $password, $email, $tip_id = 3)
    {
        $db = Database::getInstance();

        $query = 'INSERT INTO korisnici (username, password, tip_id, email) '
        . 'VALUES(:u, :p, :tid, :e)';
        $params = [
            ':u' => $username,
            ':p' => $password,
            ':tid' => $tip_id,
            ':e' => $email
        ];

        try {
            $db->insert('Korisnik', $query, $params);
        } catch (Exception $ex) {
            return false;
        }

        return $db->lastInsertId();
    }

    public static function login($username, $password)
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM korisnici ' . 'WHERE username = :u AND password = :p';
        $params = [
            ':u' => $username,
            ':p' => $password
        ];

        $korisnici = $db->select('Korisnik', $query, $params);

        foreach ($korisnici as $korisnik) {
            return $korisnik;
        }
        return null;
    }

    public static function getKorisnikIzvrsilac()
    {
        $db = Database::getInstance();
        $tip_id = 3;

        $query = 'SELECT * FROM korisnici ' . 'WHERE tip_id = :tid';

        $params = [
            ':tid' => $tip_id
        ];

        return $db->select('Korisnik', $query, $params);
    }

    public static function getKorisnikRukovodilac()
    {
        $db = Database::getInstance();
        $tip_id = 2;

        $query = 'SELECT * FROM korisnici ' . 'WHERE tip_id = :tid';

        $params = [
            ':tid' => $tip_id
        ];

        return $db->select('Korisnik', $query, $params);
    }

    public static function izmeniKorisnika($id, $username, $email, $tip)
    {
        $db = Database::getInstance();

        $query = 'UPDATE korisnici SET username = :u, email = :e, tip_id = :t '
        . 'WHERE id = :id';

        $params = [
            ':id' => $id,
            ':u' => $username,
            ':e' => $email,
            ':t' => $tip
        ];

        $db->update('Korisnik', $query, $params);
    }
}
