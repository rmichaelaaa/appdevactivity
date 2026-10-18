<?php
// Include the database connection
require_once "dbconfig.php";

// Prepare a query to select one grocery item by its ID
$stmt = $pdo->prepare(
    "SELECT * FROM grocery_items WHERE item_id = :id"
);

// Execute the query with the selected item ID
$stmt->execute(["id" => 1]);

// Fetch one matching row
$item = $stmt->fetch();

// Display the result using print_r() and <pre>
echo "<pre>";
print_r($item);
echo "</pre>";
?>