<?php
    include("db_conn.php");
    $category = $_GET['category'];
    $query = 'select * from product where category = \''.$category.'\';';
    $prods = $conn->query($query);

    $products = array();
    if($prods->num_rows > 0){
        while ($row = $prods->fetch_assoc()) {
            // Create product object
            $product = new stdClass();
            $product->pnum = $row['pnum'];
            $product->pname = $row['paname'];
            $product->price = $row['price'];
            $product->quantity = $row['quantity'];
            $product->img = $row['img'];
            $product->description = $row['description'];

            /// @Dev-K0
            echo "<a href=\"./productPage.php\" target=\"_self\">";
            echo "<div id=\"merch-pcard\">";
                echo "<div id=\"p-img\">"; echo "<img src=\"".$product->img."\">"; echo "</div>";
                
                echo "<div id=\"p-info\">";

                echo "<h1 id=\"p-name\">".$product->pname."</h1>";
                echo "<p class=\"p-price\">السعر:</p>";
                echo "<span id=\"price\">".$product->price."ر.س"."</span>";
                echo "<p id=\"vat\"> غير شامل الضريبة."."</p>";
                
                echo "</div>";
            echo "</div>";
            echo "</a>";
        }
    } else{
        echo "<h1 style=\"color: red;margin:0 40%;\">".' Error no '.$category.' </h1>';
    }
?>