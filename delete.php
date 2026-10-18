<?php
require_once "dbconfig.php";

// Specify the ID of the grocery item to delete
$item_id = 101;

// Prepare a SQL statement to delete the selected item
$sql = "DELETE FROM grocery_items WHERE item_id = :id";
$stmt = $pdo->prepare($sql);

// Execute the deletion using the item ID
$stmt->execute(["id" => $item_id]);

// Check whether a record was deleted
if ($stmt->rowCount() > 0) {
    echo "Grocery item deleted successfully!";
} else {
    echo "No matching grocery item found.";
}
?>