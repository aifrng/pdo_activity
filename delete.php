<?php
require 'dbconfig.php';

$sql = "DELETE FROM grocery_items WHERE item_id = 5"; // Delete Eggs
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo "Record deleted successfully!";
?>
