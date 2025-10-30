<?php
require 'dbconfig.php';

$sql = "UPDATE grocery_items SET price = 1.50, quantity = 60 WHERE item_id = 3"; // Update Milk
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "Record updated successfully!";
?>
