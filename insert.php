<?php
require_once "dbconfig.php";

// Define the details of the new grocery item
$product_name = "Strawberry Jam 500g";
$brand_name = "Beerenberg";
$category = "Jams";
$country_of_origin = "Australia";
$price = 6.50;
$stock_quantity = 16;
$expiry_date = "2027-12-31";

// Prepare an SQL statement to insert the new product
$sql = "INSERT INTO grocery_items
        (product_name, brand_name, category, country_of_origin,
         price, stock_quantity, expiry_date)
        VALUES
        (:product_name, :brand_name, :category, :country_of_origin,
         :price, :stock_quantity, :expiry_date)";

$stmt = $pdo->prepare($sql);

// Execute the statement using the product details
$stmt->execute([
    "product_name" => $product_name,
    "brand_name" => $brand_name,
    "category" => $category,
    "country_of_origin" => $country_of_origin,
    "price" => $price,
    "stock_quantity" => $stock_quantity,
    "expiry_date" => $expiry_date
]);

echo "Grocery item inserted successfully!";
?>