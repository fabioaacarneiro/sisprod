<?php

namespace App\Repositories;

use Exception;
use PDO;
use Src\Connection;

final class ProductRepository
{
    private function __construct()
    {
    }

    private static function createTableIfNotExist()
    {
        $sql = 'CREATE TABLE IF NOT EXISTS products(
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(100) NOT NULL,
            price FLOAT NOT NULL,
            quantity INT NOT NULL,
            category VARCHAR(150) NOT NULL
        )';

        $conn = Connection::up();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        Connection::down();
    }

    public static function store(string $name, float $price, int $quantity, string $category)
    {
        self::createTableIfNotExist();

        try {

            $sql = 'INSERT INTO products (name, price, quantity, category) 
                    VALUES (:name, :price, :quantity, :category);';
            $conn = Connection::up();
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':category', $category);
            $stmt->execute();
            Connection::down();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function findAll()
    {
        self::createTableIfNotExist();

        $sql = 'SELECT * FROM products';

        $conn = Connection::up();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        Connection::down();

        return $data;
    }

    public static function findById(int $id)
    {
        self::createTableIfNotExist();

        $sql = 'SELECT * FROM products WHERE id = :id;';

        $conn = Connection::up();

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_OBJ);

        Connection::down();

        return $data;
    }
}
