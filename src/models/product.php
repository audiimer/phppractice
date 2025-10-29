<?php

class Product {
    public function getData() : array
        {
            // Data Source Name: specifies driver, host, database name, charset and port for PDO (PDO = PHP Data Objects)
$dsn = "mysql:host=localhost;dbname=product_db;charset=utf8;port=3306";

// Create a new PDO instance using the DSN and credentials (username, password)
$pdo = new PDO($dsn, "product_db_user", "secret", [
    // Configure PDO to throw exceptions on errors (easier error handling)
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// Execute a simple SQL query; returns a PDOStatement object (STMT = statement)
$stmt = $pdo->query("SELECT * FROM product");

// Fetch all rows from the result set as an array of associative arrays
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $products;
        }
    }
