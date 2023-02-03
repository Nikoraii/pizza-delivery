<?php

require_once __DIR__ . '/Table.php';

class User extends Table
{
    public static function register($name, $email, $phone_numb, $password, $address)
    {
        $db = Database::getInstance();

        $query = 'INSERT INTO users (name, email, phone_number, password, address) '
        . 'VALUES(:u, :e, :pn, :pass, :add)';

        $params = [
            ':u' => $name,
            ':e' => $email,
            ':pn' => $phone_numb,
            ':pass' => $password,
            ':add' => $address
        ];

        try {
            $db->insert('User', $query, $params);
        } catch (Excetpion $ex) {
            return false;
        }
        return $db->lastInsertId();
    }

    public static function login($email, $password)
    {
        $db = Database::getInstance();

        $query = 'SELECT * FROM users ' . 'WHERE email = :e AND password = :pass';
        $params = [
            ':e' => $email,
            ':pass' => $password
        ];

        $users = $db->select('User', $query, $params);

        foreach ($users as $user) {
            return $user;
        }
        return null;
    }
}
