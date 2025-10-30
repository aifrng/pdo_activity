<?php
require 'dbconfig.php';

$sql = "SELECT * FROM grocery_items";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery Items Table</title>
</head>
<body>
    <h2>Grocery Items</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Expiration Date</th>
        </tr>
        <?php foreach($results as $row): ?>
            <tr>
                <td><?= $row['item_id']; ?></td>
                <td><?= $row['item_name']; ?></td>
                <td><?= $row['category']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['quantity']; ?></td>
                <td><?= $row['expiration_date']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
