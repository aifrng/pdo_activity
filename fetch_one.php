<?php
require 'dbconfig.php';

$sql = "SELECT * FROM grocery_items WHERE item_id = 1"; // Fetch item with ID = 1
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch single record
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";
?>
