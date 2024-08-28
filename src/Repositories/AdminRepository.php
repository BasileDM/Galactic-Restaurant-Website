<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;

class AdminRepository
{
    private $DB;

    public function __construct()
    {
        $database = new Database;
        $this->DB = $database->getDB();

        require_once __DIR__ . '/../../config.local.php';
    }

    public function verifyUser($username, $password)
    {
        // Prepare the SQL statement to select the user by username
        $query = $this->DB->prepare("SELECT * FROM rest_admin WHERE username = :username");

        // Bind the username parameter to the prepared statement
        $query->bindParam(':username', $username);

        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password']))
        {
            return $user;
        }

        return false;
    }

    public function dropTables()
    {
        $tables = [
            'Rest_Cook',
            'Rest_Reservation',
            'Rest_Admin',
            'Rest_Customer_Review',
            'Rest_TypesOfDish',
            'Rest_Dish',
            'Rest_Dish_Logs',
            'Rest_Reservation_Logs',
            'rest_cook',
            'rest_reservation',
            'rest_admin',
            'rest_customer_review',
            'rest_types_of_dish',
            'rest_dish',
            'rest_dish_logs',
            'rest_reservation_logs'
        ];

        foreach ($tables as $table)
        {
            $query = $this->DB->prepare("DROP TABLE IF EXISTS $table");
            $query->execute();
        }
    }
}
