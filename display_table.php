<?php
require_once "dbconfig.php";

// Retrieve all grocery items ordered by their ID
$sql = "SELECT * FROM grocery_items ORDER BY item_id ASC";
$stmt = $pdo->prepare($sql);

// Execute the query and fetch all matching records
$stmt->execute();
$items = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Australian Grocery Items</title>
</head>
<body>
    <h2>Australian Grocery Items</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Country of Origin</th>
                <th>Price</th>
                <th>Stock Quantity</th>
                <th>Expiry Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= htmlspecialchars((string)$item["item_id"]) ?></td>
                    <td><?= htmlspecialchars($item["product_name"]) ?></td>
                    <td><?= htmlspecialchars($item["brand_name"]) ?></td>
                    <td><?= htmlspecialchars($item["category"]) ?></td>
                    <td><?= htmlspecialchars($item["country_of_origin"]) ?></td>
                    <td><?= htmlspecialchars((string)$item["price"]) ?></td>
                    <td><?= htmlspecialchars((string)$item["stock_quantity"]) ?></td>
                    <td><?= htmlspecialchars($item["expiry_date"] ?? "N/A") ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
