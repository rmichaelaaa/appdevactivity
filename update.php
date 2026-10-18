<?php
require_once "dbconfig.php";

// Specify the product ID and its new values
$item_id = 1;
$new_price = 6.25;
$new_stock = 35;

// Prepare a SQL statement to update the product
$sql = "UPDATE grocery_items
        SET price = :price,
            stock_quantity = :stock
        WHERE item_id = :id";

$stmt = $pdo->prepare($sql);

// Execute the update with the new values
$stmt->execute([
    "price" => $new_price,
    "stock" => $new_stock,
    "id" => $item_id
]);

// Display the result of the update operation
if ($stmt->rowCount() > 0) {
    echo "Grocery item updated successfully!";
} else {
    echo "No changes made, or the item was not found.";
}
?>