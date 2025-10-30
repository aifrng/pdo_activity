<?php
require 'dbconfig.php';

$sql = "INSERT INTO grocery_items (item_name, category, price, quantity, expiration_date) 
        VALUES ('Orange', 'Fruits', 0.60, 120, '2025-11-20')";

$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "Record inserted successfully!";
?>
