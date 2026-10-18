<?php
// Include the database connection
require_once "dbconfig.php";

// Prepare a query to retrieve all grocery items
$stmt = $pdo->prepare(
    "SELECT * FROM grocery_items ORDER BY item_id ASC"
);

// Execute the SQL query
$stmt->execute();

// Fetch all matching records into an array
$items = $stmt->fetchAll();

// Display the records in a readable format
echo "<pre>";
print_r($items);
echo "</pre>";
?>