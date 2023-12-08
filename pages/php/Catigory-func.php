<?php
include('db_conn.php');

global $conn;

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

$productsByCategory = array(); // Initialize empty array

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Create product object
        $product = new stdClass();
        $product->pnum = $row['pnum'];
        $product->paname = $row['paname'];
        $product->price = $row['price'];
        $product->quantity = $row['quantity'];
        $product->img = $row['img'];
        $product->description = $row['description'];

        // Store product by category
        $productsByCategory[$row['category']][] = $product;

    }
    $json_prod = json_encode($productsByCategory);

}

// // Example usage
// if (!empty($productsByCategory)) {
//     foreach ($productsByCategory as $category => $products) {
//         echo "<h3>$category</h3>";
//         foreach ($products as $product) {
//             echo "<p>{$product->paname} - {$product->price}</p>";
//         }
//         echo "<hr>";
//     }
// }
